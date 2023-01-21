<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="/img/logooo.png">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RSU Ananda Purwokerto - Kesehatan Anda, Kebahagiaan Kami</title>
    
    <!-- Custom Stylesheet -->
    <link href="/dashboard1/css/style.css" rel="stylesheet">
    <style>
        .login-form-bg {
          background-image: url('img/anandaa2.jpg');
          background-size: cover;
        }
    </style>  
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="/"> <h4>Buat Akun Baru</h4></a>
        
                                <form class="mt-5 mb-5 login-input" action="/register" method="post">
                                    @csrf
                                    <div class="form-group">
                                        {{-- <label for="email">Email address</label> --}}
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        {{-- <label for="email">Email address</label> --}}
                                        <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group" id="show_hide_password">
                                        {{-- <label for="password">Password</label> --}}
                                        <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                                        <div class="input-group-addon">
                                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                        </div>                                       
                                    </div>
                                    <button class="btn login-form__btn submit w-100" type="submit">Daftar</button>
                                </form>
                                <p class="mt-5 login-form__footer">Sudah memiliki akun? <a href="/login" class="text-primary">Masuk sekarang</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->

    @include('sweetalert::alert')
    <script src="/dashboard1/plugins/common/common.min.js"></script>
    <script src="/dashboard1/js/custom.min.js"></script>
    <script src="/dashboard1/js/settings.js"></script>
    <script src="/dashboard1/js/gleek.js"></script>
    <script src="/dashboard1/js/styleSwitcher.js"></script>

    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if($('#show_hide_password input').attr("type") == "text"){
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass( "fa-eye-slash" );
                $('#show_hide_password i').removeClass( "fa-eye" );
            }else if($('#show_hide_password input').attr("type") == "password"){
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass( "fa-eye-slash" );
                $('#show_hide_password i').addClass( "fa-eye" );
            }
            });
        });
    </script>
</body>
</html>





