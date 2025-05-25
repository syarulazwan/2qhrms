<style>
  .onhover-show-div.notification-dropdown {
    max-height: 600px;
    overflow-y: auto;
  }
</style>
<div class="page-header">
  <div class="header-wrapper row m-0">
    <div class="header-logo-wrapper col-auto p-0">
      <div class="logo-wrapper"><a href=""> <img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a></div>
      <div class="toggle-sidebar">
        <svg class="sidebar-toggle">
          <use href="../assets/svg/icon-sprite.svg#stroke-animation"></use>
        </svg>
      </div>
    </div>
    <div class="nav-right col-xl-12 col-lg-12 col-auto pull-right right-header p-0">
      <ul class="nav-menus">
        <li>
          <div class="mode">
            <svg class="for-dark">
              <use href="../assets/svg/icon-sprite.svg#moon"></use>
            </svg>
            <svg class="for-light">
              <use href="../assets/svg/icon-sprite.svg#Sun"></use>
            </svg>
          </div>
        </li>
        <li class="profile-nav onhover-dropdown pe-0 py-0">
          <div class="d-flex align-items-center profile-media"><img class="b-r-25" src="../assets/images/dashboard/profile.png" alt="">
            <div class="flex-grow-1 user"><span>{{ Auth::User()->name ?? ''}}</span>
            </div>
          </div>
          <ul class="profile-dropdown onhover-show-div">
            <li><a href="{{ route('page.logout') }}"> <i data-feather="log-in"></i><span>Log Out</span></a></li>
          </ul>
        </li>

      </ul>
    </div>
    <script class="result-template" type="text/x-handlebars-template">
      <div class="ProfileCard u-cf">
      <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
      <div class="ProfileCard-details">
      <div class="ProfileCard-realName"></div>
      </div>
      </div>
    </script>
    <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
  </div>
</div>
