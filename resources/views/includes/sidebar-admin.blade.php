<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <div class="sidenav-menu-heading d-sm-none">Account</div>
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                Alerts
                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
            </a>
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                Messages
                <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
            </a>
            <div class="sidenav-menu-heading">Menu</div>
            <a class="nav-link {{ (request()->is('admin/dashboard')) ? 'active' : '' }}" href="{{ route('admin-dashboard') }}">
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                Dashboard
            </a>
            <a class="nav-link {{ (request()->is('admin/department*')) ? 'active' : '' }}" href="{{ route('department.index') }}">
                <div class="nav-link-icon"><i data-feather="home"></i></div>
                Data Instansi
            </a>
            <a class="nav-link {{ (request()->is('admin/sender*')) ? 'active' : '' }}" href="{{ route('sender.index') }}">
                <div class="nav-link-icon"><i data-feather="users"></i></div>
                Pengirim Surat
            </a>
            <a class="nav-link {{ (request()->is('admin/letter/create')) ? 'active' : '' }}" href="{{ route('letter.create') }}">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                Tambah Surat
            </a>
            <a class="nav-link {{ (request()->is('admin/letter/surat-masuk')) ? 'active' : '' }}" href="{{ route('surat-masuk') }}">
                <div class="nav-link-icon"><i data-feather="arrow-right"></i></div>
                Surat Masuk
            </a>
            <a class="nav-link {{ (request()->is('admin/letter/surat-keluar')) ? 'active' : '' }}" href="{{ route('surat-keluar') }}">
                <div class="nav-link-icon"><i data-feather="arrow-left"></i></div>
                Surat Keluar
            </a>
            <a class="nav-link {{ (request()->is('admin/user*')) ? 'active' : '' }}" href="{{ route('user.index') }}">
                <div class="nav-link-icon"><i data-feather="user"></i></div>
                Data User
            </a>
            <a class="nav-link {{ (request()->is('admin/setting*')) ? 'active' : '' }}" href="{{ route('setting.index') }}">
                <div class="nav-link-icon"><i data-feather="settings"></i></div>
                Profile
            </a>
        </div>
    </div>
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
        </div>
    </div>
</nav>