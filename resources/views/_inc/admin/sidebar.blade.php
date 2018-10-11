<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{ asset(Auth::user()->picture) }}" height="40px" style="border-radius:50%;"/>
            </div>
            <div class="admin-info">
                <div class="font-strong">
                    {{ Auth::user()->firstName }} {{ Auth::user()->lastName }}
                </div><small>{{ Auth::user()->userType }}</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="/admin"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">FEATURES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-plug"></i>
                    <span class="nav-label">Requests</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="/registration">Users</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-users"></i>
                    <span class="nav-label">Users</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{ route('ShowStudents') }}">Students</a>
                    </li>
                    <li>
                        <a href="{{ route('ShowAlumni') }}">Alumni</a>
                    </li>
                    <li>
                        <a href="{{ route('ShowTeachers') }}">Teachers</a>
                    </li>
                    <li>
                        <a href="{{ route('ShowAdmins') }}">Admins</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="sidebar-item-icon fa fa-university"></i>
                    <span class="nav-label">Classes</span><i class="fa fa-angle-left arrow"></i>
                </a>
            </li>
            <li>
                <a href="#"><i class="sidebar-item-icon fa fa-bullhorn"></i>
                    <span class="nav-label">Bulletin</span><i class="fa fa-angle-left arrow"></i>
                </a>
            </li>
            <li>
                <a href="#"><i class="sidebar-item-icon fa fa-map"></i>
                    <span class="nav-label">Tracking</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('ShowWorld')}}">Worldwide</a>
                    </li>
                    <li>
                        <a href="{{route('ShowUS')}}">United States</a>
                    </li>
                    <li>
                        <a href="{{route('ShowNation')}}">Nationwide</a>
                    </li>
                </ul>             
            </li>
            <li>
                <a href="#"><i class="sidebar-item-icon fa fa-child"></i>
                    <span class="nav-label">Communicate</span><i class="fa fa-angle-right arrow"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->