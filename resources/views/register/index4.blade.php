@extends('layouts.main')
@section('container')

  <div class="page-hero bg-image overlay-dark mt-5" style="background-image: url(img/anandaa.jpg);" id="beranda">
    <div class="container wow zoomIn">
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-5 ">
                        <div class="login-wrap p-4">
                            <h3 class="text-center text-primary">Buat Akun Baru</h3><hr>
                            <form  class="signin-form" action="/register" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password-field" placeholder="password" required>
                                    {{-- <span toggle="#password-field" class="fa fa-eye toggle-password"></span> --}}
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-0">
                                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="konfirmasi password" required>
                                    {{-- <span toggle="#password_confirmation" class="fa fa-eye toggle-password"></span> --}}
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror 
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="form-control btn btn-primary px-3">Daftar</button>
                                </div>
                            </form>
                        <p class="login-form__footer"><a href="/login" class="text-primary">Sudah memiliki akun? Masuk sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>