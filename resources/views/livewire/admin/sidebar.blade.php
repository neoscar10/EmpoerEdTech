<div> 
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard') ? 'active' : 'collapsed' }}" href="{{ url('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->is('volunteers') ? 'active' : 'collapsed' }}" href="{{ url('volunteers') }}">
          <i class="bi bi-people"></i>
          <span>Volunteers</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->is('donations') ? 'active' : 'collapsed' }}" href="{{ url('donations') }}">
          <i class="bi bi-heart"></i>
          <span>Donations</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->is('partners') ? 'active' : 'collapsed' }}" href="{{ url('partners') }}">
          <i class="bi bi-people"></i>
          <span>Partners</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->is('projects') ? 'active' : 'collapsed' }}" href="{{ url('projects') }}">
          <i class="bi bi-folder"></i>
          <span>Projects</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->is('ucoming-projects') ? 'active' : 'collapsed' }}" href="{{ url('upcoming-projects') }}">
          <i class="bi bi-folder"></i>
          <span>Upcoming Projects</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->is('participants-list') ? 'active' : 'collapsed' }}" href="{{ url('/participants-list') }}">
          <i class="bi bi-people"></i>
          <span>Program Participants</span>
        </a>
      </li>

      

    </ul>
  </aside>
</div>
