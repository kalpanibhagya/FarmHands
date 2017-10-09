<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body style="background-image: url('<?php echo base_url(); ?>assets/images/background.jpg')">
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
                    <div class="form-group"><input type="text" class="form-control" name="username" placeholder="Username"></div>
                    <div class="form-group"><input type="password" class="form-control" name="password" placeholder="Password"></div>
                    <input type="submit" class="btn btn-primary" name="Login" value="Login">
                    <a href="#">Forgot password?</a><?php echo $this->session->flashdata('error'); ?><span class="text-danger"><?php echo form_error('username')?></span><span class="text-danger"><?php echo form_error('password')?></span>
                </form>
            </div>
        </div>
</header>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Login</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo base_url()?>main/login_validation" method="post">
                            <?php
                            echo $this->session->flashdata('error');
                            ?>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username">
                                <span class="text-danger"><?php echo form_error('username')?></span>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                                <span class="text-danger"><?php echo form_error('password')?></span>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-info" name="Submit" value="Submit">
                                <br/>
                                <a href="forget.php">Forget password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </div>
</section>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>