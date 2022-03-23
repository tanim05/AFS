<?php

namespace App\Http\Controllers;
use App\Models\Models\Batch;
use App\Models\Module;
use App\Models\ModuleWiseCourse;
use App\Models\Subject;
use App\Models\participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OutboxController extends Controller
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
        ->select('modules.id','modules.name','modules.forwarded','modules.month','modules.file_name','modules.batch_id','batches.name as filename','module_wise_courses.remarks','modules.status','intakes.name as department')
        ->join('module_wise_courses', 'modules.id', '=', 'module_wise_courses.module_id')
        ->join('batches', 'modules.batch_id', '=', 'batches.id')
        ->join('intakes', 'batches.intake_id', '=', 'intakes.id')
        ->where('module_wise_courses.flag','=', 1)
        ->where('module_wise_courses.subject_id','=', auth()->user()->id)
        ->get();
      

 //print_r($data['moduleList']);
 //exit;
 return view('pages.outbox.index', $data);
  
    }

    public function ViewNote($id)
    {   
        $data['module']=DB::table('modules')
        ->select('modules.id','modules.name','modules.month','modules.batch_id','batches.name as filename')
        ->join('module_wise_courses', 'modules.id', '=', 'module_wise_courses.module_id')
        ->join('batches', 'modules.batch_id', '=', 'batches.id')
        //->join('participants', 'module_wise_courses.subject_id', '=', 'participants.id')
        ->where('modules.id','=', $id)
        ->first();
       //print_r($data['module']);
      // exit;

      $data['remarklsit']=DB::table('module_wise_courses')
        ->select('module_wise_courses.subject_id','participants.name','module_wise_courses.remarks','module_wise_courses.flag')
        ->join('participants', 'module_wise_courses.subject_id', '=', 'participants.id')
        ->where('module_wise_courses.module_id','=', $id)
        ->get();
        // print_r($data1['remarklsit']);
        // exit;
        return view('pages.outbox.edit', $data);



    }

    public function close()
    {   
        return Redirect()->route('outbox.index');

    }
}


