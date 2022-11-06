
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Laravel') }} - Admin Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('') }}assets/images/favicon.ico">

        <link href="{{ asset('') }}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('') }}assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('') }}assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">

                <div class="panel-body">
                    <h3 class="text-center m-t-0 m-b-30">
                        <span class="">{{ config('app.name', 'Laravel') }} - Admin Login</span>
                    </h3>
                    <h4 class="text-muted text-center m-t-0"><b>Sign In</b></h4>

                    <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="checkbox-signup">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>



        <!-- jQuery  -->
        <script src="{{ asset('') }}assets/js/jquery.min.js"></script>
        <script src="{{ asset('') }}assets/js/bootstrap.min.js"></script>
        <script src="{{ asset('') }}assets/js/modernizr.min.js"></script>
        <script src="{{ asset('') }}assets/js/detect.js"></script>
        <script src="{{ asset('') }}assets/js/fastclick.js"></script>
        <script src="{{ asset('') }}assets/js/jquery.slimscroll.js"></script>
        <script src="{{ asset('') }}assets/js/jquery.blockUI.js"></script>
        <script src="{{ asset('') }}assets/js/waves.js"></script>
        <script src="{{ asset('') }}assets/js/wow.min.js"></script>
        <script src="{{ asset('') }}assets/js/jquery.nicescroll.js"></script>
        <script src="{{ asset('') }}assets/js/jquery.scrollTo.min.js"></script>

        <script src="{{ asset('') }}assets/js/app.js"></script>

    </body>
</html>