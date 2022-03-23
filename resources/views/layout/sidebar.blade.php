<!-- Sidebar Area Start Here -->
<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
    <div class="mobile-sidebar-header d-md-none">
        <div class="header-logo">
            <a href="{{ route('home') }}">
                <img src="{{ URL::asset('/image/seip-logo.png') }}" alt="seip logo" height="35" width="190">
                <img src="{{ URL::asset('/image/iba.png') }}" alt="du iba logo" height="35" width="90">
            </a>
        </div>
    </div>
    @php
    if (Auth::check()) {
      @endphp
      @if (auth()->user()->role==3)
    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link"><i
                        class="flaticon-dashboard"></i><span>Dashboard</span></a>
              
            </li>
            <li class="nav-item">
                <a href="{{ route('intake.index') }}" class="nav-link"><i
                        class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Department</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('subject.index') }}" class="nav-link"><i
                        class="flaticon-open-book"></i><span>Designation</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('batch.index') }}" class="nav-link"><i
                        class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>File Creation</span></a>
            </li>

            <li class="nav-item">
                <a href="{{ route('module.index') }}" class="nav-link"><i
                        class="flaticon-open-book"></i><span>Note Creation</span></a>
            </li>
                             
            <li class="nav-item">
                <a href="{{ route('participant.index') }}" class="nav-link"><i
                        class="flaticon-classmates"></i><span>User Creation</span></a>
              
            </li>

            <li class="nav-item">
                <a href="{{ route('notice.index') }}" class="nav-link"><i
                        class="flaticon-chat"></i><span>Notice</span></a>
            </li>
            <br><br><br><br><br><br>
         
        </ul>
    </div>

    @elseif(auth()->user()->role==4)

    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link"><i
                        class="flaticon-dashboard"></i><span>Dashboard</span></a>
              
            </li>
            <li class="nav-item">
                <a href="{{ route('module.index') }}" class="nav-link"><i
                        class="flaticon-open-book"></i><span>Note Creation</span></a>
            </li>    
            <li class="nav-item">
            <a href="#" class="nav-link"> <i class="flaticon-open-book"></i><span>Inbox</span> <a>
                        <ul  class="list-group" >

                   
                          <li class="p-2 mb-2  bg-primary"> <a href="{{ route('inboxchairman.index',2) }}" class="nav-link"><i
                            class="flaticon-open-book"></i><span> <font color="#ffffff">SALES </font></span></a></li>
                            <li class="p-2 mb-2  bg-primary" > <a href="{{ route('inboxchairman.index',3) }}" class="nav-link"><i
                            class="flaticon-open-book"></i><span><font color="#ffffff">IT </font></span></a></li>
                           
                            <li class="list-group-item bg-primary" > <a href="{{ route('inboxchairman.index',4) }}" class="nav-link"><i
                            class="flaticon-open-book"></i><span><font color="#ffffff">HR </font></span></a></li>
                            
                        </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('outbox.index') }}" class="nav-link"><i
                        class="flaticon-open-book"></i><span>Outbox</span></a>
            </li>
           
       
            <br><br><br><br><br><br> <br><br><br><br><br><br>
           
                    
         
        </ul>
    </div>


    
  @else
  <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link"><i
                        class="flaticon-dashboard"></i><span>Dashboard</span></a>
              
            </li>
            <li class="nav-item">
                <a href="{{ route('module.index') }}" class="nav-link"><i
                        class="flaticon-open-book"></i><span>Note Creation</span></a>
            </li>     
            <li class="nav-item">
                <a href="{{ route('inbox.index') }}" class="nav-link"><i
                        class="flaticon-open-book"></i><span>Inbox</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('outbox.index') }}" class="nav-link"><i
                        class="flaticon-open-book"></i><span>Outbox</span></a>
            </li>
           
        <li class="nav-item">
                <a href="{{ route('notice.index') }}" class="nav-link"><i
                        class="flaticon-chat"></i><span>Notice</span></a>
            </li>
            
        <li class="nav-item">
                <a href="{{ route('template.index') }}" class="nav-link"><i
                        class="flaticon-open-book"></i><span>Template Creation</span></a>
        </li>     
        <br><br><br><br><br><br> <br><br><br><br><br><br>           
         
        </ul>
    </div>
    @endif
      
      @php
    }
    @endphp

   
</div>
