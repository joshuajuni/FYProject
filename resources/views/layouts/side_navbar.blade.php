<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion toggled bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon">
                <i class="fas fa-code"></i>
            </div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{route('home')}}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('session.index') ? 'active' : '' }}" href="{{route('session.index')}}">
                    <i class="fas fa-calendar"></i>
                    <span>Session</span>
                </a>
            </li>
            @if (isset(Auth::user()->profile->admin) || isset(Auth::user()->profile->supervisor))
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                <i class="fas fa-users"></i>
                <span>Setting</span>
            </div>
            @if (!isset(Auth::user()->profile->supervisor))
            <li class="nav-item">
                <a class="nav-link {{ Route::is('admin.index') ? 'active' : '' }}" href="{{route('admin.index')}}">
                    <i class="fas fa-user-secret"></i>
                    <span>Admin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('examiner.index') ? 'active' : '' }}" href="{{route('examiner.index')}}">
                    <i class="fas fa-user-tie"></i>
                    <span>Examiner</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::is('supervisor.index') ? 'active' : '' }}" href="{{route('supervisor.index')}}">
                    <i class="fas fa-user-tie"></i>
                    <span>Supervisor</span>
                </a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link {{ Route::is('student.index') ? 'active' : '' }}" href="{{route('student.index')}}">
                    <i class="fas fa-user-graduate"></i>
                    <span>Student</span>
                </a>
            </li>
            @endif
        </ul>
        <div class="text-center d-none d-md-inline">
            <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
        </div>
    </div>
</nav>