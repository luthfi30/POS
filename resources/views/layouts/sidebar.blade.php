   <!-- Left side column. contains the logo and sidebar -->
   <aside class="main-sidebar">
       <!-- sidebar: style can be found in sidebar.less -->
       <section class="sidebar">
           <!-- Sidebar user panel -->
           <div class="user-panel">
               <div class="pull-left image">
                   <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
               </div>
               <div class="pull-left info">
                   <p>{{ auth()->user()->name }}</p>
                   <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
               </div>
           </div>
           <!-- search form -->
           <form action="#" method="get" class="sidebar-form">
               <div class="input-group">
                   <input type="text" name="q" class="form-control" placeholder="Search..." />
                   <span class="input-group-btn">
                       <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                               class="fa fa-search"></i></button>
                   </span>
               </div>
           </form>
           <!-- /.search form -->
           <!-- sidebar menu: : style can be found in sidebar.less -->
           <ul class="sidebar-menu" data-widget="tree">
               <li class="header">Master</li>
               <li>
                   <a href="{{ route('dashboard') }}"><i class="fa fa-book"></i> <span>Dashboard</span></a>
               </li>
               <li>
                   <a href="{{ route('kategori.index') }}"><i class="fa fa-book"></i> <span>Kategori</span></a>
               </li>
               <li>
                   <a href="pages/widgets.html">
                       <i class="fa fa-th"></i> <span>Produk</span>
                   </a>
               </li>
               <li>
                   <a href="pages/widgets.html">
                       <i class="fa fa-th"></i> <span>Member</span>
                   </a>
               </li>
               <li>
                   <a href="pages/widgets.html">
                       <i class="fa fa-th"></i> <span>Suplier</span>
                   </a>
               </li>
               <li class="header">Transaksi</li>
               <li>
                   <a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Pengeluaran</span></a>
               </li>
               <li>
                   <a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Pembelian</span></a>
               </li>
               <li>
                   <a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Penjualan</span></a>
               </li>
               <li>
                   <a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Transaksi Lama</span></a>
               </li>
               <li>
                   <a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Transaksi Baru</span></a>
               </li>
               <li class="header">Report</li>
               <li class="active treeview">
                   <a href="#">
                       <i class="fa fa-dashboard"></i> <span>Laporan</span>
                       <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                       </span>
                   </a>
                   <ul class="treeview-menu">
                       <li class="active">
                           <a href="index.html"><i class="fa fa-circle-o"></i> laporan</a>
                       </li>
                   </ul>
               </li>
               <li class="header">Sistem</li>
               <li class="treeview">
                   <a href="#">
                       <i class="fa fa-edit"></i> <span>Sistem</span>
                       <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                       </span>
                   </a>
                   <ul class="treeview-menu">
                       <li>
                           <a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> User</a>
                       </li>
                       <li>
                           <a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Pengaturan</a>
                       </li>
                   </ul>
               </li>

           </ul>
       </section>
       <!-- /.sidebar -->
   </aside>
