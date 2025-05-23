<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zono admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Zono admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <title>Project Management</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('assets/css/color-1.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
  </head>
  <style>
    .breadcrumb {
        display: flex;
        justify-content: flex-start !important;
        align-items: center;
        padding: 0;
        margin: 0;
        list-style: none;
        background-color: transparent;
        font-family: Roboto, sans-serif;
    }

    .page-title {
        background-color: #ffffff00 !important;
    }

  </style>
  <body>
    <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div>
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
    @include('admin.layout.header')
      <div class="page-body-wrapper">
         @include('admin.layout.sidebar')
        <br>
        <div class="page-body panding">
            <div class="page-title">
              <div class="col-xl-12 col-sm-5 box-col-4">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                      </svg></a></li>
                  <li class="breadcrumb-item">Dashboard</li>
                  <li class="breadcrumb-item active">Default</li>
                </ol>
              </div>
          </div>
          <div class="container-fluid default-dashboard">
            <div class="row">
              <div class="col-xl-6 box-col-7 proorder-md-1">
                <div class="card">
                  <div class="card-body premium-card">
                    <div class="row premium-courses-card">
                      <div class="col-md-5 premium-course">
                        <h1 class="f-w-700">Get Thousands Premium Courses.</h1><span class="f-light f-w-400 f-14">Upgrade to watch, play, learn, make and discover. </span><a class="btn btn-square btn-primary f-w-700" href="pricing.html">Go Premium</a>
                      </div>
                      <div class="col-md-7 premium-course-img">
                        <div class="premium-message"><img class="img-fluid" src="../assets/images/dashboard/massage.gif" alt="massage"></div>
                        <div class="premium-books"><img class="img-fluid" src="../assets/images/dashboard/books.gif" alt="books"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 box-col-5 col-md-6 proorder-md-2">
                <div class="card">
                  <div class="card-header pb-0">
                    <div class="header-top">
                      <h4>Recent Activity</h4>
                      <div class="dropdown icon-dropdown setting-menu">
                        <button class="btn dropdown-toggle" id="userdropdown1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg>
                            <use href="../assets/svg/icon-sprite.svg#setting"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown1"><a class="dropdown-item" href="#">Weekly </a><a class="dropdown-item" href="#">Monthly </a><a class="dropdown-item" href="#">Yearly </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="activity-day">
                      <h6>Today</h6>
                    </div>
                    <div class="recent-activity-card">
                      <ul>
                        <li class="activity-removed">
                          <div class="recent-activity-data">
                            <div class="activity-name"><span>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#Chat"> </use>
                                </svg></span><a href="letter-box.html">Nick Mark mentioned Sara</a></div>
                            <div class="view-btn"><a href="#!">View
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#Arrow-Right-2"></use>
                                </svg></a></div>
                          </div>
                        </li>
                        <li>
                          <div class="recent-activity-data">
                            <div class="activity-name"> <span>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#Download"> </use>
                                </svg></span><a href="letter-box.html">The Post name was removed...</a></div>
                            <div class="view-btn"><a href="#!">View
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#Arrow-Right-2"></use>
                                </svg></a></div>
                          </div>
                        </li>
                        <li>
                          <div class="recent-activity-data">
                            <div class="activity-name"><span>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#Swap"> </use>
                                </svg></span><a href="letter-box.html">Patrick Sullivan published... </a></div>
                            <div class="view-btn"><a href="#!">View
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#Arrow-Right-2"></use>
                                </svg></a></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="activity-day mt-4">
                      <h6>Yesterday</h6>
                    </div>
                    <div class="recent-activity-card">
                      <ul>
                        <li>
                          <div class="recent-activity-data">
                            <div class="activity-name"><span>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#Send"> </use>
                                </svg></span><a href="letter-box.html">Nick Mark mentioned Sara</a></div>
                            <div class="view-btn"><a href="#!">View
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#Arrow-Right-2"></use>
                                </svg></a></div>
                          </div>
                        </li>
                        <li>
                          <div class="recent-activity-data">
                            <div class="activity-name"><span>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#Work"> </use>
                                </svg></span><a href="letter-box.html">The Post name was removed...</a></div>
                            <div class="view-btn"> <a href="#!">View
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#Arrow-Right-2"></use>
                                </svg></a></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 proorder-md-3 box-col-6">
                <div class="card">
                  <div class="card-header custom-border-bottom">
                    <div class="header-top">
                      <h4>Sales Stats</h4>
                      <div class="dropdown icon-dropdown setting-menu">
                        <button class="btn dropdown-toggle" id="userdropdown2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg>
                            <use href="../assets/svg/icon-sprite.svg#setting"> </use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown2"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly </a><a class="dropdown-item" href="#">Yearly </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div id="salesStatsRadialChart"> </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-md-6 proorder-md-5">
                <div class="card latest-sales">
                  <div class="card-header d-flex justify-content-between align-items-center custom-border-bottom">
                    <h4>Latest Sales</h4>
                    <div class="d-flex align-items-center justify-content-center latest-sales-btn">
                      <button class="btn btn-square btn-outline-primary btn-sm" type="button" title="btn btn-square btn-outline-primary btn-sm">Yearly</button>
                      <button class="btn btn-square btn-outline-primary btn-sm" type="button" title="btn btn-square btn-outline-primary btn-sm">Monthly</button>
                      <button class="btn btn-square btn-outline-primary btn-sm active" type="button" title="btn btn-square btn-outline-primary btn-sm">Weekly</button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="lastOrdersChart"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-md-12 box-col-12 proorder-md-4">
                <div class="card">
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h4>Last Orders </h4>
                      <div class="dropdown icon-dropdown setting-menu">
                        <button class="btn dropdown-toggle" id="userdropdown3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg>
                            <use href="../assets/svg/icon-sprite.svg#setting"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown3"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly </a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="table-responsive custom-scrollbar">
                      <table class="last-orders-table table" id="last-orders">
                        <thead>
                          <tr>
                            <th>Name </th>
                            <th>Order No.  </th>
                            <th>Amount</th>
                            <th>Payment Type </th>
                            <th>Date</th>
                            <th>Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="user-data">
                                <div><img src="../assets/images/dashboard/avtar/2.jpg" alt="avatar"></div>
                                <div> <a href="user-profile.html">
                                    <h4>Dmitriy Groshev</h4></a><span>Switzerland</span></div>
                              </div>
                            </td>
                            <td>#790841</td>
                            <td>$2.499</td>
                            <td>Credit Card</td>
                            <td>1 Oct, 14:43</td>
                            <td>
                              <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdownes4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <div class="drop-menu"><i class="icon-more-alt"></i></div>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdownes4"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="user-data">
                                <div><img src="../assets/images/dashboard/avtar/17.jpg" alt="avatar"></div>
                                <div><a href="user-profile.html">
                                    <h4>Patrick Beverley</h4></a><span> Germany</span></div>
                              </div>
                            </td>
                            <td>#454489</td>
                            <td>$2.499</td>
                            <td>Paypal</td>
                            <td>30 Sep, 23:01</td>
                            <td>
                              <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdownes1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <div class="drop-menu"><i class="icon-more-alt"></i></div>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdownes1"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="user-data">
                                <div><img src="../assets/images/avtar/18.jpg" alt="avatar"></div>
                                <div><a href="user-profile.html">
                                    <h4>Kevin Greem</h4></a><span> Canada</span></div>
                              </div>
                            </td>
                            <td>#594579</td>
                            <td>$2.499</td>
                            <td>Credit Card</td>
                            <td>29 Sep,09:31</td>
                            <td>
                              <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdownes2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <div class="drop-menu"><i class="icon-more-alt"></i></div>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdownes2"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="user-data">
                                <div><img src="../assets/images/dashboard/avtar/19.jpg" alt="avatar"></div>
                                <div><a href="user-profile.html">
                                    <h4>William Barton</h4></a><span>United States</span></div>
                              </div>
                            </td>
                            <td>#478495</td>
                            <td>$2.499</td>
                            <td>Credit Card</td>
                            <td>28 Sep, 04:34</td>
                            <td>
                              <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdownes3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <div class="drop-menu"><i class="icon-more-alt"></i></div>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdownes3"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly      </a></div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 proorder-md-6 box-col-6">
                <div class="card">
                  <div class="card-header">
                    <div class="header-top">
                      <h4>Monthly Invoices</h4>
                      <div class="dropdown icon-dropdown setting-menu">
                        <button class="btn dropdown-toggle" id="userdropdown4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg>
                            <use href="../assets/svg/icon-sprite.svg#setting"> </use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown4"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="monthly-invoices">
                      <ul>
                        <li>
                          <div class="monthly-data">
                            <div class="invoice-data-icon"><span>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#bookmark"></use>
                                </svg></span>
                              <div><a href="invoice-1.html">
                                  <h4>Camelun ios Development</h4></a>
                                <h5>20 paid month out of 24</h5>
                              </div>
                            </div>
                            <div class="invoice-price"><span>$12,453.00</span><span>Per Month</span></div>
                          </div>
                        </li>
                        <li>
                          <div class="monthly-data">
                            <div class="invoice-data-icon"><span>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#Ticket-Star"></use>
                                </svg></span>
                              <div><a href="">
                                  <h4>ReactDT Motions</h4></a>
                                <h5>Late payment  12 week - pay invoice</h5>
                              </div>
                            </div>
                            <div class="invoice-price"><span>$54,459.00</span><span>Per month</span></div>
                          </div>
                        </li>
                        <li>
                          <div class="monthly-data">
                            <div class="invoice-data-icon"><span>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#Discovery"></use>
                                </svg></span>
                              <div><a href="invoice-2.html">
                                  <h4>Arocca Store</h4></a>
                                <h5>Error sending payment - Detail information</h5>
                              </div>
                            </div>
                            <div class="invoice-price"><span>$87,884.00</span><span>Per month</span></div>
                          </div>
                        </li>
                        <li>
                          <div class="monthly-data">
                            <div class="invoice-data-icon"><span>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#Shield-Done"></use>
                                </svg></span>
                              <div><a href="invoice-3.html">
                                  <h4>EnterPress Project</h4></a>
                                <h5>25 paid days out of 113</h5>
                              </div>
                            </div>
                            <div class="invoice-price"><span>$79,955.00 </span><span>Per month</span></div>
                          </div>
                        </li>
                        <li>
                          <button class="btn btn-outline-light txt-dark active w-100" type="button"><a class="d-flex gap-2 align-items-center" href="projects.html">
                              <svg>
                                <use href="../assets/svg/icon-sprite.svg#Plus-Circle"></use>
                              </svg>Add Project</a></button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 proorder-md-7 box-col-6">
                <div class="card custom-statistics">
                  <div class="card-header">
                    <div class="header-top">
                      <h4>Recent Statistics  </h4>
                      <div class="dropdown">
                        <button class="btn dropdown-toggle custom-date-btn" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false"><span>19 Aug - 25 Aug</span>
                          <div class="custom-date">
                            <svg>
                              <use href="../assets/svg/icon-sprite.svg#Left-Arrow"></use>
                            </svg>
                            <svg>
                              <use href="../assets/svg/icon-sprite.svg#Right-Arrow"></use>
                            </svg>
                          </div>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">11 Aug - 21 Aug</a><a class="dropdown-item" href="#">07 Sep - 23 Sep</a><a class="dropdown-item" href="#">01 Otc - 15 Otc</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pb-0 pt-0">
                    <div class="recent-statistics">
                      <ul>
                        <li>
                          <div class="arrow-up">
                            <svg>
                              <use href="../assets/svg/icon-sprite.svg#Arrow-Up"></use>
                            </svg>
                          </div><span>$5.850</span>
                        </li>
                        <li>
                          <div class="arrow-down">
                            <svg>
                              <use href="../assets/svg/icon-sprite.svg#Arrow-Down"></use>
                            </svg>
                          </div><span>$1.750</span>
                        </li>
                      </ul>
                    </div>
                    <div id="orderoverview"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 proorder-md-8 box-col-6">
                <div class="card">
                  <div class="card-header">
                    <div class="header-top">
                      <h4>All Notification (10)</h4>
                      <div class="dropdown icon-dropdown setting-menu">
                        <button class="btn dropdown-toggle" id="userdropdown5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg>
                            <use href="../assets/svg/icon-sprite.svg#setting"> </use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown5"><a class="dropdown-item" href="#">Weekly </a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="notification-card">
                      <ul>
                        <li>
                          <div class="user-notification">
                            <div><img src="../assets/images/dashboard/avtar/2.jpg" alt="avatar"></div>
                            <div class="user-description"><a href="letter-box.html">
                                <h4>You have new comments in real finical law agency landing page design.</h4></a><span>Today 11:45pm</span></div>
                          </div>
                          <div class="notification-btn">
                            <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                            <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                          </div>
                          <div class="show-btn"><a href="index.html"> <span>Show</span></a></div>
                        </li>
                        <li>
                          <div class="user-notification">
                            <div><img src="../assets/images/dashboard/avtar/17.jpg" alt="avatar"></div>
                            <div class="user-description"><a href="letter-box.html">
                                <h4>Congrats! you complete all task for today. just need to join meting.</h4></a><span>Today 01:05pm</span></div>
                          </div>
                          <div class="notification-btn">
                            <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                            <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                          </div>
                          <div class="show-btn"><a href="index.html"> <span>Show</span></a></div>
                        </li>
                        <li>
                          <div class="user-notification">
                            <div> <img src="../assets/images/dashboard/avtar/18.jpg" alt="avatar"></div>
                            <div class="user-description"><a href="letter-box.html">
                                <h4>You have new comments in real finical law agency landing page design.</h4></a><span>Today 06:55pm</span></div>
                          </div>
                          <div class="notification-btn">
                            <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                            <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                          </div>
                          <div class="show-btn"><a href="index.html"> <span>Show</span></a></div>
                        </li>
                        <li>
                          <div class="user-notification">
                            <div><img src="../assets/images/dashboard/avtar/19.jpg" alt="avatar"></div>
                            <div class="user-description"><a href="letter-box.html">
                                <h4>Congrats! you complete all task for today. just need to join meting.</h4></a><span>Today 06:55pm</span></div>
                          </div>
                          <div class="notification-btn">
                            <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                            <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                          </div>
                          <div class="show-btn"><a href="index.html"><span>Show </span></a></div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-sm-12 proorder-md-9 box-col-6">
                <div class="card">
                  <div class="card-header">
                    <div class="header-top">
                      <h4>Project Summary </h4>
                      <div class="dropdown icon-dropdown setting-menu">
                        <button class="btn dropdown-toggle" id="userdropdown22" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg>
                            <use href="../assets/svg/icon-sprite.svg#setting"> </use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown22"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive custom-scrollbar">
                      <table class="project-summary table" id="project-summary">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Project Name</th>
                            <th>Team</th>
                            <th>Project Cost</th>
                            <th>Project Status</th>
                            <th>Payment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="f-w-600">A908</td>
                            <td> <a href="projects.html">Amazon Website</a></td>
                            <td class="team-avtar">
                              <div class="customers d-inline-block avatar-group">
                                <ul>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/8.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/10.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/2.jpg" alt=""></li>
                                  <li class="d-inline-block">
                                    <p>26+</p>
                                  </li>
                                </ul>
                              </div>
                            </td>
                            <td>$23,490</td>
                            <td>Completed</td>
                            <td class="txt-success">Done </td>
                          </tr>
                          <tr>
                            <td>R840</td>
                            <td> <a href="projects.html">Paytm bank app</a></td>
                            <td class="team-avtar">
                              <div class="customers d-inline-block avatar-group">
                                <ul>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/2.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/20.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/12.jpg" alt=""></li>
                                  <li class="d-inline-block">
                                    <p>6+</p>
                                  </li>
                                </ul>
                              </div>
                            </td>
                            <td>$45,459</td>
                            <td>In Progress</td>
                            <td class="txt-danger">Pending</td>
                          </tr>
                          <tr>
                            <td class="f-w-600">V908</td>
                            <td class="f-w-600"> <a href="projects.html">Cytrust Dashboard</a></td>
                            <td class="team-avtar">
                              <div class="customers d-inline-block avatar-group">
                                <ul>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/14.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/13.jpg" alt=""></li>
                                </ul>
                              </div>
                            </td>
                            <td class="f-w-600">$78,748 </td>
                            <td class="f-w-600">Completed</td>
                            <td class="txt-success f-w-600">Done</td>
                          </tr>
                          <tr>
                            <td class="f-w-600">K450</td>
                            <td> <a href="projects.html">Project Mecha</a></td>
                            <td class="team-avtar">
                              <div class="customers d-inline-block avatar-group">
                                <ul>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/22.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/15.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/2.jpg" alt=""></li>
                                </ul>
                              </div>
                            </td>
                            <td class="f-w-600">	$98,878</td>
                            <td class="f-w-600">In Progress</td>
                            <td class="txt-danger f-w-600">Pending</td>
                          </tr>
                          <tr>
                            <td class="f-w-600">D480</td>
                            <td class="f-w-600"><a href="projects.html">Dynamic Program</a></td>
                            <td class="team-avtar">
                              <div class="customers d-inline-block avatar-group">
                                <ul>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/21.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/23.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/24.jpg" alt=""></li>
                                  <li class="d-inline-block">
                                    <p>5+                           </p>
                                  </li>
                                </ul>
                              </div>
                            </td>
                            <td class="f-w-600">$23,490</td>
                            <td class="f-w-600">In Progress</td>
                            <td class="txt-danger f-w-600">Pending</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 proorder-md-10 box-col-12">
                <div class="card">
                  <div class="card-header custom-border-bottom">
                    <div class="header-top">
                      <h4>Sales Statistic</h4>
                      <div class="dropdown icon-dropdown setting-menu">
                        <button class="btn dropdown-toggle" id="userdropdown9" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg>
                            <use href="../assets/svg/icon-sprite.svg#setting"> </use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown9"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="groupBarChart"></div>
                    <div class="sales-data">
                      <ul>
                        <li>
                          <div class="total-sales">
                            <div>
                              <h5>$4,875 </h5><span>Total Sales </span>
                            </div>
                            <div class="total-reached"><span>1,00,00</span><span>85% goal reached</span></div>
                          </div>
                          <div class="progress-data">
                            <div class="progress sm-progress-bar progress-border-primary">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"> </div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="total-sales">
                            <div>
                              <h5>$7,560</h5><span>Total Income</span>
                            </div>
                            <div class="total-reached"> <span>1,00,00</span><span>45% goal reached   </span></div>
                          </div>
                          <div class="progress-data">
                            <div class="progress sm-progress-bar progress-border-secondary">
                              <div class="progress-bar bg-secondary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @include('admin.layout.footer')
      </div>
    </div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/custom.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('assets/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/js/header-slick.js') }}"></script>
    <script src="{{ asset('assets/js/chart/morris-chart/raphael.js') }}"></script>
    <script src="{{ asset('assets/js/chart/morris-chart/morris.js') }}"> </script>
    <script src="{{ asset('assets/js/chart/morris-chart/prettify.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/default.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/notify/index.js') }}"></script> -->
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom1.js') }}"></script>
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/owlcarousel/owl-custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>

    @stack('scripts')

    <script>

      const sidebar = document.querySelector('.sidebar-wrapper');
      const pageBody = document.querySelector('.page-body'); // Pilih elemen page-body

      // Tambah event listener untuk klik pada sidebar
      sidebar.addEventListener('click', () => {
          // Semak jika elemen sidebar mempunyai kelas close_icon
          if (sidebar.classList.contains('close_icon')) {
              // Jika ada kelas close_icon, buang kelas sidebar-width
              sidebar.classList.remove('sidebar-width');

              // Buang kelas panding pada page-body
              if (pageBody) {
                  pageBody.classList.remove('panding');
              }
          } else {
              // Jika tiada kelas close_icon, tambah kelas sidebar-width
              sidebar.classList.add('sidebar-width');

              // Tambah kelas panding pada page-body
              if (pageBody) {
                  pageBody.classList.add('panding');
              }
          }
      });


    </script>

  </body>
</html>
