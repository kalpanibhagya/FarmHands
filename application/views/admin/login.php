<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bg-4 {
            background-color: #2f2f2f; /* Black Gray */
            color: #fff;
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

<body style="background-color: lightgrey">

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
                        <form method="post" action="<?php echo base_url()?>Admin/login_validation">
                            <div class="block" align="center" style="margin-top: 10px">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control" name="email" autofocus="autofocus">
                                    <span class="text-danger"><?php echo form_error('email')?></span>
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
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="container-fluid bg-4 text-center">
    <a class="up-arrow" href="#myCarousel" data-toggle="tooltip" title="Back to top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br/>
    <div id="contact" class="container-fluid">
        <h2 class="text-center">CONTACT</h2>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Colombo, Sri Lanka</p>
                <p><span class="glyphicon glyphicon-phone"></span> 011 1515151</p>
                <p><span class="glyphicon glyphicon-envelope"></span> farmhands@gmail.com</p>
                <div class="row">
                    <div class="col-sm-12">
                        <div>
                            <a href="https://twitter.com">
                                <img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter.png" width="35" height="35" />
                            </a>
                            <a href="https://pinterest.com">
                                <img title="Pinterest" alt="Pinterest" src="https://socialmediawidgets.files.wordpress.com/2014/03/13_pinterest.png" width="35" height="35" />
                            </a>
                            <a href="https://facebook.com">
                                <img title="Facebook" alt="Facebook" src="https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook.png" width="35" height="35" />
                            </a>
                            <a href="https://instagram.com">
                                <img title="Instagram" alt="Instagram" src="https://socialmediawidgets.files.wordpress.com/2014/03/10_instagram.png" width="35" height="35" />
                            </a>
                            <a href="https://google.com">
                                <img title="Google +" alt="G+" src="<?php echo base_url(); ?>assets/images/google-plus.png" width="35" height="35" />
                            </a>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
            <div class="col-sm-7 slideanim">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-primary pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
            <br/>
        </div>
    </div>
    <p>&copy; 2017 Farm_Hands.  &middot; <a href="<?php echo base_url();?>About">About</a> &middot; <a href="#">Blog</a> &middot; <a href="#">Farms</a> &middot; <a href="#">Privacy Policy</a> &middot; <a href="#">Terms</a></p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>