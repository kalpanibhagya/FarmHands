<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bg-4 {
            background-color: #2f2f2f; /* Black Gray */
            color: #fff;
        }

        .page-bg {
            background-image: url('<?php echo base_url(); ?>assets/images/background.jpg');
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
            filter: blur(5px);
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
        }

        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        .form-group input {
            width: 80%;
        }

        .block {
            margin: 40px;
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
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>main/login" role="button">Login</a>
                </form>
            </div>
        </div>
</header>
<section style="margin-top: 100px">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="height: 50px">
                        <p class="panel-title text-center" style="font-weight: bolder;font-size: 25px">Farm_Hands</p>
                    </div>
                    <div class="panel-body">
                        <?php
                        echo $this->session->flashdata('error');
                        ?>
                        <form method="post" action="<?php echo base_url()?>main/login_validation">
                            <div class="block" align="center" style="margin-top: 10px">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="email" class="form-control" name="username">
                                    <span class="text-danger"><?php echo form_error('username')?></span>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                    <span class="text-danger"><?php echo form_error('password')?></span>
                                </div>
                            <div class="form-group text-center">
                                <input style="margin-bottom: 10px" type="submit" class="btn btn-primary" name="Login" value="Login">
                                <br/>
                                <a href="#">Forgot Password ?</a><br/>
                                Not a member ?<a href="<?php echo base_url(); ?>main"> Join Now</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="page-bg">
</div>

<footer class="container-fluid bg-4 text-center">
    <p>&copy; 2017 Farm_Hands.  &middot; <a href="#">About</a> &middot; <a href="#">Blog</a> &middot; <a href="#">Farms</a> &middot; <a href="#">Privacy Policy</a> &middot; <a href="#">Terms</a></p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>