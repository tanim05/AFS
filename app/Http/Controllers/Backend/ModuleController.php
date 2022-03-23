<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Models\Batch;
use App\Models\Module;
use App\Models\ModuleWiseCourse;
use App\Models\Subject;
use App\Models\Template;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
// use \PDF;
use PDF;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $moduleList = Module::get();
        $data['moduleList']=DB::table('modules')
        ->select('batches.name as filename','modules.name','modules.id','modules.file_name','modules.forwarded','modules.status','modules.month','modules.tranche','intakes.name as department')
        ->join('batches', 'batches.id', '=', 'modules.batch_id')
        ->join('intakes', 'batches.intake_id', '=', 'intakes.id')
        ->where('modules.created_by','=', auth()->user()->id)
        ->get();
     // print_r( $data['moduleList']);
      //exit;
        $modulewiseList = ModuleWiseCourse::get();
        $batchList = Batch::get();
        $templateslist = Template::get();
        $data['subjectList']=DB::table('participants')
       ->where('participants.is_flow','=', 1)
       ->get();
       // $subjectList = Participant::get();
        return view('pages.module.index', compact('modulewiseList','batchList','templateslist'),$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
// print_r($request->details);
// exit;


        $module = new Module();
        $module->name = $request->module_name;
        $module->batch_id = $request->batch;
        $module->month = $request->month;
        $module->created_by=auth()->user()->id;
        $module->save();
        
           
        // $i = 0;
        for ($i = 0; $i < sizeof($request->to); $i++) {
            $subject = new ModuleWiseCourse();
            $subject->module_id = $module->id;
            $subject->subject_id = $request->to[$i];
           // $subject->subject_name = $request->subject[$i];
            $subject->save();
        }


        $request->validate(['file' => 'required|mimes:jpg,png,pdf|max:20480' ]);
        if($request->file()) {
           
            $module->name = $request->module_name;
            $module->batch_id = $request->batch;
            $module->month = $request->month;
            $module->created_by=auth()->user()->id;
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->move(public_path('images'), $fileName);
            $module->file_name = time().'_'.$request->file->getClientOriginalName();    
            $module->file_path = $filePath;
            $module->save();            
        }


     
     
        return back()->with('success','Data has been saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $module = Module::find($id);
        $module->name = $request->module_name;
        // $module->subject_id = $request->subject_id;
        $module->month = $request->module_description;
        $module->save();

        $request->validate(['file' => 'required|mimes:jpg,png,pdf|max:20480' ]);
        if($request->file()) {
            $module = Module::find($id);
           // print_r($module);
           // exit;
            $module->name = $request->module_name;
            $module->month = $request->module_description;
            $fileName = time().'_'.$request->file->getClientOriginalName();
            // $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $filePath = $request->file('file')->move(public_path('images'), $fileName);
            $module->file_name = time().'_'.$request->file->getClientOriginalName();
            // $module->file_path = '/storage/' . $filePath;
            $module->file_path = $filePath;
            $module->save();            
        }



        return back()->with('success','Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $module = Module::find($id);
        if (!is_null($module)) {
            foreach ($module->subjects as $subject) {
                $subject->delete();
            }
            $module->delete();
        }
        return back()->with('success','Data has been deleted.');
    }

    public function approve($id)
    {   
        $data['approvallist']=DB::table('module_wise_courses')
        ->select('module_wise_courses.module_id','module_wise_courses.subject_id','participants.name')
        ->join('participants', 'module_wise_courses.subject_id', '=', 'participants.id')
        ->where('module_wise_courses.module_id','=', $id)
        ->get();
        //print_r($data['approvallist']);
        //exit;
       return view('pages.module.edit', $data);


    }

    public function report($id)
    {   
        $data['module']=DB::table('modules')
        ->select('modules.id','modules.name','modules.month','modules.batch_id','batches.name as filename','participants.name as created_name','modules.file_name','modules.file_path','subjects.name as designame','participants.signature_file_path')
        ->join('module_wise_courses', 'modules.id', '=', 'module_wise_courses.module_id')
        ->join('batches', 'modules.batch_id', '=', 'batches.id')
        ->join('participants', 'modules.created_by', '=', 'participants.id')
        ->join('subjects', 'participants.desig_id', '=', 'subjects.id')
        ->where('modules.id','=', $id)
        ->first();
       //print_r($data['module']);
      // exit;

      $data['remarklsit']=DB::table('module_wise_courses')
        ->select('module_wise_courses.subject_id','participants.name','module_wise_courses.remarks','module_wise_courses.flag','module_wise_courses.updated_at','participants.signature_file_path as approve_sign')
        ->join('participants', 'module_wise_courses.subject_id', '=', 'participants.id')
        ->where('module_wise_courses.module_id','=', $id)
        ->where('module_wise_courses.flag','!=', 0)
        ->get();
       //  print_r($data['remarklsit']);
       // exit;

       $file=$data['module']->file_name;

       $ext = pathinfo($file, PATHINFO_EXTENSION);

    //   print_r($ext);
    //   exit;
        if($ext=='pdf')
        {
            $filename=$data['module']->name;  
            $filepath = public_path('pdf' . '/' . $filename.'.pdf');
            // print_r($filepath);
            //   exit;

            $pdf = PDF::loadView('pages.report.index', $data, [], [
                'mode'                  => 'utf-8',
                'default_font' => 'nikosh'
            ])->save(''.$filepath);



            $path = public_path('images' . '/' . $file);
            $header = [
            'Content-Type' => 'application/pdf',
            
            ];

            // $pdf = new \Jurosh\PDFMerge\PDFMerger;
            // $pdf->addPDF(public_path('/images/1645399666_new_pres.pdf'), 'all');
            // $pdf->addPDF(public_path('/images/1645399869_invoice.pdf'), 'all');

            // $pdf->merge('file', public_path('/merged/created.pdf'), 'P');
            // dd('done');

             return response()->file($path, $header);
        }  
                else{
                
                
                    $filename=$data['module']->name;  
                    $path = public_path('pdf' . '/' . $filename.'.pdf');
                    

                    $pdf = PDF::loadView('pages.report.index', $data, [], [
                        'mode'                  => 'utf-8',
                        'default_font' => 'nikosh'
                    ])->save(''.$path);

                    $header = [
                    'Content-Type' => 'application/pdf',
                    
                    ];
                    
                return response()->file($path, $header);
                }

    //     $pdf->autoScriptToLang = true;
    //     $pdf->SetProtection(['copy', 'print'], '', 'pass');
    
     
    //    // return $pdf->stream('document.pdf');
    //     return $pdf->stream (''.$filename.'.pdf');

        

    }

    public function close()
    {   
        return Redirect()->route('module.index');

    }

    public function createflow()
    {   
        return view('pages.module.flow');

    }

}
