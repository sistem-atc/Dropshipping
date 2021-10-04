<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Reset de Senha</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="{{ url ('assets/images/icons/favicon.ico')}}"/>
        <link rel="stylesheet" type="text/css" href="{{ url ('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ url ('assets/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{ url ('assets/css/templatemo-klassy-cafe.css')}}">
        <link rel="stylesheet" href="{{ url ('assets/css/owl-carousel.css')}}">
        <link rel="stylesheet" href="{{ url ('assets/css/lightbox.css')}}">
    </head>    
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        </br><div class="card-header row justify-content-center">{{ __('Reset Password') }}</div></br>

                        <div class="card-body">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div></br>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Reset Password') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="{{ url ('assets/js/jquery-2.1.0.min.js')}}"></script>
    <script src="{{ url ('assets/js/popper.js')}}"></script>
    <script src="{{ url ('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ url ('assets/js/owl-carousel.js')}}"></script>
    <script src="{{ url ('assets/js/accordions.js')}}"></script>
    <script src="{{ url ('assets/js/datepicker.js')}}"></script>
    <script src="{{ url ('assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{ url ('assets/js/waypoints.min.js')}}"></script>
    <script src="{{ url ('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ url ('assets/js/imgfix.min.js')}}"></script> 
    <script src="{{ url ('assets/js/slick.js')}}"></script> 
    <script src="{{ url ('assets/js/lightbox.js')}}"></script> 
    <script src="{{ url ('assets/js/isotope.js')}}"></script> 
    <script src="{{ url ('assets/js/custom.js')}}"></script>
    </body>
</html>
