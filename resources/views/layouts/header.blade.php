   <!-- Logo -->
   <a href="index2.html" class="logo">
       <!-- mini logo for sidebar mini 50x50 pixels -->
       <span class="logo-mini">{{ config('app.name') }}</span>
       <!-- logo for regular state and mobile devices -->
       <span class="logo-lg">{{ config('app.name') }}</span>
   </a>
   <!-- Header Navbar: style can be found in header.less -->
   <nav class="navbar navbar-static-top">
       <!-- Sidebar toggle button-->
       <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
           <span class="sr-only">Toggle navigation</span>
       </a>

       <div class="navbar-custom-menu">
           <ul class="nav navbar-nav">
               <!-- User Account: style can be found in dropdown.less -->
               <li class="dropdown user user-menu">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                       <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="user-image"
                           alt="User Image" />
                       <span class="hidden-xs">{{ auth()->user()->name }}</span>
                   </a>
                   <ul class="dropdown-menu">
                       <!-- User image -->
                       <li class="user-header">
                           <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle"
                               alt="User Image" />

                           <p>
                               {{ auth()->user()->name }}
                               <small>{{ auth()->user()->email }}</small>
                           </p>
                       </li>
                       <!-- Menu Footer-->
                       <li class="user-footer">
                           <div class="pull-left">
                               <a href="" class="btn btn-default btn-flat">Profile</a>
                           </div>
                           <div class="pull-right">
                               <a href="#" class="btn btn-default btn-flat"
                                   onclick="$('#logout-form').submit()">Keluar</a>
                           </div>
                       </li>
                   </ul>
               </li>
               <!-- Control Sidebar Toggle Button -->
               <li>
                   <a href="logout" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
               </li>
           </ul>
       </div>
   </nav>

   <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
       @csrf
   </form>
