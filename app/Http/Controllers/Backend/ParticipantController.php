<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Models\Intake;
use App\Models\User;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;
class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
       
        $intakes = Intake::get();
        $designations = Subject::get();

        $data['userlist']=DB::table('participants')
        ->select('participants.id','participants.name','participants.email','participants.phone_no','intakes.name as department','subjects.name as designation')
        ->join('intakes', 'intakes.id', '=', 'participants.intake_id')
        ->join('subjects', 'subjects.id', '=', 'participants.desig_id')
        ->where('participants.role','!=', '3')
        ->get();
       // print_r($data['userlist']);
       // exit;
        return view('pages.participant.index', compact('designations','intakes'),$data);
       // return view('pages.participant.index', compact('intakes'));
      //  return view('pages.participant.index');
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
        
   
      
        $participant = new Participant();
        $participant->name = $request->name;
        $participant->email = $request->email;
        // $participant->father_name = $request->fname;
        // $participant->mother_name = $request->mname;
        $participant->phone_no = $request->phone_no;
        $participant->intake_id = $request->intake_id;
        $participant->desig_id = $request->desig_id;
        $participant->password=bcrypt($request->password);
        $participant->role = $request->type_id;
        $participant->is_flow = $request->status;
       
        $participant->save();

        $data=new user();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->role=$request->type_id;
        $data->desig_id = $request->desig_id;
        $data->save();

        $request->validate(['file' => 'required|mimes:jpg,png|max:1024' ]);
        if($request->file()) {
       
          
            $fileName = time().'_'.$request->file->getClientOriginalName();
            // $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $filePath = $request->file('file')->move(public_path('images'), $fileName);
            $participant->signature_file_name = time().'_'.$request->file->getClientOriginalName();
            // $module->file_path = '/storage/' . $filePath;
            $participant->signature_file_path = $filePath;
                  
        }
       
        $participant->save();
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
        $user = Participant::find($id);
        $user->name = $request->user_name;
        $user->email = $request->email;
        $user->phone_no = $request->phone_no;
        $user->save();
        
        $request->validate(['file' => 'required|mimes:jpg,png|max:1024' ]);
        if($request->file()) {
            //$module = Module::find($id);
           // print_r($module);
           // exit;
           $user = Participant::find($id);
           $user->name = $request->user_name;
           $user->email = $request->email;
           $user->phone_no = $request->phone_no;
            $fileName = time().'_'.$request->file->getClientOriginalName();
            // $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $filePath = $request->file('file')->move(public_path('images'), $fileName);
            $user->signature_file_name = time().'_'.$request->file->getClientOriginalName();
            // $module->file_path = '/storage/' . $filePath;
            $user->signature_file_path= $filePath;
            $user->save();        
        }
        $user = Participant::find($id);
        $user->name = $request->user_name;
        $user->email = $request->email;
        $user->phone_no = $request->phone_no;
        $user->save();

        $user_data = User::find($id);
        $user_data->name = $request->user_name;
        $user_data->email = $request->email;
        $user_data->save();


        return back()->with('success','Data has been updated.');
       
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       
        $user = Participant::find($id);
        $user1=User::find($id);
      
            $user->delete();
            $user1->delete();
        
        return back()->with('success','Data has been deleted.');
        //
    }
}
