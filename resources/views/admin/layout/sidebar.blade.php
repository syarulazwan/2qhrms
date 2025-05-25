<style>
    
    .sidebar-width {
        width: 320px !important; /* Gaya asal */
    }
    .panding{
        padding: 0 55px !important;
    }
    .sidebar-submenu .opensubchild {
        display: none;
        padding-left: 20px; /* Jarak tambahan */
    }

</style>

<div class="sidebar-wrapper sidebar-width" data-layout="stroke-svg">
    <div>
        <div class="logo-wrapper">
            <a href="">
                <img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="">
            </a>
        <div class="toggle-sidebar">
            <svg class="sidebar-toggle">
                <use href="{{ asset('../assets/svg/icon-sprite.svg#toggle-icon') }}"></use>
            </svg>
        </div>
    </div>
    <div class="logo-icon-wrapper">
        <a href=""><img class="img-fluid" src="{{ asset('../assets/images/logo/logo-icon.png') }}" alt=""></a>
    </div>
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow">
            <i data-feather="arrow-left"></i>
        </div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href=""><img class="img-fluid" src="{{ asset('../assets/images/logo/logo-icon.png') }}" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('dashboard') }}">
                        <svg class="stroke-icon">
                            <use href="{{ asset('../assets/svg/icon-sprite.svg#stroke-landing-page') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('../assets/svg/icon-sprite.svg#fill-landing-page') }}">
                            </use>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('../assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('../assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                        </svg>
                        <span class="">Administration</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a class="submenu-title" href="#">User Management
                                <h5 class="sub-arrow">
                                    <i class="fa fa-angle-right"></i>
                                </h5>
                            </a>
                            <ul class="submenu-content opensubmegamenu">
                                <li>
                                    <a href="{{ route('administration.user')}}">User List</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="submenu-title" href="#">Organization Management
                                <h5 class="sub-arrow">
                                    <i class="fa fa-angle-right"></i>
                                </h5>
                            </a>
                            <ul class="submenu-content opensubmegamenu">
                                <li>
                                    <a href="#">Company</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>
            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
    </div>
</div>
