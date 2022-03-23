@extends('layout.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    {{-- <div class="breadcrumbs-area">
        <h3>Admin Dashboard</h3>
        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>Admin</li>
        </ul>
    </div> --}}
    <div class="col-lg-12">
        <p>
            <a href="{{ route('home') }}" title="Home">Home</a> /
            <a href="{{ route('module.index') }}" title="Course">Note Creation</a>
        </p>


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List of Notes
                    <a href=# class="btn btn-primary" data-toggle="modal" data-target="#standard-modal">
                        <i class="fa fa-plus-circle fw-fa"></i> New
                    </a>
                </h1>
                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <strong>{{ $message }}</strong>
                                </div>
                @endif
                <!-- Modal -->
                <div class="modal fade" id="standard-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add New Note</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('module.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                

                                <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name">File Name</label>
                                        {{-- <input type="text" id="name" class="form-control mb-3" placeholder="Name"
                                            name="module_name"> --}}
                                        <select name="batch" id="" class="form-control">
                                            <option value="">Select One</option>
                                            @foreach ($batchList as $batch)
                                                <option value="{{ $batch->id }}">{{ $batch->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="name">Note Heading</label>
                                        <input type="text" id="name" class="form-control mb-3" placeholder="Name"
                                            name="module_name">
                                    </div>
                                </div>

                                    <div class="row">
                                      <div class="col-md-6">
                                        <label for="fabricBox">Approval Name selection</label>
                                        <select name="from[]" id="fabricBox" class="form-control" size="8" multiple="multiple" style="width:70%">
                                        <option value="">Select One</option>
                                            @foreach ($subjectList as $subject)
                                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                            @endforeach
                                        </select>
                                       
                                     
                                       </div>
                                       <div class="col-md-2">
                                           <br><br><br>
                                        <button id="move" class="btn btn-success">-----></button>
                                        
                                       </div>

                                       <div class="col-md-4">
                                        <label for="fabricBox_to">To(select->ctl+A)</label>
                                        <select name="to[]" id="fabricBox_to" class="form-control" size="8" multiple="multiple" style="width:70%" required>
                                        </select>
                                        <!-- <button id="moveBack">Move Selected back</button> -->
                                       </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="month">Note Details</label>
                                        <div class="form-group">
                                            <textarea class="ckeditor form-control" id="month" name="month">                                          
                                            </textarea>
                                        </div> 
 
                                    </div> 
                                    <div class="col-lg-6 col-12 form-group mg-t-30">
                                     <label class="text-dark-medium">Attachment(Not Greater than 20MB)</label>
                                    <input type="file" name='file' id='chooseFile' class="form-control-file">
                                    </div>
                            </div>
                                <div class="modal-footer">
                                    <button type="submit" class="footer-btn bg-linkedin"> Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <table id="example" class="table table-bordered table-hover" cellspacing="0" style="font-size:12px">

            <thead>
                <tr>
                     <th>#</th> 
                    <th>Department</th>
                    <th>Note Heading</th>
                    <th>File Name</th>
                    <th>Approval Flow</th>
                    <th>Attachment</th>
                    <th>File Status</th>
                    <th width="20%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($moduleList as $module)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td> 
                        <td>{{ $module->department }}</td>
                         <td>{{ $module->name }}</td> 
                          <td>{{ $module->filename }}</td>           
                        <td>
                        
                        <a href="{{ route('module.approve', $module->id) }}"
                                                        class="btn btn-info">Approval Flow</a> 
                        </td> 
                        @if($module->file_name!='')
                        <td align='center'> <a href="<?php echo asset("/images/".$module->file_name) ?>" download> <i class='fa fa-download'> </i> </a> </td>
                        @else
                         <td></td>
                        @endif  
                        
                        @if(($module->forwarded=='Y') && ($module->status==''))
                            <td> Forwarded </td>
                        @else
                            <td>{{ $module->status }} </td>
                        @endif
                         
                        
                        @if(($module->forwarded!='Y')&& ($module->status!='Rejected'))
                            <td>
                         
                              <a href="{{ route('outbox.edit', $module->id) }}"
                                                        class="btn btn-info">View</a>
                             <a href="{{ route('note.report', $module->id) }}" target='_blank'
                                                        class="btn btn-info">Report</a>
                                           
                              <a title="Edit" href="" class="btn btn-primary btn-xs" data-toggle="modal"
                                data-target="#edit-modal{{ $module->id }}">Edit</a>
                                    <!-- Edit Modal -->
                            <div class="modal fade" id="edit-modal{{ $module->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Note Information</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('module.update', $module->id) }}" method="POST" enctype="multipart/form-data"  >
                                            @csrf
                                            <div class="form-group">
                                               

                                                <div class="row">
                                                <div class="col-md-6">
                                                    <label for="name">File Name</label>
                                                    <input type="text" id="name" class="form-control mb-3"
                                                        placeholder="Name" name="module_name"
                                                        value="{{ $module->filename }}" readonly>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="name">Note Heading</label>
                                                    <input type="text" id="name" class="form-control mb-3"
                                                        placeholder="Name" name="module_name"
                                                        value="{{ $module->name }}" >
                                                </div>
                                                </div> 




                                              
                                                <div class="col-md-12">
                                                    <label for="month">Note Details</label>
                                                    <!-- <input type="text" id="month" class="form-control mb-3"
                                                        placeholder="Description" name="month"
                                                        value="{{ $module->month }}"> -->


                                                <textarea class="ckeditor form-control" id="module_description" name="module_description" >  {{ $module->month }}                                        
                                                </textarea>

                                                </div>
                                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                                <label class="text-dark-medium">Attachment(Not Greater than 20MB)</label>
                                                <input type="file" name='file' id='chooseFile' class="form-control-file">
                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="footer-btn bg-linkedin"> Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <a title="Delete" href="" class="btn btn-danger btn-xs" data-toggle="modal"
                                data-target="#delete-modal{{ $module->id }}">Delete</a>

                            <!-- delete Modal -->
                            <div class="modal fade" id="delete-modal{{ $module->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Are You Sure</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('module.delete', $module->id) }}" method="POST">
                                            @csrf
                                            <div class="modal-footer">
                                                <button type="submit" class="footer-btn btn btn-danger"> Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                        @else
                            <td> <a href="{{ route('outbox.edit', $module->id) }}"
                                                        class="btn btn-info">View</a>

                           <a href="{{ route('note.report', $module->id) }}"
                                                        class="btn btn-info" target='_blank'>Report</a></td>
                        @endif    

                        
                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>
@endsection
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.1/css/select2.min.css" />
@endsection
@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
	$("#move").on("click", function(){
  MoveToandFrom("#fabricBox", "#fabricBox_to");
});

//You can even move the options back if you need to
$("#moveBack").on("click", function(){
  MoveToandFrom("#fabricBox_to", "#fabricBox");
});

//reusable function that moves selected indexes back and forth
function MoveToandFrom(fromSelectElement, toSelectElement)
{
  //get list of selected options as delimited string
  var selected = $(fromSelectElement + " option:selected").map(function(){ return this.value }).get().join(", ");
  
  //if no option is selected in either select box
  if( $.contains(selected, "") ){
    alert("You have to select an option!");
    return false;
  }
  
  //split the selected options into an array 
  var stringArray = selected.split(',');
   
  //remove selected items from selected select box to second select box
  $(fromSelectElement + " option:selected").remove();
   
  //loop through array and append the selected items to Fabric_to select box
  $.each( stringArray, function( key, value ) {
      $(toSelectElement).append("<option>" + value + "</option>");
  });
}
</script>



<script type="text/javascript">
$('#parent_id').on('change',function(){
$(".some").hide();
var some = $(this).find('option:selected').val();
$("#some_" + some).show();}); </script>
@endsection
