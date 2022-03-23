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
            <a href="{{ route('template.index') }}" title="Course">Template Creation</a>
        </p>


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List of Templates
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
                                <h5 class="modal-title">Add New Template</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('template.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf                               
                               <div class="form-group">
                                    <div class="row">                                  
                                        <div class="col-md-6">
                                            <label for="name">Template Name</label>
                                            <input type="text" id="name" class="form-control mb-3" placeholder="Name"
                                                name="module_name">
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-12">Content</label>
                                        <div class="form-group">
                                            <textarea class="ckeditor form-control" id="month" name="month"  style="resize: vertical;">                                          
                                            </textarea>
                                        </div>

                                        <!-- <input type="text" id="month" class="form-control mb-3" placeholder="Description"
                                            name="month"> -->
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
                    <th>Template Name</th>                 
                    <th width="25%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($templateslist as $template)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td> 
                         <td>{{ $template->template_name }}</td> 
         
                            <td>
                        
                              <a href="{{ route('template.sendmail') }}" target='_blank' class="btn btn-info">send</a>
                             <a href="{{ route('template.sendmail', $template->id) }}" target='_blank'
                                                        class="btn btn-info">Report</a>
                                           
                              <a title="Edit" href="" class="btn btn-primary btn-xs" data-toggle="modal"
                                data-target="#edit-modal{{ $template->id }}">Edit</a>
                                    <!-- Edit Modal -->
                            <div class="modal fade" id="edit-modal{{ $template->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Template Information</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('template.update', $template->id) }}" method="POST" enctype="multipart/form-data"  >
                                            @csrf
                                            <div class="form-group">
                                               

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="name">Template Name</label>
                                                        <input type="text" id="name" class="form-control mb-3"
                                                            placeholder="Name" name="module_name"
                                                            value="{{ $template->template_name }}" >
                                                    </div>

                                                </div> 
                                          
                                              
                                                <div class="col-md-12">
                                                    <label for="month">Content</label>
                                                   

                                                <textarea class="ckeditor form-control" id="module_description" name="module_description" >  {{ $template->template_details }}                                        
                                                </textarea>

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
                                data-target="#delete-modal{{ $template->id }}">Delete</a>

                            <!-- delete Modal -->
                            <div class="modal fade" id="delete-modal{{ $template->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Are You Sure</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('template.delete', $template->id) }}" method="POST">
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
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $('.select2').select2();
    </script>
@endsection
