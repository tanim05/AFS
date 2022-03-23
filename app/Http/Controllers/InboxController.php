<?php

namespace App\Http\Controllers;
use App\Models\Models\Batch;
use App\Models\Module;
use App\Models\ModuleWiseCourse;
use App\Models\Subject;
use App\Models\participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class InboxController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //

    public function index()
    {
        
        $data['moduleList']=DB::table('modules')
        ->select('modules.id','modules.name','modules.forwarded','modules.month','modules.file_name','modules.batch_id','batches.name as filename','module_wise_courses.remarks','intakes.name as department')
        ->join('module_wise_courses', 'modules.id', '=', 'module_wise_courses.module_id')
        ->join('batches', 'modules.batch_id', '=', 'batches.id')
        ->join('intakes', 'batches.intake_id', '=', 'intakes.id')
        ->whereNull('modules.status')
        ->where('module_wise_courses.flag','=', 0)
        ->where('module_wise_courses.subject_id','=', auth()->user()->id)
        ->get();
      

 //print_r($data['moduleList']);
 //exit;
return view('pages.inbox.index', $data);
  
    }


    public function chairman($id)
    {
        
        $data['moduleList']=DB::table('modules')
        ->select('modules.id','modules.name','modules.forwarded','modules.month','modules.file_name','modules.batch_id','batches.name as filename','module_wise_courses.remarks','intakes.name as department')
        ->join('module_wise_courses', 'modules.id', '=', 'module_wise_courses.module_id')
        ->join('batches', 'modules.batch_id', '=', 'batches.id')
        ->join('intakes', 'batches.intake_id', '=', 'intakes.id')
        ->whereNull('modules.status')
        ->where('batches.intake_id','=', $id)
        ->where('module_wise_courses.flag','=', 0)
        ->where('module_wise_courses.subject_id','=', auth()->user()->id)
        ->get();
      

 //print_r($data['moduleList']);
 //exit;
return view('pages.inbox.index', $data);

  
    }
    public function EditNote($id)
    {   
        $data['module']=DB::table('modules')
        ->select('modules.id','modules.name','modules.month','modules.batch_id','batches.name as filename','participants.role','participants.desig_id as designame')
        ->join('module_wise_courses', 'modules.id', '=', 'module_wise_courses.module_id')
        ->join('batches', 'modules.batch_id', '=', 'batches.id')
        ->join('participants', 'module_wise_courses.subject_id', '=', 'participants.id')
        ->join('subjects', 'participants.desig_id', '=', 'subjects.id')
        ->where('modules.id','=', $id)
         ->where('module_wise_courses.subject_id','=', auth()->user()->id)
        ->first();
       //print_r($data['module']);
        //exit;

       $data['remarklsit']=DB::table('module_wise_courses')
       ->select('module_wise_courses.subject_id','participants.name','module_wise_courses.remarks','module_wise_courses.flag')
       ->join('participants', 'module_wise_courses.subject_id', '=', 'participants.id')
       ->where('module_wise_courses.module_id','=', $id)
       ->get();

        return view('pages.inbox.edit', $data);



    }
    public function update(Request $request, $id)
    {
        switch ($request->input('action')) {
            case 'Forward':                      
        $module = ModuleWiseCourse::where('module_id','=',$id)
        ->where('subject_id','=',auth()->user()->id)
        ->first();
        $modulestatus = Module::find($id);
        $modulestatus->forwarded='Y';

        $module->flag = 1;
        $module->remarks = $request->remarks;

        $module->save();
        $modulestatus->save();
        return Redirect()->route('inbox.index')->with('success','Forwarded.');
                // Save model
                break;
    
            case 'Approve':
                $module = ModuleWiseCourse::where('module_id','=',$id)
                ->where('subject_id','=',auth()->user()->id)
                ->first();
                $modulestatus = Module::find($id);
                $modulestatus->status='Approved';
                $module->flag = 1;
                $module->remarks = $request->remarks;
                $module->save();
                $modulestatus->save();
                return Redirect()->route('inbox.index')->with('success','Approved.');
                // Preview model
                break;
    
            case 'Reject':
                $module = ModuleWiseCourse::where('module_id','=',$id)
                ->where('subject_id','=',auth()->user()->id)
                ->first();
                $modulestatus = Module::find($id);
                $modulestatus->status='Rejected';
                $module->flag = 1;
                $module->remarks = $request->remarks;
                $module->save();
                $modulestatus->save();
                return Redirect()->route('inbox.index')->with('success','Rejected.');
                // Redirect to advanced edit
                break;
        }
    

        // if(auth()->user()->role=='4' && auth()->user()->desig_id=='7' )
        //  {
        //     $module = ModuleWiseCourse::where('module_id','=',$id)
        //     ->where('subject_id','=',auth()->user()->id)
        //     ->first();
        //     $modulestatus = Module::find($id);
        //     $modulestatus->forwarded='Y';
        //     $module->flag = 1;
        //     $module->remarks = $request->remarks;
        //     $module->save();
        //     $modulestatus->save();
        
        //     return Redirect()->route('inbox.index')->with('success','Forwared.');
        // }
          
        // if(auth()->user()->role=='4')
        //  {
        //     $module = ModuleWiseCourse::where('module_id','=',$id)
        //     ->where('subject_id','=',auth()->user()->id)
        //     ->first();
        //     $modulestatus = Module::find($id);
        //     $modulestatus->status='Approved';
        //     $module->flag = 1;
        //     $module->remarks = $request->remarks;
        //     $module->save();
        //     $modulestatus->save();
        //     return Redirect()->route('inbox.index')->with('success','Approved.');
        // }
            
        // $module = ModuleWiseCourse::where('module_id','=',$id)
        // ->where('subject_id','=',auth()->user()->id)
        // ->first();
        // $modulestatus = Module::find($id);
        // $modulestatus->forwarded='Y';

        // $module->flag = 1;
        // $module->remarks = $request->remarks;

        // $module->save();
        // $modulestatus->save();
        // return Redirect()->route('inbox.index')->with('success','Forwarded.');
        
    }
    public function approve(Request $request,$id)
    {
        $module = ModuleWiseCourse::where('module_id','=',$id)
        ->where('subject_id','=',auth()->user()->id)
        ->first();
        $modulestatus = Module::find($id);
        $modulestatus->status='Approved';

        $module->flag = 1;
        $module->remarks = $request->remarks;

        $module->save();
        $modulestatus->save();
        return Redirect()->route('inbox.index')->with('success','Approved.');
        
        
    }

    public function reject(Request $request,$id)
    {
        $module = ModuleWiseCourse::where('module_id','=',$id)
            ->where('subject_id','=',auth()->user()->id)
            ->first();
            $modulestatus = Module::find($id);
            $modulestatus->status='Rejected';
            $module->flag = 1;
            $module->remarks = $request->remarks;
            $module->save();
            $modulestatus->save();
            return Redirect()->route('inbox.index')->with('success','Rejected.');
        
        
    }


}
