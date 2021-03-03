<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Nesas Library</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">NL</a>
      </div>
      <ul class="sidebar-menu">
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="fas fa-columns"></i> <span>Buku</span></a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="far fa-square"></i> <span>Siswa</span></a></li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="fas fa-th"></i> <span>Peminjaman</span></a>
          </li>
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger btn-sm btn-block" style="margin-top: 260px" type="submit">
              <i class="fas fa-sign-out-alt"></i> Logout
            </button>
          </form>
        </div>
    </aside>
  </div>