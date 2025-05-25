<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zono admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Zono admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Human Resource System Management</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/css/vendors/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/css/vendors/themify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/css/vendors/flag-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('../assets/css/color-1.css" media="screen') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/css/responsive.css') }}">
  </head>
  <body>
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">
          <div class="login-card login-dark">
            <div>
              <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="{{ asset('../assets/images/logo/logo.png') }}" alt="looginpage"><img class="img-fluid for-dark" src="{{ asset('../assets/images/logo/logo_dark.png') }}" alt="looginpage"></a></div>
              <div class="login-main">
                <form class="theme-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h3>Sign in to account</h3>
                    <p>Enter your email & password to login</p>
                    <div class="form-group">
                        <label class="col-form-label">Email Address</label>
                        <input class="form-control" type="email" name="email" required placeholder="Test@gmail.com">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <div class="form-input position-relative">
                            <input class="form-control" type="password" name="password" required placeholder="*********">
                            <div class="show-hide"><span class="show"></span></div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="checkbox p-0">
                            <input id="checkbox" type="checkbox" name="remember">
                            <label class="text-muted" for="checkbox">Remember password</label>
                        </div>
                        <a class="link" href="">Forgot password?</a>

                        <div class="text-end mt-3">
                            <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="{{ asset('../assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('../assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('../assets/js/icons/feather-icon/feather.min.js') }}"></script>
      <script src="{{ asset('../assets/js/icons/feather-icon/feather-icon.js') }}"></script>
      <script src="{{ asset('../assets/js/config.js') }}"></script>
      <script src="{{ asset('../assets/js/script.js') }}"></script>
    </div>
  </body>
</html>