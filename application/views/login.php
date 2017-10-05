<html>
<head>
    <title>Login page</title>
    <!--boostrap link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>

<body>
<div class="container">
    <h3 align="center">Login</h3>
    <form action="<?php echo base_url()?>main/login_validation" method="post">
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
            <input type="submit" class="btn btn-info" name="Submit" value="Submit">
            <?php
             echo $this->session->flashdata('error');
            ?>
        </div>
    </form>
</div>
</body>
</html>