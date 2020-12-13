<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{route('home')}}">
                    <span class="brand-logo">
                        <img src="images/logo/logo4.png" height="24">
                    </span>
                    <h2 class="brand-text">nixby/cem</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active ">
                <a href="{{route('home')}}" class="d-flex align-items-center" target="_self">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate">Dashboard</span>
                </a>
            </li>

            <!-- Customer Management Panel -->
            <li class=" navigation-header"><span data-i18n="Misc">Customer Management</span><i data-feather="more-horizontal"></i>
            </li>
            <li class="nav-item  ">
                <a href="/customers" class="d-flex align-items-center" target="_self">
                    <i data-feather="users"></i>
                    <span class="menu-title text-truncate">Customers</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="#" class="d-flex align-items-center" target="_self">
                    <i data-feather="upload"></i>
                    <span class="menu-title text-truncate">Bulk Import</span>
                </a>
            </li>

            <!-- Festive Panel -->
            <li class=" navigation-header"><span data-i18n="Misc">Festive Greetings</span><i data-feather="more-horizontal"></i>
            </li>
            <li class="nav-item  ">
                <a href="#" class="d-flex align-items-center" target="_self">
                    <i data-feather="download"></i>
                    <span class="menu-title text-truncate">Download</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="#" class="d-flex align-items-center" target="_self">
                    <i data-feather="mail"></i>
                    <span class="menu-title text-truncate">E-Mail</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="#" class="d-flex align-items-center" target="_self">
                    <i data-feather="message-square"></i>
                    <span class="menu-title text-truncate">SMS</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="#" class="d-flex align-items-center" target="_self">
                    <i data-feather="share-2"></i>
                    <span class="menu-title text-truncate">Social Media</span>
                </a>
            </li>

            <!-- Profile Management Panel -->
            <li class=" navigation-header"><span data-i18n="Misc">Profile Management</span><i data-feather="more-horizontal"></i>
            </li>
            <li class="nav-item  ">
                <a href="#" class="d-flex align-items-center" target="_self">
                    <i data-feather="edit"></i>
                    <span class="menu-title text-truncate">Update Profile</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="#" class="d-flex align-items-center" target="_self">
                    <i data-feather="key"></i>
                    <span class="menu-title text-truncate">Change Password</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="d-flex align-items-center" target="_self">
                    <i data-feather="power"></i>
                    <span class="menu-title text-truncate">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
