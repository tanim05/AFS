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
    <div class="content-wrapper">
        <!-- <section class="content-header">
            <h1>
                User Creation
            </h1>
        </section> -->

        <section class="content">
            
             
                     <div class="row">
                         <div class="col-lg-12">
                             <h1 class="page-header">List of User
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
                                <h5 class="modal-title">Add New User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                 </div>
                           
                             <form method="POST" enctype="multipart/form-data" action="{{ route('participant.store') }}">
                             @csrf
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                    <label>Name*</label>
                                    <input class="form-control" type="text" placeholder="Employee Name" name="name" required>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input class="form-control" type="text" placeholder="Employee email" name="email" required >
                                    </div>
                                </div>
                             </div>

                      

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number*</label>
                                        <input class="form-control" type="number" placeholder="Phone Number" name="phone_no"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                     <label class="text-dark-medium">Signature</label>
                                    <input type="file" name='file' id='chooseFile' class="form-control-file">
                                </div>

                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Photo</label>
                                        <input class="form-control" type="file" name="photo">
                                    </div>
                                </div> -->
                            
                            </div>

                            <div class="row">
                                <div class="col-md-4 form-group">    
                                    <label for="pssword">Password:*</label><br>
                                    <input type="password" id="password" name="password" required>

                                  
                                </div>

                                <div class="col-md-2 form-group">    

                                  <label for="pssword">Approval Flow*:</label><br>
                                    <input type="radio"  id="option1" name="status" value="1" checked>YES</label>

                                    <input type="radio" id="option2" name="status" value="0" >NO</label>
                                </div>

                                <div class="col-md-6  form-group">
                                <label>User Type *</label>
                                <select name="type_id" id="type_id" class="form-control" required>
                                                        <option value="">Please Select Type *</option>
                                                        <option value="1">Normal User</option>                              
                                                        <option value="3">Admin</option>     
                                                        <option value="4">Director</option>                          
                                                    </select>
                                </div>

                            </div> 

                            <div class="row">
                            
                                            <div class="col-md-6 form-group">
                                                        <label for="intake_id">Department*</label>
                                                        <select name="intake_id" id="intake_id" class="form-control" required>
                                                            <option value="">Select Department</option>
                                                            @foreach ($intakes as $intake)
                                                                <option value="{{ $intake->id }}">
                                                                    {{ $intake->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                             </div>

                                             <div class="col-md-6 form-group">
                                                        <label for="desig_id">Deignation*</label>
                                                        <select name="desig_id" id="desig_id" class="form-control" required>
                                                            <option value="">Select Deignation</option>
                                                            @foreach ($designations as $desig)
                                                                <option value="{{ $desig->id }}">
                                                                    {{ $desig->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                             </div>

                                            <!-- <div class="col-md-6  form-group">
                                            <label>Deignation </label>
                                            <select name="desig_id" id="desig_id" class="form-control" >
                                                <option value="">Please Select Deignation </option>
                                                <option value="1">Programmer</option>
                                                <option value="2">Office</option>
                                                <option value="3">Sr. Office</option>
                                                <option value="4">HOD of IT</option>
                                                <option value="5">HOD of Sales</option>
                                                <option value="6">Director</option>
                                                
                                            </select>
                                            </div> -->

                            </div>


                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-12 form-group mg-t-8">
                                                        <button type="submit"
                                                            class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                                    </div>
                                                </div>
                            </div>
                        
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
             </div>

         </div>
        </section>

        <table id="example" class="table table-bordered table-hover" cellspacing="0" style="font-size:12px">

            <thead>
                <tr>
                    <th>#</th> 
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Deisgnation</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($userlist as $user)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td> 
                         <td>{{ $user->name }}</td> 
                         <td>{{ $user->email }}</td> 
                         <td>{{ $user->phone_no }}</td>    
                         <td>{{ $user->department }}</td> 
                         <td>{{ $user->designation }}</td>               
                       
                        <td> <a title="Edit" href="" class="btn btn-primary btn-xs" data-toggle="modal"
                                data-target="#edit-modal{{ $user->id }}">Edit</a>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="edit-modal{{ $user->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit User Information</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('participant.update', $user->id) }}" method="POST" enctype="multipart/form-data" >
                                            @csrf
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name">User Name</label>
                                                    <input type="text" id="name" class="form-control" placeholder="Name"
                                                        name="user_name" value="{{ $user->name }}">
                                                </div>
                                                 <div class="col-md-12">
                                                    <label for="name">Email</label>
                                                    <input type="text" id="user_email" class="form-control"
                                                        placeholder="email" name="email" value="{{ $user->email }}">
                                                </div> 
                                                
                                                <div class="col-md-12">
                                                    <label for="name">Phone No.</label>
                                                    <input type="text" id="batch_year" class="form-control"
                                                        placeholder="phone" name="phone_no" value="{{ $user->phone_no }}">
                                                </div>
                                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                                <label class="text-dark-medium">Signature</label>
                                                <input type="file" name='file' id='chooseFile' class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="footer-btn bg-linkedin"> Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            
                            <a title="Delete" href="" class="btn btn-danger btn-xs" data-toggle="modal"
                                data-target="#delete-modal{{ $user->id }}">Delete</a>

                            <!-- delete Modal -->
                            <div class="modal fade" id="delete-modal{{ $user->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Are You Sure</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('participant.delete', $user->id) }}" method="POST">
                                            @csrf
                                            <div class="modal-footer">
                                                <button type="submit" class="footer-btn btn btn-danger"> Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                          

                        
                    </tr>
                @endforeach

            </tbody>

            </table>
</div>
@endsection
