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
            height:611px;
            background-size:cover;
            background-position: center center;
        }
        .bg-4 {
            background-color: #2f2f2f; /* Black Gray */
            color: #fff;
        }
        .marketing .col-lg-4 {
            margin-bottom: 20px;
            text-align: center;
        }
        .marketing h2 {
            font-weight: normal;
        }
        .marketing .col-lg-4 p {
            margin-right: 10px;
            margin-left: 10px;
        }


        /* Featurettes
        ------------------------- */

        .featurette-divider {
            margin: 80px 0; /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        .featurette-heading {
            font-weight: 300;
            line-height: 1;
            letter-spacing: -1px;
        }

        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
/*
        .bg-grey {
            background-color: #f6f6f6;
        }
*/
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
                    <li><a href="#about">About</a></li>
                    <li><a href="#getstarted">Getting Started</a></li>
                    <li><a href="#">Farms</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <form class="navbar-form navbar-right" action="<?php echo base_url()?>main/login_validation" method="post">
                    <div class="form-group"><input type="text" class="form-control" name="username" placeholder="Username"></div>
                    <div class="form-group"><input type="password" class="form-control" name="password" placeholder="Password"></div>
                    <input type="submit" class="btn btn-primary" name="Login" value="Login">
                    <a href="#" style="font-size: small"> Forgot password?</a><?php echo $this->session->flashdata('error'); ?><span class="text-danger"><?php echo form_error('username')?></span><span class="text-danger"><?php echo form_error('password')?></span>
                </form>
            </div>
        </div>
</header>

<section style="margin-top: 51px;background-color: black">
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
                    <h1 style="font-size: xx-large">Farm_Hands</h1>
                    <p style="font-size: large">Web Portal to make a Organic Farming Volunteering Community Sri Lanka</p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>main" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('<?php echo base_url(); ?>assets/images/4.jpg')">
            <div class="container">
                <div class="carousel-caption">
                    <h1 style="font-size: xx-large">Farm_Hands</h1>
                    <p style="font-size: large">Web Portal to make a Organic Farming Volunteering Community Sri Lanka</p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>main" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('<?php echo base_url(); ?>assets/images/rice.jpg')">
            <div class="container">
                <div class="carousel-caption">
                    <h1 style="font-size: xx-large">Farm_Hands</h1>
                    <p style="font-size: large">Web Portal to make a Organic Farming Volunteering Community Sri Lanka</p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>main" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('<?php echo base_url(); ?>assets/images/3.jpg')">
            <div class="container">
                <div class="carousel-caption">
                    <h1 style="font-size: xx-large">Farm_Hands</h1>
                    <p style="font-size: large">Web Portal to make a Organic Farming Volunteering Community Sri Lanka</p>
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
    <br/>

    <div class="container marketing">
        <div id="about">
        <div class="row featurette" style="margin-top: 30px">
            <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="<?php echo base_url(); ?>assets/images/about_farm_hands.jpg" alt="Generic placeholder image">
            </div>
        </div>
        </div>
        <hr class="featurette-divider">

        <div id="getstarted" class="row">
            <h1 style="color: white;font-weight: bolder;margin-bottom: 30px" class="text-center">Want to volunteer for the orgranic farms and learn new thing?</h1>
            <div class="col-lg-4">
                <img class="img-circle" src="<?php echo base_url(); ?>assets/images/volunteer.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Step 1</h2>
                <p>Sign up as a Volunteer</p>
                <p><a class="btn btn-primary" href="<?php echo base_url(); ?>main" role="button">Sign up &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="<?php echo base_url(); ?>assets/images/farm.png" alt="Generic placeholder image" width="140" height="140">
                <h2>Step 2</h2>
                <p>Join an event and find new friends</p>
                <p><a class="btn btn-primary" href="#" role="button">Events &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="<?php echo base_url(); ?>assets/images/suitcase.png" alt="Generic placeholder image" width="140" height="140">
                <h2>Step 3</h2>
                <p>Find your host, travel and enjoy!!</p>
                <p><a class="btn btn-primary" href="#" role="button">Hosts &raquo;</a></p>
            </div>


            <h1 style="color: white;font-weight: bolder;margin-bottom: 30px" class="text-center">Want to volunteer for the orgranic farms and learn new thing?</h1>
            <div class="col-lg-4">
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-primary" href="#" role="button">Sign up as a Farmer &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div>

        <hr class="featurette-divider">
    </div>

    <!-- Container (Contact Section) -->


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
                <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
                <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
                <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
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
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>&copy; 2017 Farm_Hands.  &middot; <a href="<?php echo base_url();?>About">About</a> &middot; <a href="#">Blog</a> &middot; <a href="#">Farms</a> &middot; <a href="#">Privacy Policy</a> &middot; <a href="#">Terms</a></p>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>