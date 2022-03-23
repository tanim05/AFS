@extends('layout.master')
@section('content')

    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Notice Board</h3>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>Notice</li>
            </ul>
        </div>
        <!-- Breadcubs Area End Here -->
        <div class="row">
            <!-- Add Notice Area Start Here -->
            <div class="col-4-xxxl col-12">
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Create A Notice</h3>
                            </div>
                            {{-- <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div> --}}
                        </div>
                        <form action="{{ route('notice.store') }}" method="POST" class="new-added-form">
                            @csrf
                            <div class="row">
                                <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" placeholder="" class="form-control">
                                </div>
                                <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                    <label>Details</label>
                                    <textarea style="height: 100px;" class="form-control" name="details"
                                        rows="3"></textarea>
                                </div>
                                {{-- <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                    <label>Photo </label>
                                    <input type="file" name="photo" class="form-control">
                                    <i class="fas fa-file"></i>
                                </div> --}}
                                <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                    <label>Posted By </label>
                                    <input type="text" placeholder="" name="posted_by" class="form-control">
                                    <i class="fas fa-user"></i>
                                </div>



                                <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                    <label>Date</label>
                                    <input type="text" placeholder="" name="date" class="form-control air-datepicker">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit"
                                        class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Add Notice Area End Here -->
            <!-- All Notice Area Start Here -->
            <div class="col-8-xxxl col-12">
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Notice Board</h3>
                            </div>
                            {{-- <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div> --}}
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-lg-5 col-12 form-group">
                                    <input type="text" placeholder="Search by Date ..." class="form-control">
                                </div>
                                <div class="col-lg-5 col-12 form-group">
                                    <input type="text" placeholder="Search by Title ..." class="form-control">
                                </div>
                                <div class="col-lg-2 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                </div>
                            </div>
                        </form>
                        <div class="notice-board-wrap">

                            {{-- <div class="notice-list">
                                <div class="post-date bg-yellow">
                                    04/08/2021 </div>
                                <h2 class="notice-title"><a href="#">
                                        rr </a></h2>
                                <p class="notice-title"><a href="#">
                                        fvf </a></p>
                                <div class="entry-meta">
                                    <img src="notice/2021-Honda-CBR-150R-Indonesia-740x493.jpg">
                                </div>
                                <div class="entry-meta">
                                    <p>posted by: ff </p>
                                </div>
                            </div>
                             <div class="notice-list">
                                <div class="post-date bg-yellow">
                                    04/08/2021 </div>
                                <h2 class="notice-title"><a href="#">
                                        asdf </a></h2>
                                <p class="notice-title"><a href="#">
                                        asdf </a></p>
                                <div class="entry-meta">
                                    <img src="notice/">
                                </div>
                                <div class="entry-meta">
                                    <p>posted by: asdf </p>
                                </div>
                            </div> --}}

                            @foreach ($noticeList as $notice)
                                <div class="notice-list">
                                    <div class="post-date bg-yellow">{{ $notice->date }}</div>
                                    <h6 class="notice-title">
                                        <a href="#">
                                            {{ $notice->title }}<br>
                                            {{ $notice->details }}
                                        </a>
                                    </h6>
                                    <div class="entry-meta"> {{ $notice->posted_by }} </div>
                                    <div class="float-right">
                                        <a href="{{ route('notice.delete', $notice->id) }}">
                                            <div class="badge badge-info">
                                                <span>Delete</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    
</script>
@endsection
