<aside class="app-sidebar sticky" id="sidebar">
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="{{ asset('images/brand-logos/logo-3.png') }}" alt="logo" class="desktop-logo">
            <img src="{{ asset('images/brand-logos/logo-3.png') }}" alt="logo" class="toggle-logo">
            <img src="{{ asset('images/brand-logos/logo-3.png') }}" alt="logo" class="desktop-dark">
            <img src="{{ asset('images/brand-logos/logo-3.png') }}" alt="logo" class="toggle-dark">
            <img src="{{ asset('images/brand-logos/logo-3.png') }}" alt="logo" class="desktop-white">
            <img src="{{ asset('images/brand-logos/logo-3.png') }}" alt="logo" class="toggle-white">
        </a>
    </div>
    <div class="main-sidebar" id="sidebar-scroll">
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">
                {{-- Dashboard --}}
                <li class="slide">
                    <a href="{{ route('admin.dashboard') }}"
                        class="side-menu__item {{ request()->routeIs('admin.dashboard.index') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt fs-16 side-menu__icon"></i>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>

                {{-- Users --}}
                <li class="slide has-sub {{ request()->routeIs('admin.users.*') ? 'open' : '' }}">
                    <a href="{{ route('admin.users.index') }}" class="side-menu__item">
                        <i class="fa fa-thin fa-user fs-16 side-menu__icon"></i>
                        <span class="side-menu__label">Users</span>
                        <i class="fas fa-thin fa-chevron-right fs-16 side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide">
                            <a href="javascript:void(0);"
                                class="side-menu__item {{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
                                All Users
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg></div>
        </nav>
    </div>
</aside>