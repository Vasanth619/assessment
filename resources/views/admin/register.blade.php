<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Assessment</title>
    <link href="{{ asset('components/dummy-assets/common/img/favicon.png') }}" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/bootstrap/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/font-icomoon/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-show-password/bootstrap-show-password.min.js') }}"></script>
    <script src="{{ asset('vendors/html5-form-validation/dist/jquery.validation.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('components/core/common/core.cleanui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('components/core/widgets/widgets.cleanui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('components/vendors/common/vendors.cleanui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('components/settings/common/settings.cleanui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('components/pages/common/pages.cleanui.css') }}">
</head>
<body class="config--vertical config--borderLess config--boxed menu-left--colorful theme--light">


<div class="utils__content">
<!-- START: pages/login-alpha -->
<div class="login login--fullscreen" style="background-image: url( {{ asset('components/pages/common/img/login/1.jpg') }})">
    
    <div class="login__block">
        <div class="row">
            <div class="col-xl-12">
                <div class="register__block__inner">
                      <div class="register__block__form">
                        <h4 class="text-uppercase">
                            <strong>Register</strong>
                        </h4>
                        <br>
                        <form id="admin-registration" name="admin-registration" action="{{ url('/create_admin') }}" method="POST">
                             @csrf
                            <div class="form-group">
                                <div class="form-input-icon form-input-icon-right">
                                    <input id="validation-username" class="form-control" placeholder="Username" name="username" type="text" data-validation="[NOTEMPTY]">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input-icon form-input-icon-right">
                                    <i class="icmn-spinner11 utils__spin"></i>
                                    <input id="validation-email" class="form-control" placeholder="Email" name="email" type="text" data-validation="[EMAIL]">
                                </div>
                            </div>
                            
                             <div class="form-group"> 
                                <div class="input-append input-group">
                                        <input id="validation-password" class="form-control" name="password" type="password" data-validation="[L>=6]" data-validation-message="$ must be at least 6 characters" data-toggle="popover" data-content="Your password must contain at least 6 characters" placeholder="Password">
                                </div>        
                            </div>

                            <div class="form-group">
                                <input id="validation-password-confirm" type="password" class="form-control" name="password_confirm" data-validation="[V==password]" data-validation-message="$ does not match the password" data-toggle="popover" data-content="Both password must match" placeholder="Repeat Password">
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary mr-3">Sign Up</button>
                                <span class="register-link">
                                    <a href="{{ url('/login') }}" class="utils__link--blue utils__link--underlined">Login</a> if you have account
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script>
  (function($) {
    "use strict";
    $(function () {

      // Form Validation
      $('#admin-registration').validate({
        submit: {
          settings: {
            inputContainer: '.form-group',
            errorListClass: 'form-control-error',
            errorClass: 'has-danger'
          }
        }
      });

      // Show/Hide Password
      $('.password').password({
        eyeClass: '',
        eyeOpenClass: 'icmn-eye',
        eyeCloseClass: 'icmn-eye-blocked'
      });

    });
  })(jQuery)
</script>

</div>
</body>
</html>