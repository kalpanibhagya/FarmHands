<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bg-4 {
            background-color: #2f2f2f; /* Black Gray */
            color: #fff;
        }
    </style>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="font-size: x-large;font-weight: bolder" href="<?php echo base_url(); ?>" >Farm_Hands</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Farms</a></li>
                    <li><a href="<?php echo base_url();?>about">About us</a></li>
                </ul>
                <form class="navbar-form navbar-right" action="<?php echo base_url()?>main/login_validation" method="post">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>main" role="button">Sign Up</a>
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>main/login2" role="button">Login</a>
                </form>
            </div>
        </div>
</header>

<footer class="container-fluid bg-4 text-center">
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017 Farm_Hands. &middot; <a href="#">Privacy Policy</a> &middot; <a href="#">Terms</a></p>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>