@extends('layout.master')
@section('content')





    <!-- Add Notice Area Start Here -->
    <div class="col-xl-12 ml-5">


        <div class="shadow p-2 mb-3 bg-white rounded">

            <div class="card">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Summary of Achievements</h3>
                            <p><b>A.</b> Number of trainees Trained: Disaggregated by sex and by Skills Areas and by
                                Level.
                            </p>
                        </div>

                    </div>

                    <form class="new-added-form form-horizontal" action="{{ route('store') }}" method="post"
                        data-parsley-validate>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{ csrf_field() }}

                        <div class="row col-md-12 col-sm-12">
                            <div class="col-md-3 col-sm-12 form-group">
                                <label>Courses offered/Skills Area</label>
                                <input type="text" placeholder="" name="Courses_offered" class="form-control" required>
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Level of skills</label>
                                <input type="text" placeholder="" name="Level_skills" class="form-control">
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Training Target</label>
                                <input type="text" placeholder="" name="Training_target" class="form-control">
                            </div>
                            <div class="col-md-5 col-sm-12 form-group">
                                <label class="text-center">Achievements</label>


                                <div class="row">
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="male" name="male" class="form-control">
                                    </div>

                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="female" name="female" class="form-control">
                                    </div>
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="total" name="total" class="form-control">
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="row col-md-12 col-sm-12">
                            <div class="col-md-3 col-sm-12 form-group">
                                <label>Training target for the 2nd</label>
                                <input type="text" placeholder="" name="Training_target_2nd" class="form-control">
                            </div>

                            <div class="col-md-5 col-sm-12 form-group">
                                <label class="text-center">Achievements</label>

                                <div class="row">
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="male" name="male2" class="form-control">
                                    </div>

                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="female" name="female2" class="form-control">
                                    </div>
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="total" name="total2" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 form-group">
                                <label>Commulative Achievements to date</label>
                                <input type="text" placeholder="" name="cummulative_achived" class="form-control">
                            </div>

                        </div>

                        <div class="col-12 text-center form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>


                    </form>
                </div>
            </div>

            <!--********************************achieved summery********************************************************-->


            <!--********************************achieved summery B********************************************************-->

            <div class="card">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <p><b>B. </b>Number of Trainees Certified after Completing Training: Disaggregated by sex
                                and by Skills Areas and by Level </p>
                        </div>

                    </div>

                    <form class="new-added-form form-horizontal" action="{{ route('storeB') }}" method="post"
                        data-parsley-validate>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{ csrf_field() }}

                        <div class="row col-md-12 col-sm-12">
                            <div class="col-md-3 col-sm-12 form-group">
                                <label>Courses offered/Skills Area</label>
                                <input type="text" placeholder="" name="Courses_offered" class="form-control" required>
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Level of skills</label>
                                <input type="text" placeholder="" name="Level_skills" class="form-control">
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Training Target</label>
                                <input type="text" placeholder="" name="Training_target" class="form-control">
                            </div>
                            <div class="col-md-5 col-sm-12 form-group">
                                <label class="text-center">Achievements</label>


                                <div class="row">
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="male" name="male" class="form-control">
                                    </div>

                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="female" name="female" class="form-control">
                                    </div>
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="total" name="total" class="form-control">
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="row col-md-12 col-sm-12">
                            <div class="col-md-3 col-sm-12 form-group">
                                <label>Training target for the 2nd</label>
                                <input type="text" placeholder="" name="Training_target_2nd" class="form-control">
                            </div>

                            <div class="col-md-5 col-sm-12 form-group">
                                <label class="text-center">Achievements</label>

                                <div class="row">
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="male" name="male2" class="form-control">
                                    </div>

                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="female" name="female2" class="form-control">
                                    </div>
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="total" name="total2" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 form-group">
                                <label>Commulative Achievements to date</label>
                                <input type="text" placeholder="" name="cummulative_achived" class="form-control">
                            </div>

                        </div>

                        <div class="col-12 text-center form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>


                    </form>
                </div>
            </div>



            <!----------------------------B END------------------------------------------------------------------------------>

            <!----------------------------C START------------------------------------------------------------------------------>

            <div class="card">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <p><b>C. </b>Number of Trainees placed in Jobs: Disaggregated by sex and by skills
                                array_intersect_assoc
                                and by Level within 6 months of completion of Training and Certification </p>
                        </div>

                    </div>

                    <form class="new-added-form form-horizontal" action="{{ route('storeC') }}" method="post"
                        data-parsley-validate>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{ csrf_field() }}

                        <div class="row col-md-12 col-sm-12">
                            <div class="col-md-3 col-sm-12 form-group">
                                <label>Courses offered/Skills Area</label>
                                <input type="text" placeholder="" name="Courses_offered" class="form-control" required>
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Level of skills</label>
                                <input type="text" placeholder="" name="Level_skills" class="form-control">
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Job Placement</label>
                                <input type="text" placeholder="" name="job_placement" class="form-control">
                            </div>
                            <div class="col-md-5 col-sm-12 form-group">
                                <label class="text-center">Achievements</label>


                                <div class="row">
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="male" name="male" class="form-control">
                                    </div>

                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="female" name="female" class="form-control">
                                    </div>
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="total" name="total" class="form-control">
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="row col-md-12 col-sm-12">
                            <div class="col-md-3 col-sm-12 form-group">
                                <label>Job Placement Target 2nd</label>
                                <input type="text" placeholder="" name="job_placement_2nd" class="form-control">
                            </div>

                            <div class="col-md-5 col-sm-12 form-group">
                                <label class="text-center">Achievements</label>

                                <div class="row">
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="male" name="male2" class="form-control">
                                    </div>

                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="female" name="female2" class="form-control">
                                    </div>
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="total" name="total2" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 form-group">
                                <label>Commulative Achievements to date</label>
                                <input type="text" placeholder="" name="cummulative_achived" class="form-control">
                            </div>

                        </div>

                        <div class="col-12 text-center form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>


                    </form>
                </div>
            </div>
            <!--------------------------------------------------c end-------------------------------------->

            <!----------------------------D START------------------------------------------------------------------------------>

            <div class="card">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <p><b>D. </b>Number of the Courses Offered for 1st Quater: Disaggregated by
                                New Entrants and Existing Workers </p>
                        </div>

                    </div>

                    <form class="new-added-form form-horizontal" action="{{ route('storeD') }}" method="post"
                        data-parsley-validate>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{ csrf_field() }}

                        <div class="row col-md-12 col-sm-12">
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Course Offered</label>
                                <input type="text" placeholder="" name="Courses_offered" class="form-control" required>
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Training Type</label>
                                <input type="text" placeholder="" name="training_type" class="form-control">
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Duration</label>
                                <input type="text" placeholder="" name="duration" class="form-control">
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Training Target</label>
                                <input type="text" placeholder="" name="training_target" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-12 form-group">
                                <label class="text-center">Number of Trainess Enrolled</label>


                                <div class="row">
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="male" name="male" class="form-control">
                                    </div>

                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="female" name="female" class="form-control">
                                    </div>
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="total" name="total" class="form-control">
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="col-12 text-center form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>


                    </form>
                </div>
            </div>
            <!--------------------------------------------------D end-------------------------------------->


            <!----------------------------E START------------------------------------------------------------------------------>

            <div class="card">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <p><b>E. </b>Number of Trainers involved in Training for the 1st Quater:
                                Disaggregated by sex</p>
                        </div>

                    </div>

                    <form class="new-added-form form-horizontal" action="{{ route('storeE') }}" method="post"
                        data-parsley-validate>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{ csrf_field() }}

                        <div class="row col-md-12 col-sm-12">
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Course Offered</label>
                                <input type="text" placeholder="" name="Courses_offered" class="form-control" required>
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Training Type</label>
                                <input type="text" placeholder="" name="training_type" class="form-control">
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Duration</label>
                                <input type="text" placeholder="" name="duration" class="form-control">
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Training Target</label>
                                <input type="text" placeholder="" name="training_target" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-12 form-group">
                                <label class="text-center">Number of Trainers involved</label>


                                <div class="row">
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="male" name="male" class="form-control">
                                    </div>

                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="female" name="female" class="form-control">
                                    </div>
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="total" name="total" class="form-control">
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="col-12 text-center form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>


                    </form>
                </div>
            </div>
            <!--------------------------------------------------E end-------------------------------------->



            <!----------------------------F START------------------------------------------------------------------------------>

            <div class="card">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <p><b>F. </b>Number of Trainers Trained: Disaggregated by sex</p>
                        </div>

                    </div>

                    <form class="new-added-form form-horizontal" action="{{ route('storeF') }}" method="post"
                        data-parsley-validate>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{ csrf_field() }}

                        <div class="row col-md-12 col-sm-12">
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Skills Areas</label>
                                <input type="text" placeholder="" name="skills_areas" class="form-control" required>
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Training Title</label>
                                <input type="text" placeholder="" name="training_title" class="form-control">
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Duration</label>
                                <input type="text" placeholder="" name="duration" class="form-control">
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Participants</label>
                                <input type="text" placeholder="" name="participants" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-12 form-group">
                                <label class="text-center">Total Trainers Trained</label>


                                <div class="row">
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="male" name="male" class="form-control">
                                    </div>

                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="female" name="female" class="form-control">
                                    </div>
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="total" name="total" class="form-control">
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="col-12 text-center form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>


                    </form>
                </div>
            </div>
            <!--------------------------------------------------F end-------------------------------------->


            <!----------------------------G START------------------------------------------------------------------------------>

            <div class="card">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <p><b>G. </b>Number of Assessors,Managing and others Trained: Disaggregated by sex</p>
                        </div>

                    </div>

                    <form class="new-added-form form-horizontal" action="{{ route('storeG') }}" method="post"
                        data-parsley-validate>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{ csrf_field() }}

                        <div class="row col-md-12 col-sm-12">
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Job Title</label>
                                <input type="text" placeholder="" name="job_title" class="form-control" required>
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Training Title</label>
                                <input type="text" placeholder="" name="training_title" class="form-control">
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Duration</label>
                                <input type="text" placeholder="" name="duration" class="form-control">
                            </div>
                            <div class="col-md-2 col-sm-12 form-group">
                                <label>Participants</label>
                                <input type="text" placeholder="" name="participants" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-12 form-group">
                                <label class="text-center">Total Trainers Trained</label>


                                <div class="row">
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="male" name="male" class="form-control">
                                    </div>

                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="female" name="female" class="form-control">
                                    </div>
                                    <div class="col-md-4  col-sm-12 form-group">
                                        <input type="text" placeholder="total" name="total" class="form-control">
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="col-12 text-center form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>


                    </form>
                </div>
            </div>
            <!--------------------------------------------------G end-------------------------------------->


        </div>

    </div>

@endsection
