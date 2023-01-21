<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="/img/logooo.png">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RSU Ananda Purwokerto - Kesehatan Anda, Kebahagiaan Kami</title>
    

    <!-- Font Icon -->
    <link rel="stylesheet" href="registrasi/fonts/material-icon/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="registrasi/css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <h2>Buat Akun Baru</h2>
            <form method="POST" id="signup-form" class="signup-form">
                <h3>
                    <span class="title_text">Informasi Akun</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password-field" placeholder="********" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            {{-- <input type="password" name="password" id="password" data-indicator="pwindicator" />
                            <div id="pwindicator">
                                <div class="bar-strength">
                                    <div class="bar-process">
                                        <div class="bar"></div>
                                    </div>
                                </div>
                                <div class="label"></div>
                            </div> --}}
                        </div>
                        <p>Sudah memiliki akun? <a href="/login" class="text-primary">Masuk sekarang</a></p>
                    </div>
                    <div class="fieldset-footer">
                        <span>Step 1 of 3</span>
                    </div>
                </fieldset>

                <h3>
                    <span class="title_text">Informasi Pribadi</span>
                </h3>
                <fieldset>

                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" autofocus required value="{{ old('name') }}" placeholder="nama">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror    
                        </div>
                        
                        <div class="form-radio">
                            <label for="gender" class="form-label">Jenis Kelamin</label>                
                            <select class="form-control" id="gender_id" name="gender_id"  @error('gender_id') is-invalid @enderror  required value="{{ old('gender_id') }}">
                                <option disabled selected>Pilih</option>
                                @foreach ($genders as $gender)
                                    @if (old('gender_id') == $gender->id)
                                        <option value="{{ $gender->id }}" selected>{{ $gender->name }}</option>   
                                    @else     
                                        <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-date">
                            <label for="dob">Tanggal Lahir</label>
                            <div class="form-flex">
                                <div class="form-date-item">
                                    <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob"  required value="{{ old('dob') }}">
                                    @error('dob')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror 
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="form-label">No Telepon</label>
                            <input type="text" class="form-control  @error('phone') is-invalid @enderror" id="phone" name="phone" required value="{{ old('phone')}}" placeholder="no telepon">
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror 
                        </div>

                        
                    </div>

                    <div class="fieldset-footer">
                        <span>Step 2 of 3</span>
                    </div>

                </fieldset>

                <h3>
                    <span class="title_text">Informasi Tambahan</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">

                        <div class="form-select">
                            <label for="edu_id" class="form-label">Pendidikan Terakhir</label>
                            <select class="form-control @error('edu_id') is-invalid @enderror" id="edu_id" name="edu_id"  required value="{{ old('edu_id') }}">
                                <option disabled selected>Pilih</option>
                                @foreach ($educations as $education)
                                    @if (old('edu_id') == $education->id)
                                        <option value="{{ $education->id }}" selected>{{ $education->name }}</option>   
                                    @else     
                                        <option value="{{ $education->id }}">{{ $education->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-textarea">
                            <label for="address" class="form-label">Alamat</label>
                            <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" required>{{ old('address') }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        </div>
                       
                    </div>

                    <div class="fieldset-footer">
                        <span>Step 3 of 3</span>
                    </div>
                </fieldset>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="registrasi/vendor/jquery/jquery.min.js"></script>
    <script src="registrasi/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="registrasi/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="registrasi/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="registrasi/vendor/minimalist-picker/dobpicker.js"></script>
    <script src="registrasi/vendor/jquery.pwstrength/jquery.pwstrength.js"></script>
    <script src="registrasi/js/main.js"></script>
    <script src="registrasi/js/mainn.js"></script>
</body>

</html>