<nav class="sidebar">
  <div class="sidebar-header">
    <a href=" {{ route('home')}} " class="sidebar-brand">
      TUCASA <span>CTF</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">
        Welcome
      </li>
      <li class="nav-item active">
        <a href="{{ url('/') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <form action=" {{ route('logout_post') }} " method="POST">
          @csrf
          <button class="btn btn-primary form-control" type="submit" value="Logout">
              Logout
          </button>
        </form>
      </li>
    </ul>
  </div>
</nav>
