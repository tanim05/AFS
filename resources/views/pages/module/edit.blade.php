@extends('layout.master')
@section('content')
    <!-- Breadcubs Area Start Here -->
    
    <div class="col-lg-12">


    <form action="{{ route('module.close') }}" method="POST">
     @csrf
     <div class="form-group">
        <table id="example" class="table table-bordered table-hover" cellspacing="0" style="font-size:12px">

          <thead>
                <tr>
                    <th>Approval Flow</th>                  
                </tr>
        </thead>
            <tbody>
                @foreach ($approvallist as $module)
                    <tr>
                         <td>
                        <h6> {{ $loop->index + 1 }} . {{ $module->name }}</h6>                     
                        </td>   
                    </tr>
                @endforeach

            </tbody>
        <table> 
         <div class="modal-footer">
         <button type="submit" class="footer-btn bg-linkedin"> close</button>
        </div>
    </div>
 </form>
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
