<!doctype html>
<html lang="en">
  <head>
  	<title>RSU Ananda Purwokerto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="login_style/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(img/anandaa2.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-5">
					<div class="login-wrap p-4">
                        <h3 class="text-center">Login</h3>
                        <hr>
                        <form class="signin-form" action="/login" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <input type="password" name="password" class="form-control" id="password-field" placeholder="********" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            {{-- <div class="ml-2">
                                <a href="#" style="color: #64646e;font-size:10pt">Lupa password?</a>
                            </div> --}}
                            <div class="form-group mt-4">
                                <button type="submit" class="form-control btn btn-primary px-3">Masuk</button>
                            </div>
                        </form>
                    <p class="login-form__footer"><a href="/register" class="text-primary">Belum memiliki akun? Daftar sekarang</a></p>
                    </div>
				</div>
			</div>
		</div>
	</section>

	<script src="login_style/js/jquery.min.js"></script>
  <script src="login_style/js/popper.js"></script>
  <script src="login_style/js/bootstrap.min.js"></script>
  <script src="login_style/js/main.js"></script>

	</body>
</html>

