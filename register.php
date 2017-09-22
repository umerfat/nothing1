<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700%7CRaleway:300,400,700%7CPlayfair+Display:700' rel='stylesheet'>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-icons.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="background-image: url(img/login-bg.jpeg)" class="body-bg-full">
<div class="container page-container">
    <div class="page-content">
        <form method="get" action="" class="form-horizontal">
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="text" placeholder="Username" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="password" placeholder="Confirm Password" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div style="margin-bottom: 7px" class="checkbox-inline checkbox-custom">
                        <input id="exampleCheckboxAgree" type="checkbox" value="remember">
                        <label for="exampleCheckboxAgree" class="checkbox-muted text-muted">Agree the terms and policy</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-lg btn btn-primary btn-rounded btn-block">Sign up</button>
        </form>
        <hr>

        <div class="clearfix">
            <p class="text-muted mb-0 pull-left">Already have an account?</p><a href="login.php" class="inline-block pull-right">Sign In</a>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>