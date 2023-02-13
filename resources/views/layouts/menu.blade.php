<!-- need to remove -->
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<li class="nav-item menu-is-opening menu-open">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard
    
        </p>
    </a>
    <!-- <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}"> -->
    <a href="/report/reportverified" class="nav-link active">
        
        <i class="nav-icon fas fa-edit"></i>
        <p>Laporan Harian
        </p>
    </a>
  
<!-- <ul class="nav nav-treeview" style="display: block;">
<li class="nav-item">
<a href="./index.html" class="nav-link active">
<i class="far fa-circle nav-icon"></i>
<p>Dashboard v1</p>
</a>
</li> -->

    <!-- @auth
        @php
            $menus = Auth::user()->role->role_feature;
        @endphp
        @foreach ($menus as $menu)
            <a href="{{route($menu->feature->name)}}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>{{$menu->feature->name}}</p>
            </a>
        @endforeach
    @endauth -->
</li>
