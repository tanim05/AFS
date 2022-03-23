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
            <a href="{{ route('subject.index') }}" title="Course">Designation</a>
        </p>


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List of Deignation
                    <a href=# class="btn btn-primary" data-toggle="modal" data-target="#standard-modal">
                        <i class="fa fa-plus-circle fw-fa"></i> New
                    </a>
                </h1>
                {{-- <h1 class="page-header">List of Deignation</h1> --}}
                {{-- <button type="button" class="modal-trigger" data-toggle="modal" data-target="#standard-modal">
                    new
                </button> --}}
                <!-- Modal -->
                <div class="modal fade" id="standard-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add New Deignation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('subject.store') }}" method="POST">
                                @csrf
                                <div class="form-groupt">
                                    {{-- <div class="col-md-6">
                                        <label for="name">Module</label>
                                        <input type="text" id="subject_description" class="form-control mb-3"
                                            name="subject_description">
                                    </div> --}}
                                    <div class="form-group">
                                        <!-- <div class="col-md-6">
                                            <label for="name">Course Code</label>
                                            <input type="text" id="subject_code" class="form-control mb-3"
                                                placeholder="BC 501" name="subject_code">
                                        </div> -->
                                        <div class="col-md-6">
                                            <label for="name">Designation Name</label>
                                            <input type="text" id="name" class="form-control mb-3"
                                                placeholder="Designation Name" name="subject_name">
                                        </div>
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
                    {{-- <th>Subject Id</th> --}}
                    <th>ID</th>
                    <!-- <th>Course Code</th> -->
                    <th> Designation</th>

                    <!-- {{-- <th>Module</th> --}} -->
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        {{-- <td>{{ $subject->description }}</td> --}}
                        <!-- <td>{{ $subject->code }}</td> -->
                        <td>{{ $subject->name }}</td>
                        <td> <a title="Edit" href="" class="btn btn-primary btn-xs" data-toggle="modal"
                                data-target="#edit-modal{{ $subject->id }}">Edit</a>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="edit-modal{{ $subject->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit subject Information</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('subject.update', $subject->id) }}" method="POST">
                                            @csrf
                                            {{-- <div class="col-md-6">
                                                <label for="name">Module</label>
                                                <input type="text" id="subject_description" class="form-control"
                                                    placeholder="Description" name="subject_description"
                                                    value="{{ $subject->description }}">
                                            </div> --}}
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label for="name">Subject Code</label>
                                                    <input type="text" id="subject_code" class="form-control"
                                                        placeholder="Description" name="subject_code"
                                                        value="{{ $subject->code }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label for="name">Subject Name</label>
                                                    <input type="text" id="name" class="form-control" placeholder="Name"
                                                        name="subject_name" value="{{ $subject->name }}">
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
                                data-target="#delete-modal{{ $subject->id }}">Delete</a>

                            <!-- delete Modal -->
                            <div class="modal fade" id="delete-modal{{ $subject->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Are You Sure</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('subject.delete', $subject->id) }}" method="POST">
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
