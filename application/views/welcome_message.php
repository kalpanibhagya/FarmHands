<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Farm_Hands</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .carousel-inner .item{
            height:550px;
            background-size:cover;
            background-position: center center;
        }

    </style>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



</head>
<body>
<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="font-size: xx-large;font-weight: bolder" href="<?php echo base_url(); ?>" >Farm_Hands</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" style="font-size: large">
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Farms</a></li>
                    <li><a href="<?php echo base_url(); ?>about">About us</a></li>
                </ul>
                <form class="navbar-form navbar-right" action="<?php echo base_url()?>main/login_validation" method="post">
                    <input type="text" style="height: 30px" class="form-control" placeholder="Username">
                    <input type="text" style="height: 30px" class="form-control" placeholder="Password">
                    <input type="submit" class="btn btn-primary" name="Login" value="Login" style="height: 30px"><br />
                    <a href="forget.php">Forgot password?</a><?php echo $this->session->flashdata('error'); ?><span class="text-danger"><?php echo form_error('username')?></span><span class="text-danger"><?php echo form_error('password')?></span>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
</header>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active" style="background-image: url('<?php echo base_url(); ?>assets/images/farm.jpg')">
            <div class="container">
                <div class="carousel-caption">
                    <h1 style="font-size: 500%">Farm_Hands</h1>
                    <p style="font-size: 170%">Web Portal to make a Organic Farming Volunteering Community Sri Lanka</p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>main" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('<?php echo base_url(); ?>assets/images/4.jpg')">
            <div class="container">
                <div class="carousel-caption">
                    <h1 style="font-size: 500%">Farm_Hands</h1>
                    <p style="font-size: 170%">Web Portal to make a Organic Farming Volunteering Community Sri Lanka</p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>main" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('<?php echo base_url(); ?>assets/images/rice.jpg')">
            <div class="container">
                <div class="carousel-caption">
                    <h1 style="font-size: 500%">Farm_Hands</h1>
                    <p style="font-size: 170%">Web Portal to make a Organic Farming Volunteering Community Sri Lanka</p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>main" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('<?php echo base_url(); ?>assets/images/3.jpg')">
            <div class="container">
                <div class="carousel-caption">
                    <h1 style="font-size: 500%">Farm_Hands</h1>
                    <p style="font-size: 170%">Web Portal to make a Organic Farming Volunteering Community Sri Lanka</p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>main" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container">
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>