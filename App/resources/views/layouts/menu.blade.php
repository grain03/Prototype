<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('projects.index') }}" class="nav-link {{ Request::is('projects.index') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tasks"></i>
        <p>Projects</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('tasks.index') }}" class="nav-link {{ Request::is('tasks.index') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tasks"></i>
        <p>Tasks</p>
    </a>
</li>
