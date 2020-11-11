<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href=""></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="">PSB</a>
    </div>
    <ul class="sidebar-menu">
        <li class="">
            <a class="nav-link" href="">
                <i class="fas fa-fire"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a class="nav-link text-danger" onclick="event.preventDefault();document.querySelector('#logout-form').submit();" href="/logout">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</aside>