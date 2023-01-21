@extends('layouts.main')
@section('container')

  <div class="page-hero bg-image overlay-dark mt-5" style="background-image: url(img/anandaa.jpg);" id="beranda">
    <div class="container wow zoomIn">
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-5">
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
    
                        @if(session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                    @endif
                        <div class="login-wrap p-4">
                            <h3 class="text-center text-primary">Login</h3>
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
                                    {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password mt-2"></span> --}}
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
        </div>
  </div>