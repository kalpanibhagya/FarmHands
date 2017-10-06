<!DOCTYPE html>
<html lang="en">
<head>
    <title>Organic Farming</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-default navbar navbar-inverse">
        <div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Farm_Hands</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Farms</a></li>
                    <li><a href="#">About us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
<section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-intervel="2000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="<?php echo base_url(); ?>assets/images/2.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 style="font-size: 400%">Farm_Hands</h1>
                        <p style="font-size: 200%">Organic Farming Volunteering Community Sri Lanka</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Get Started</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="<?php echo base_url(); ?>assets/images/3.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 style="font-size: 400%">Farm_Hands</h1>
                        <p style="font-size: 200%">Organic Farming Volunteering Community Sri Lanka</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Get Started</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="<?php echo base_url(); ?>assets/images/4.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 style="font-size: 400%">Farm_Hands</h1>
                        <p style="font-size: 200%">Organic Farming Volunteering Community Sri Lanka</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Get Started</a></p>
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
    </div><!-- /.carousel -->
</section>
</body>
</html>