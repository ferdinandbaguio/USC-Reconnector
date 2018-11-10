<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="/storage/user_img/{{ Auth::user()->picture }}" height="40px" style="border-radius:50%;"/>
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
            {{-- Requests --}}
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-plug"></i>
                    <span class="nav-label">Requests</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="/registration">Registration</a>
                    </li>
                    <li>
                        <a href="/studentrequest">Student Requests</a>
                    </li>
                </ul>
            </li>
            {{-- Users --}}
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
                    @if(Auth::user()->userType != "Coordinator")
                        <li>
                            <a href="{{ route('ShowCoordinators') }}">Coordinators</a>
                        </li>
                    @endif
                    @if(Auth::user()->userType == "Admin")
                        <li>
                            <a href="{{ route('ShowChairs') }}">Chair</a>
                        </li>
                        <li>
                            <a href="{{ route('ShowAdmins') }}">Admins</a>
                        </li>
                    @endif
                </ul>
            </li>
            {{-- School Management --}}
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-university"></i>
                    <span class="nav-label">School Management</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{ route('ShowClasses') }}">Classes</a>
                    </li>
                    <li>
                        <a href="{{ route('ShowSchool') }}">S | D | C</a>
                    </li>
                </ul>
            </li>
            {{-- Bulletin --}}
            <li>
                <a href="{{ route('ShowPosts') }}"><i class="sidebar-item-icon fa fa-bullhorn"></i>
                    <span class="nav-label">Bulletin</span><i class="fa fa-angle-right arrow"></i>
                </a>
            </li>
            {{-- Tracking --}}
            <li>
                <a href="#"><i class="sidebar-item-icon fa fa-map"></i>
                    <span class="nav-label">Tracking</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('ShowWorld')}}">Worldwide</a>
                    </li>
                    <li>
                        <a href="{{route('AlumniCompany')}}">Companies</a>
                    </li>
                    {{-- <li>
                        <a href="{{route('ShowUS')}}">United States</a>
                    </li>
                    <li>
                        <a href="{{route('ShowNation')}}">Nationwide</a>
                    </li> --}}
                </ul>             
            </li>
            {{-- Communicate --}}
            <li>
                <a href="{{ route('Communication') }}"><i class="sidebar-item-icon fa fa-child"></i>
                    <span class="nav-label">Communicate</span><i class="fa fa-angle-right arrow"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->