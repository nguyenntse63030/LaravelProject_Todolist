<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V10</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="Login_v10/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Login_v10/css/main.css">
    <link rel="stylesheet" type="text/css" href="Login_v10/css/util.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90" style="border: solid orange 5px;">



            <form class="login100-form validate-form flex-sb flex-w" method="POST" action="/register">

                    {{ csrf_field() }}

					<span class="login100-form-title p-b-51" style="position:relative; bottom: 30px; height: 50px;">
						Sign Up
					</span>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                    <input class="input100" type="text" name="username" placeholder="Username" value="{{ old( 'username' ) }}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                    <input class="input100" type="text" name="fullname" placeholder="Fullname" value="{{ old( 'fullname' ) }}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                    <input class="input100" type="text" name="email" placeholder="Email" value="{{ old( 'email' ) }}">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                    <input class="input100" type="password" name="password_confirmation" placeholder="Password Confirmation">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn m-t-17" style="width: 100%">
                    <div class="container-login100-form-btn m-t-17" style="width: 100%">
                        {{--<input name="btn" type="submit" class="login100-form-btn" value="Submit"/>--}}
                        <button class="login100-form-btn">Submit</button>
                    </div>
                </div>

                @if(count($errors))

                    <div class="form-group" style="position: absolute; top: 610px; width: 100%;">

                        <div class="alert alert-danger">

                            <li style="color: red; text-align: center;">{{ $errors->first() }}</li>

                        </div>

                    </div>

                @endif

            </form>
        </div>
    </div>
</div>

</body>
</html>
