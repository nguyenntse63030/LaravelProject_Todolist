<!DOCTYPE html>
<html lang="en">
<head>
    <title>Todo List</title>
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
        <div class="wrap-login100 p-t-50 p-b-90" style="position: absolute;">

            <form class="login100-form validate-form flex-sb flex-w" method="POST" action="/login">

                {{ csrf_field() }}

					<span class="login100-form-title p-b-51">
						Login
					</span>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-24">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div style="float: right">
                        <a href="#" class="txt1">
                            Forgot?
                        </a>
                    </div>
                </div>

                <div class="container-login100-form-btn m-t-17">
                    <input name="btn" type="submit" class="login100-form-btn" value="Login" style="margin-right: 5px"/>
                </div>

                <div class="container-login100-form-btn m-t-17" style="float: left;">
                    <input name="btn" type="submit" class="login100-form-btn" value="Sign Up" style="margin-left: 5px"/>

                </div>
            </form>
        </div>


            @if(count($errors))
                <div class="form-group" style="position: relative; top: 230px;">

                    @foreach($errors->all() as $error)

                        <div class="alert alert-danger" style="color: red; width: 395px;">
                            <li> {{ $error }} </li>
                        </div>

                    @endforeach

                </div>

            @endif

    </div>
</div>

</body>
</html>
