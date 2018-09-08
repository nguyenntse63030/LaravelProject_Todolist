<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table V04</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/table/util.css">
    <link rel="stylesheet" type="text/css" href="/table/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="/css/blog.css" rel="stylesheet">
    <link rel="stylesheet" href="/Login_v10/css/main.css">
    <link rel="stylesheet" href="/Login_v10/css/util.css">

    <!--===============================================================================================-->
</head>
<style>
    .inProButton {
        font-family: Ubuntu-Bold;
        font-size: 16px;
        color: #fff;
        line-height: 1.2;
        text-transform: uppercase;

        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
        width: 60%;
        height: 40px;
        background-color: #00cf11;
        border-radius: 3px;

        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }

    .inProButton:hover {
        background-color: #1b6b2b;
    }

    .doneButton {
        font-family: Ubuntu-Bold;
        font-size: 16px;
        color: #fff;
        line-height: 1.2;
        text-transform: uppercase;

        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
        width: 60%;
        height: 40px;
        background-color: red;
        border-radius: 3px;

        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }

    .doneButton:hover {
        background-color: #a9242b;
    }

    .deleteButton {
        font-family: Ubuntu-Bold;
        font-size: 16px;
        color: #fff;
        line-height: 1.2;
        text-transform: uppercase;

        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
        width: 60%;
        height: 40px;
        background-color: #6e72de;
        border-radius: 3px;

        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }

    .deleteButton:hover {
        background-color: #35336b;
    }
</style>
<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            @if (session()->get('Auth') != null)
                <a class="nav-link ml-auto" href="#" style="text-transform: uppercase">{{ session()->get('Auth')->fullname }}</a>
            @endif
            <a class="nav-link" href="/logout">Logout</a>
        </nav>
    </div>
</div>


<div class="wrap-input100" style="position: relative; width: 50%; margin-left: 25% ">
    <form action="/user/addtask" method="POST">

        {{ csrf_field() }}

        <input class="input100" type="text" name="taskName" placeholder="What do you want to do?" required>
        <input class="login100-form-btn" type="submit" name="addTask" value="Add Task" style="margin-left: 40%; margin-top: 10px; float: left; width: 20%;">

    </form>
</div>


<div class="limiter">
    <div class="container-table100" style="position: relative">
        <div class="wrap-table100">
            <div class="table100 ver1 m-b-110" style="margin-top: -100px;">
                <div class="table100-head">
                    <table>
                        <thead>
                        <tr style="background-color: #375b86">
                            <th style="padding-left: 140px; width: 30%">TASK</th>
                            <th style="padding-left: 110px; width: 30%">CREATED DAY</th>
                            <th style="padding-left: 65px; width: 20%">STATUS</th>
                            <th style="padding-left: 20px; width: 20%">ACTION</th>
                        </tr>
                        </thead>
                    </table>
                </div>

                <div class="table100-body js-pscroll">
                    <table>
                        <tbody>

                            @foreach($tasks as $task)
                                <form action="/updateStatus">
                                    <tr>
                                        <td align="center" style="width: 30%">
                                            {{ $task->taskName }}
                                        </td>
                                        <td align="center" style="width: 30%">
                                            {{ $task->created_at }}
                                        </td>
                                        <td align="center" style="width: 20%">

                                            @if($task->status == 'Done')
                                                <input class="doneButton" type="submit" name="sttButton" value="{{ $task->status }}">

                                            @else
                                            <input class="inProButton" type="submit" name="sttButton" value="{{ $task->status }}">
                                            @endif

                                        </td>
                                        <td style="width: 30%">
                                            <a class="deleteButton" href="/deleteTask/{{$task->id}}">DELETE</a>
                                            <input type="hidden" name="taskID" value="{{ $task->id }}">
                                        </td>
                                    </tr>
                                </form>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function(){
        var ps = new PerfectScrollbar(this);

        $(window).on('resize', function(){
            ps.update();
        })
    });


</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>

</body>
</html>
