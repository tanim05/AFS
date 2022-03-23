@extends('layout.master')
@section('content')
    <div class="col-lg-12">
        <p>
            <a href="{{ route('home') }}" title="Home">Home</a> /
            <a href="{{ route('mark.index') }}" title="Mark">Mark</a>
        </p>


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List of mark
                    <a href=# class="btn btn-primary" data-toggle="modal" data-target="#standard-modal">
                        <i class="fa fa-plus-circle fw-fa"></i> New
                    </a>
                </h1>
                {{-- <h1 class="page-header">List of marks</h1> --}}
                {{-- <button type="button" class="modal-trigger" data-toggle="modal" data-target="#standard-modal">
                    new
                </button> --}}
                <!-- Modal -->
                <div class="modal fade" id="standard-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add New mark</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('mark.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class=" form-group d-flex m-3 mr-5 ml-5">
                                        <!-- <h2 class="text-center"> -->
                                        <select name="intake_id" id="" class="form-control dropdown mr-5 custom-select">
                                            <option value="">Select Intake</option>
                                            @foreach ($intakes as $intake)
                                                <option value="{{ $intake->id }}">{{ $intake->name }}</option>
                                            @endforeach
                                        </select>
                                        <select name="batch_id" id="" class="form-control">
                                            <option value="">Select One</option>
                                            @foreach ($batches as $batch)
                                                <option value="{{ $batch->id }}">{{ $batch->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class=" form-group d-flex m-3 mr-5 ml-5">
                                        <select name="module_id" id="" class="form-control dropdown mr-5 custom-select">
                                            <option value="">Select Module</option>
                                            @foreach ($modules as $module)
                                                <option value="{{ $module->id }}">{{ $module->name }}</option>
                                            @endforeach
                                        </select>
                                        <select name="subject_id" id="" class="form-control">
                                            <option value="">Select Subject</option>
                                            @foreach ($subjects as $subject)
                                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="participant_id">Student ID</label>
                                        <input type="text" id="participant_id" class="form-control mb-3"
                                            placeholder="210001" name="participant_id">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="name">Mark</label>
                                        <input type="number" id="marks" class="form-control mb-3" placeholder="88"
                                            name="marks">
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
        <div class=" form-group d-flex m-3 mr-5 ml-5">
            <!-- <h2 class="text-center"> -->
            <select name="intake_id" id="" class="form-control dropdown mr-5 custom-select">
                <option value="">Select Intake</option>
                @foreach ($intakes as $intake)
                    <option value="{{ $intake->id }}">{{ $intake->name }}</option>
                @endforeach
            </select>
            <select name="batch_id" id="" class="form-control dropdown mr-5 custom-select">
                <option value="">Select Batch</option>
                @foreach ($batches as $batch)
                    <option value="{{ $batch->id }}">{{ $batch->name }}</option>
                @endforeach
            </select>
            <select name="module_id" id="" class="form-control dropdown mr-5 custom-select">
                <option value="">Select Module</option>
                @foreach ($modules as $module)
                    <option value="{{ $module->id }}">{{ $module->name }}</option>
                @endforeach
            </select>
            <select name="subject_id" id="" class="form-control">
                <option value="">Select Subject</option>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
            </select>
            <!-- </h2> -->
        </div>
        <table id="example" class="table table-bordered table-hover" cellspacing="0" style="font-size:12px">

            <thead>
                <tr>
                    {{-- <th>mark Id</th> --}}
                    {{-- <th>Intake-Batch-Module</th> --}}
                    <th>Course Name</th>
                    <th>Student ID</th>
                    <th>Mark</th>

                    {{-- <th>Module</th> --}}
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($marks as $mark)
                    <tr>
                        {{-- <td>{{ $loop->index + 1 }}</td> --}}
                        <td>{{ $mark->subject->name }}</td>
                        <td>{{ $mark->participant_id }}</td>
                        <td>{{ $mark->marks }}</td>
                        <td> <a title="Edit" href="" class="btn btn-primary btn-xs" data-toggle="modal"
                                data-target="#edit-modal{{ $mark->id }}">Edit</a>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="edit-modal{{ $mark->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit mark Information</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('mark.update', $mark->id) }}" method="POST">
                                            @csrf
                                            <div class=" form-group d-flex m-3 mr-5 ml-5">
                                                <!-- <h2 class="text-center"> -->
                                                <select name="intake_id" id=""
                                                    class="form-control dropdown mr-5 custom-select">
                                                    <option value="">Select Intake</option>
                                                    @foreach ($intakes as $intake)
                                                        <option value="{{ $intake->id }}">{{ $intake->name }}</option>
                                                    @endforeach
                                                </select>
                                                <select name="batch_id" id="" class="form-control ">
                                                    <option value="">Select Batch</option>
                                                    @foreach ($batches as $batch)
                                                        <option value="{{ $batch->id }}">{{ $batch->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class=" form-group d-flex m-3 mr-5 ml-5">
                                                <select name="module_id" id=""
                                                    class="form-control dropdown mr-5 custom-select">
                                                    <option value="">Select Module</option>
                                                    @foreach ($modules as $module)
                                                        <option value="{{ $module->id }}">{{ $module->name }}</option>
                                                    @endforeach
                                                </select>
                                                <select name="subject_id" id="" class="form-control">
                                                    <option value="">Select Subject</option>
                                                    @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}">{{ $subject->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            {{-- <div class="col-md-12">
                                                <label for="name">Course Name</label>
                                                <input type="text" id="mark_description" class="form-control"
                                                    placeholder="Description" name="mark_description"
                                                    value="{{ $mark->description }}">
                                            </div> --}}
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="participant_id">Participant ID</label>
                                                    <input type="text" id="participant_id" class="form-control"
                                                        placeholder="123456" name="participant_id"
                                                        value="{{ $mark->participant_id }}">
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="name">Mark</label>
                                                    <input type="text" id="name" class="form-control" placeholder="Mark"
                                                        name="marks" value="{{ $mark->marks }}">
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
                                data-target="#delete-modal{{ $mark->id }}">Delete</a>

                            <!-- delete Modal -->
                            <div class="modal fade" id="delete-modal{{ $mark->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Are You Sure</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('mark.delete', $mark->id) }}" method="POST">
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
