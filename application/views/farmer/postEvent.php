<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>M-Ploy</title>
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="background-color: lightgrey">
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>Welcome/Company_main">M-Ploy</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-right">
                    <a class="btn btn-success" href="<?php echo base_url(); ?>Farmer/enter"
                       role="button">Dashboard</a>
                    <a class="btn btn-success" href="<?php echo base_url(); ?>Farmer/logout" role="button">Logout</a>
                </form>
            </div>
        </div>
    </nav>

</header>

<section style="margin-top: 50px">
    <div class="alert alert-success text-center" role="alert">Post your Event details here.</div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <form method="post" action="<?php echo base_url() ?>Company/job_validation">

                            <div class="floating-box">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Job title</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="Eg:- Software Engineer" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="salary">Contract Type</label>
                                        <select class="form-control" id="type" name="type">
                                            <option value="full-time">Full Time</option>
                                            <option value="part-time">Part Time</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="registerNo">Location</label>
                                        <textarea class="form-control" id="location" name="location" rows="3"
                                                  required=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="number">Required no. of Employees</label>
                                        <input type="number" class="form-control" id="number" name="number"
                                               required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="from">Application Duration</label>
                                        <input type="date" class="form-control" id="from" name="from"
                                               required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="to" name="to" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="floating-box">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="salary">Salary</label>
                                        <input type="number" step="0.01" class="form-control" id="salary"
                                               name="salary" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description"
                                                  required="" rows="10"></textarea>
                                    </div>
                                    <div class="form-group" align="right">
                                        <button type="submit" class="btn btn-success">Save</button>
                                        <a type="button" class="btn btn-default" role="button">Reset</a>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function selectIngredient(select) {
            var option = select.options[select.selectedIndex];
            var ul = select.parentNode.getElementsByTagName('ul')[0];

            var choices = ul.getElementsByTagName('input');
            for (var i = 0; i < choices.length; i++)
                if (choices[i].value == option.value)
                    return;

            var li = document.createElement('li');
            var input = document.createElement('input');
            var text = document.createTextNode(option.firstChild.data);

            input.type = 'hidden';
            input.name = 'ingredients[]';
            input.value = option.value;

            li.appendChild(input);
            li.appendChild(text);
            li.setAttribute('onclick', 'this.parentNode.removeChild(this);');

            ul.appendChild(li);
        }
    </script>
    <script>
        function show(aval) {
            if (aval == "intern") {
                hiddenDiv.style.display = 'block';
                Form.fileURL.focus();
            }
            else {
                hiddenDiv.style.display = 'none';
            }
        }
    </script>
    <form>
</section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</body>
</html>