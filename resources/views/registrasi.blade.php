<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('template/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}"> <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('template/images/favicon.png') }}" />
    <style>
        .content-wrapper{
          background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.637), rgba(0, 0, 0, 0.425)), url('https://foto.data.kemdikbud.go.id/getImage/20271340/14.jpg');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          width: 100vh;
          height: 100vh;
        }
        /* .container-fluid{
          filter: blur(1.5rem);
        } */
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-4">
                <div class="brand-logo text-center">
                  <img src="https://www.smknegeri1stabat.sch.id/assets/img/logo.png" style="width: 80px;">
                </div>
                <h4>Selamat Datang</h4>
                <form class="pt-3"  action="{{ route('register.post') }}" method="POST">
                  @csrf

                  <div class="form-group">
                    <input type="text" id="name" class="form-control" name="name" placeholder="Name" required autofocus>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email" required autofocus>
                    @if ($errors->has('email'))
                   <span class="text-danger">{{ $errors->first('email') }}</span>
                   @endif
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password" required>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                      Register
                  </button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Sudah Punya Akun? <a href="{{ url('login')}}" class="text-info">Click Disini</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('template/js/off-canvas.js') }}"></script>
    <script src="{{ asset('template/js/misc.js') }}"></script>
    <!-- endinject -->
  </body>
</html>