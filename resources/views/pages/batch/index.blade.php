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
            <a href="{{ route('batch.index') }}" title="Course">File</a>
        </p>


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List of Files
                    <a href=# class="btn btn-primary" data-toggle="modal" data-target="#standard-modal">
                        <i class="fa fa-plus-circle fw-fa"></i> New
                    </a>
                </h1>
                {{-- <h1 class="page-header">List of Files</h1> --}}
                {{-- <button type="button" class="modal-trigger" data-toggle="modal" data-target="#standard-modal">
                    new
                </button> --}}
                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <strong>{{ $message }}</strong>
                                </div>
                @endif
                <!-- Modal -->
                <div class="modal fade" id="standard-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add New File</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('batch.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="name">File Name</label>
                                        <input type="text" id="name" class="form-control mb-3" placeholder="File Name"
                                            name="batch_name">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="name">File No.</label>
                                        <input type="text" id="batch_year" class="form-control mb-3" placeholder="File No."
                                            name="batch_year">
                                    </div>
                                    <div class="col-md-12 p-3">
                                        <label for="name">Status</label>
                                        <select class="form-control" id="batch_description" name="batch_description"
                                            class="form-control" required>
                                            <option value="">Select status </option>
                                            <option value="Active">Active </option>
                                            <option value="InActive">InActive </option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="intake_id">Department</label>
                                        <select name="intake_id" id="intake_id" class="form-control" required>
                                            <option value="">Select Department</option>
                                            @foreach ($intakes as $intake)
                                                <option value="{{ $intake->id }}">
                                                    {{ $intake->name }}
                                                </option>
                                            @endforeach
                                        </select>
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
                    {{-- <th>Batch Id</th> --}}
                    <th>#</th>
                    <th>Department</th>
                    <th>File Name</th>
                    <th>File No.</th>
                    <th>Status</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($batches as $batch)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $batch->intake->name }}</td>
                        <td>{{ $batch->name }}</td>
                        <td>{{ $batch->year }}</td>
                        <td>{{ $batch->description }}</td>

                        <td> <a title="Edit" href="" class="btn btn-primary btn-xs" data-toggle="modal"
                                data-target="#edit-modal{{ $batch->id }}">Edit</a>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="edit-modal{{ $batch->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Batch Information</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('batch.update', $batch->id) }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name">File Name</label>
                                                    <input type="text" id="name" class="form-control" placeholder="Name"
                                                        name="batch_name" value="{{ $batch->name }}">
                                                </div>
                                                {{-- <div class="col-md-6">
                                                    <label for="name">Description</label>
                                                    <input type="text" id="batch_description" class="form-control"
                                                        placeholder="Description" name="batch_description">
                                                </div> --}}
                                                <div class="col-md-12 p-3">
                                                    <label for="name">Status </label>
                                                    <select class="form-control" id="batch_description"
                                                        name="batch_description" class="form-control" required>
                                                        <option value="{{ $batch->description }}">Select status </option>
                                                        <option value="Active">Active </option>
                                                        <option value="Inactive">Inactive </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="name">File No.</label>
                                                    <input type="text" id="batch_year" class="form-control"
                                                        placeholder="Year" name="batch_year" value="{{ $batch->year }}">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="intake_id">Departemnt</label>
                                                    <select name="intake_id" id="intake_id" class="form-control" required>
                                                        <option value="">Select Intake</option>
                                                        @foreach ($intakes as $intake)
                                                            <option value="{{ $intake->id }}"
                                                                {{ $intake->id == $batch->intake_id ? 'selected' : null }}>
                                                                {{ $intake->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
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
                                data-target="#delete-modal{{ $batch->id }}">Delete</a>

                            <!-- delete Modal -->
                            <div class="modal fade" id="delete-modal{{ $batch->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Are You Sure</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('batch.delete', $batch->id) }}" method="POST">
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
