
<style>
    .sidebar-width {
    width: 300px !important; /* Gaya asal */

    }

    .panding{
        padding: 0 45px !important;
    }

    .sidebar-submenu .opensubchild {
        display: none;
    padding-left: 20px; /* Jarak tambahan */
}



</style>
<div class="sidebar-wrapper sidebar-width" data-layout="stroke-svg">
    <div>
        <div class="logo-wrapper">
            <a href="index.html">
                <img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="">
            </a>
        <div class="toggle-sidebar">
            <svg class="sidebar-toggle">
                <use href="../assets/svg/icon-sprite.svg#toggle-icon"></use>
            </svg>
        </div>
    </div>
    <div class="logo-icon-wrapper">
        <a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
    </div>
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow">
            <i data-feather="arrow-left"></i>
        </div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li class="pin-title sidebar-main-title">
                <div>
                    <h6>Pinned</h6>
                </div>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="landing-page.html">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-landing-page"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-landing-page">
                            </use>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-bookmark"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-widget"></use>
                        </svg>
                        <span class="">Budget</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a class="submenu-title" href="#">Expense Tracking

                            </a>
                        </li>
                        <li>
                            <a class="submenu-title" href="#">Financial Reporting

                            </a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-bookmark"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-widget"></use>
                        </svg>
                        <span class="">Gantt Chart & Schedule</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a class="submenu-title" href="#">Task Dependencies</a>
                        </li>
                        <li>
                            <a class="submenu-title" href="#">Critical Path Analysis</a>
                        </li>
                        <li>
                            <a class="submenu-title" href="#">Milestone Tracking</a>
                        </li>
                        <li>
                            <a class="submenu-title" href="#">Task Assignment</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-bookmark"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-widget"></use>
                        </svg>
                        <span class="">RAIDD</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a class="submenu-title" href="#">Mitigation Plan</a>
                        </li>
                        <li>
                            <a class="submenu-title" href="#">Priority Level</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-bookmark"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-widget"></use>
                        </svg>
                        <span class="">Project Management</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a class="submenu-title" href="#">Project Documents</a>
                        </li>
                        <li>
                            <a class="submenu-title" href="#">Client & Vendor Management</a>
                        </li>
                        <li>
                            <a class="submenu-title" href="#">Performance Dashboard</a>
                        </li>
                        <li>
                            <a class="submenu-title" href="#">Task & Approval Workflow</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-widget"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-widget"></use>
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
                                    <a href="#">User List</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="submenu-title" href="#">Access Management
                                <h5 class="sub-arrow">
                                    <i class="fa fa-angle-right"></i>
                                </h5>
                            </a>
                            <ul class="submenu-content opensubmegamenu">
                                <li>
                                    <a href="#">Menu Management

                                    </h5>

                                    </a>
                                    <ul class="opensubchild"> <!-- Child menu -->
                                        <li><a href="#">Menu</a></li>
                                        <li><a href="#">Sub Menu</a></li>
                                        <li><a href="#">Parent Menu</a></li>
                                        <li><a href="#">Child Menu</a></li>
                                        <li><a href="#">List Menu</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Role Manangement</a>
                                    <ul class="opensubchild"> <!-- Child menu -->
                                        <li><a href="#">List Role</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Permission</a>
                                    <ul class="opensubchild"> <!-- Child menu -->
                                        <li><a href="#">List Permission </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="submenu-title" href="#">Workflow Management
                                <h5 class="sub-arrow">
                                    <i class="fa fa-angle-right"></i>
                                </h5>
                            </a>
                            <ul class="submenu-content opensubmegamenu">
                                <li>
                                    <a href="#">Workflow</a>
                                </li>
                                <li>
                                    <a href="#">Confiq Workflow</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="submenu-title" href="#">Audit Management
                                <h5 class="sub-arrow">
                                    <i class="fa fa-angle-right"></i>
                                </h5>
                            </a>
                            <ul class="submenu-content opensubmegamenu">
                                <li>
                                    <a href="#">Access Log</a>
                                </li>
                                <li>
                                    <a href="#">General Log</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="submenu-title" href="#">Calender Management
                                <h5 class="sub-arrow">
                                    <i class="fa fa-angle-right"></i>
                                </h5>
                            </a>
                            <ul class="submenu-content opensubmegamenu">
                                <li>
                                    <a href="#">Set Weekend</a>
                                </li>
                                <li>
                                    <a href="#">Holiday</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="submenu-title" href="#">Place Management
                                <h5 class="sub-arrow">
                                    <i class="fa fa-angle-right"></i>
                                </h5>
                            </a>
                            <ul class="submenu-content opensubmegamenu">
                                <li>
                                    <a href="#">Country</a>
                                </li>
                                <li>
                                    <a href="#">State</a>
                                </li>
                                <li>
                                    <a href="#">City</a>
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

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

<script>

    $(document).ready(function() {
        // Toggles visibility of submenu when the parent menu item is clicked
        $('li > a').click(function(e) {
            // Prevent default anchor behavior
            e.preventDefault();

            // Toggle the submenu under the clicked menu item
            $(this).next('.opensubchild').slideToggle();

            // Optionally, close other submenus when a new menu is clicked
            $('ul.opensubchild').not($(this).next()).slideUp();
        });

    });

</script>
