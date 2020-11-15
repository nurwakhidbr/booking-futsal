<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ base_url('dashboard') }}">SIFUT</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="">SIF</a>
    </div>
    <ul class="sidebar-menu">
        <li class="">
            <a class="nav-link" href="{{ base_url('dashboard') }}">
                <i class="fas fa-fire"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a class="nav-link text-danger" href="{{ base_url('auth/logout') }}">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</aside>