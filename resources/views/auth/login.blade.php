<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Ophir</title>
	<meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/vendor/select2/select2.min.css')}}">
    <link rel="icon" type="image/png" href="{{ url ('assets/images/icons/favicon.ico')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ url ('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url ('assets/css/main.css')}}">
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
					<img src="{{ url ('assets/images/img-01.png')}}" alt="IMG">
				</div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-title">Area de Login</span>
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Digite o Email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                    </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>
                                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                    <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Digite a Senha" id="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Manter Conectado') }}
                                        </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn" type="submit">
                                    {{ __('Login') }}
                                </button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Esqueceu a senha?') }}
                                        </a>
                                    @endif
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript" src="{{ url ('assets/js/jQuery.js')}}"></script>
    <script type="text/javascript" src="{{ url ('assets/js/main.js')}}"></script>
    <script type="text/javascript" src="{{ url ('assets/js/jquery-3.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{ url ('assets/js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{ url ('assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ url ('assets/js/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{ url ('assets/js/tilt.jquery.min.js')}}"></script>   
 
</body>
</html>