<!DOCTYPE html>
<html lang="en">
 
@include('partials.head')
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange"><!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"--> 
      <div class="logo">
         <img src="{{asset('assets/img/sidebar-logo.png')}}" alt="">
        
          {{-- {{dd(auth()->user())}} --}}
        </a>
      
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper ">
        <ul class="nav">
          <li class="{{ 'dashboard' == request()->path() ? 'active ' : ' ' }}">
          <a href="/dashboard">
              <i class="now-ui-icons business_chart-bar-32"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
         
          @if(auth()->user()->type_id === 1)
            <li class="{{ 'my-billings' == request()->path() ? 'active ' : ' ' }}">
              <a href={{url('/my-billings')}}>
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p>My Billings</p>
              </a>
            </li>


            @else

       
          <li data-toggle="collapse" data-target="#new1" >
            <a href="#"><i class="now-ui-icons business_badge"></i> Register <span class="arrow"></span></a>
          </li>

          <ul class="sub-menu collapse text-center list-unstyled" id="new1">
            @if(auth()->user()->type_id == 2)
            <li class="{{ 'tenant' == request()->path() ? 'active ' : ' ' }}">
              <a href="/tenant">
                  {{-- <i class="now-ui-icons business_badge"></i> --}}
                  <p>Tenant </p>
                </a>
              </li>

            @else
        

        <li class="{{  'type-store' == request()->path() ? 'active ' : ' ' }}">
          <a href="/type-store">
              {{-- <i class="now-ui-icons users_circle-08"></i> --}}
              <p>Users </p>
            </a>
          </li>
          @endif
          
        
      @if(auth()->user()->type_id == 3)
          <li class="{{ 'tenant' == request()->path() ? 'active ' : ' ' }}">
            <a href="/tenant">
                {{-- <i class="now-ui-icons-sm business_badge "></i> --}}
                <p>Tenant </p>
              </a>
            </li>
            @endif
            <li class="{{ 'room' == request()->path() ? 'active ' : ' ' }}">
              <a href="/room">
                {{-- <i class="now-ui-icons files_box"></i> --}}
                <p>Rooms</p>
              </a>
            </li>
                
          </ul>

          
         
          {{-- ACTIVE BOOKINGS --}}
        <li class="{{ 'booked-rooms' == request()->path() ? 'active ' : ' ' }}">
          <a href={{url('/booked-rooms')}}>
            <i class="now-ui-icons education_agenda-bookmark"></i>
            <p>Bookings</p>
          </a>
        </li>
        {{--dropdown for--}}
        <li data-toggle="collapse" data-target="#new"   >
          <a href="#"><i class="now-ui-icons files_single-copy-04"></i> Reports <span class="arrow"></span></a>
        </li>
        <ul class="sub-menu collapse list-unstyled text-center " id="new">
         
        <li class="{{ 'booked-rooms-inactive' == request()->path() ? 'active ' : ' ' }}">
          <a href={{url('/booked-rooms-inactive')}}>
            {{-- <i class="now-ui-icons education_paper"></i> --}}
            <p>History</p>
          </a>
        </li> 
        <li class="{{ 'date-range' == request()->path() ? 'active ' : ' ' }}">
          <a href="{{url('/date-range')}}">
             
              {{-- <i class="now-ui-icons files_single-copy-04"></i> --}}
              <p>Monthly Report</p>
            </a>
          </li>
          <li class="{{ 'fee-status' == request()->path() ? 'active ' : ' ' }}">
            <a href="{{url('/fee-status')}}">
                {{-- <i class="now-ui-icons shopping_credit-card"></i> --}}
                <p>Paid/Unpaid</p>
              </a>
            </li>
       
        </ul>


      
          
          @endif

   
        </ul>
      </div>
    </div>

    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
       
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo"></a> <!--//table list-->
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            {{-- <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form> --}}



            <ul class="navbar-nav">  
              <li class="nav-item dropdown">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02 "></i>
                  {{ Auth::user()->fname }} 
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                @can('manage-users')
                  <a class="dropdown-item" href="{{ route ('admin.users.index')}}"> Users Management</a>
                   </a>
                @endcan

                
                </div>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <!-- content-->
      <div class="content">
        @yield('content')
      </div>
       <!-- end content-->

       <!--FOOTER-->
      @include('partials.footer')
      <!--FOOTER-->
    </div>
  </div>
@include('partials.scripts')
  <!--   Core JS Files   -->

</body>

</html>