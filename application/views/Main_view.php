<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body style="background-image: url('<?php echo base_url(); ?>assets/images/background.jpg')">

<nav class="navbar navbar-default navbar navbar-inverse">
    <div>
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">Farm_Hands</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Blog</a></li>
                <li><a href="#">Farms</a></li>
                <li><a href="#">About us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>main/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Register as a Member</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php echo base_url()?>main/form_validation">
                            <?php
                            if ($this->uri->segment(2) == 'inserted'){
                                echo '<div class="alert alert-success" role="alert">Data Inserted Successfully</div>';
                            }
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
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password">
                                <span class="text-danger"><?php echo form_error('confirm_password')?></span>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-info" name="Submit" value="Submit">
                                <br/>
                                <a href="login.php">Already have an account?</a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>