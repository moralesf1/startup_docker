<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/dark/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Sep 2018 20:22:17 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("images/favicon.png") }}">
    <title>Iniciar sesion</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->
</head>

<body>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>

    <section id="wrapper">
        <div class="login-register" style="background-image:url({{ asset("images/background/login_1.jpg") }});">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" method="post" id="loginform" action="{{ route('login') }}">
                        @csrf
                        <h3 class="box-title m-b-20">Iniciar sesi&oacute;n</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" name="email" placeholder="Correo...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" name="password" placeholder="Contraseña...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-flex no-block align-items-center">
                                <div class="checkbox checkbox-primary p-t-0">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> Recordarme </label>
                                </div>
                                <div class="ml-auto">
                                    <a href="{{ url("password/reset") }}" id="to-recover" class="text-muted">
                                        <i class="fa fa-lock m-r-5"></i>
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">
                                    Entrar
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="social">
                                    <button class="btn btn-facebook" data-toggle="tooltip" title="Login with Facebook">
                                        <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                    </button>
                                    <button class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google">
                                        <i aria-hidden="true" class="fab fa-google-plus-g"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                ¿Ya tienes una cuenta? <a href="{{ url("/register") }}" class="text-info m-l-5">
                                    <b>Registrarme</b>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>


</body>

</html>
