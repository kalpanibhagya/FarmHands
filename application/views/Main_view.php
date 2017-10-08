<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-default navbar navbar-inverse">
    <div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">Farm_Hands</a>
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
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
    <div class="container">
        <h3 align="center">Registration</h3>
        <form action="<?php echo base_url()?>main/form_validation" method="post">
            <?php
                if ($this->uri->segment(2) == 'inserted'){
                    echo '<p class="text-success">Data Inserted</p>';
                }
            ?>
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
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="confirm_password">
                <span class="text-danger"><?php echo form_error('confirm_password')?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info" name="Submit" value="Submit">
            </div>
        </form>
    </div>
    <div class="container">
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>