<?php 
if(auth()->user())
{
$roleid = auth()->user()->role_id;
}else{

$roleid = Auth::guard('web_employees')->user()->role_id;
}
?>
<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu"></span></li>
                 <li class="nav-item">
                    <a class="nav-link menu-link @if (request()->routeIs('home')) {{ 'active' }} @endif"
                        href="{{ route('home') }}">
                        <i class="mdi mdi-speedometer"></i>
                        <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                @if($roleid == '1' && $roleid != '2')
                <li class="nav-item">
                    <a href="{{ route('admin.country.index') }}" class="nav-link {{ request()->is('admin/country*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-flag"></i>Countries
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.university.index') }}" class="nav-link {{ request()->is('admin/university*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-university"></i>
                        Universities
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.faculty.index') }}" class="nav-link {{ request()->is('admin/faculty*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        Faculties
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.course.index') }}" class="nav-link {{ request()->is('admin/course*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book-open"></i>
                        Courses
                    </a>
                </li>




                   
                <li class="nav-item">
                    <a href="{{ route('admin.gallery_master.index') }}" class="nav-link {{ request()->is('admin/gallery_master*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-images"></i>
                        Gallery
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.video_gallery.index') }}" class="nav-link {{ request()->is('admin/video_gallery*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-video"></i>
                        Video Gallery
                    </a>
                </li>


                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>