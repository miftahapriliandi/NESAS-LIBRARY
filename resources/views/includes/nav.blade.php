<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
      <ul class="navbar-nav mr-3">
      </ul>
    </form>
    <ul class="navbar-nav navbar-right">
      <li class="nav-item text-white">
        <div class="d-sm-none d-lg-inline-block">Hai, {{ Auth::user()->name}}</div>
      </li>
    </ul>
  </nav>