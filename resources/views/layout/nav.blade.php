<nav class="navbar navbar-light bg-dark">
<a class="navbar-brand" href="#">Navbar</a>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  @if(!Auth::guest())
   <li class="nav-item" role="presentation"><a class="nav-link" href="/dashboard" data-bs-hover-animate="bounce">Dashboard</a></li>
  <li class="nav-item">
    <a class="nav-link" href='{{route('logout')}}'> Logout</a>
  </li>
  @endif
</ul>
</nav>