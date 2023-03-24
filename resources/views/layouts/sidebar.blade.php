<!-- <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">SIMPEG</span>
    </a> -->
    <aside class="main-sidebar  sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <div class=" hidden-xs">
              <img src="https://lkpenter.com/wp-content/uploads/2019/06/LOGO-ENTER-BARU-putih-300x180.png"  alt=""  
              class="brand-image img- elevation-1">
       
             <span class="brand-text font-weight-light">SIMPEG LAPORAN</span>
            
          </div>
          </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
