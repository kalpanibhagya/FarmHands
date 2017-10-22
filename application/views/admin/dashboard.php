<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'/assets/css/bootstrap.min.css'; ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url().'/assets/css/sb-admin.css'; ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url().'/assets/css/plugins/morris.css'; ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url().'/assets/font-awesome/css/font-awesome.min.css'; ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">Farm_Hands</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu alert-dropdown">
                    <li>
                        <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">View All</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrator <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?php echo base_url();?>main/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color: black">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="#">Farm Licenses</a>
                </li>
                <li>
                    <a href="#">Volunteer House License</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Forum</a>
                </li>
                <li>
                    <a href="#">Farms</a>
                </li>
                <li>
                    <a href="#">Products</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-md-10" style="margin-top: 10px">
                    <div class="panel panel-green">
                        <div class="panel-body">
                            <h2 style="color: #3c763d">Oslo Farm, Anuradhapura</h2>
                            <p>2 days of volunteering. bla bla bla bla blablablaaa</p>
                        </div>
                        <div class="panel-footer" align="right">
                            <a href="#">like</a>
                            <a href="#">dislike</a>
                            <a href="#">comment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="panel panel-green">
                        <div class="panel-body">
                            <h2 style="color: #3c763d">Oslo Farm, Anuradhapura</h2>
                            <p>2 days of volunteering. bla bla bla bla blablablaaa</p>
                        </div>
                        <div class="panel-footer" align="right">
                            <a href="#">like</a>
                            <a href="#">dislike</a>
                            <a href="#">comment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="panel panel-green">
                        <div class="panel-body">
                            <h2 style="color: #3c763d">Oslo Farm, Anuradhapura</h2>
                            <p>2 days of volunteering. bla bla bla bla blablablaaa</p>
                        </div>
                        <div class="panel-footer" align="right">
                            <a href="#">like</a>
                            <a href="#">dislike</a>
                            <a href="#">comment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="panel panel-green">
                        <div class="panel-body">
                            <h2 style="color: #3c763d">Oslo Farm, Anuradhapura</h2>
                            <p>2 days of volunteering. bla bla bla bla blablablaaa</p>
                        </div>
                        <div class="panel-footer" align="right">
                            <a href="#">like</a>
                            <a href="#">dislike</a>
                            <a href="#">comment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="panel panel-green">
                        <div class="panel-body">
                            <h2 style="color: #3c763d">Oslo Farm, Anuradhapura</h2>
                            <p>2 days of volunteering. bla bla bla bla blablablaaa</p>
                        </div>
                        <div class="panel-footer" align="right">
                            <a href="#">like</a>
                            <a href="#">dislike</a>
                            <a href="#">comment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="panel panel-green">
                        <div class="panel-body">
                            <h2 style="color: #3c763d">Oslo Farm, Anuradhapura</h2>
                            <p>2 days of volunteering. bla bla bla bla blablablaaa</p>
                        </div>
                        <div class="panel-footer" align="right">
                            <a href="#">like</a>
                            <a href="#">dislike</a>
                            <a href="#">comment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->


</div>
<!-- /#wrapper -->

<footer class="container-fluid bg-4 text-center">
    <a class="up-arrow" href="#form" data-toggle="tooltip" title="Back to top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br/>
    <p>&copy; 2017 Farm_Hands.  &middot; <a href="#">About</a> &middot; <a href="#">Blog</a> &middot; <a href="#">Farms</a> &middot; <a href="#">Privacy Policy</a> &middot; <a href="#">Terms</a></p>
</footer>
<!-- jQuery -->
<script src="<?php echo base_url().'/assets/js/jquery.js'; ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url().'/assets/js/bootstrap.min.js'; ?>"></script>

<!-- Morris Charts JavaScript -->
<script src="<?php echo base_url().'/assets/js/plugins/morris/raphael.min.js'; ?>"></script>
<script src="<?php echo base_url().'/assets/js/plugins/morris/morris.min.js'; ?>"></script>
<script src="<?php echo base_url().'/assets/js/plugins/morris/morris-data.js'; ?>"></script>

</body>

</html>
