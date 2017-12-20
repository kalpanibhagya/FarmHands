<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Farms Create</title>
    <?php include 'common/head.php' ?>
</head>

 <h2 style="text-align: center;">
<p>
<span style="color:#0000FF;">
<span style="font-size: 40px;">
<span style="font-family: arial,helvetica,sans-serif;">
Farm Details
</span>
</span>
</span>
</p>


<body>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo base_url();?>Farms/index">View</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url();?>Farms/register">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo base_url();?>Farms/search_farm">Retrieve</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>Farms/update_farm">Update</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>Farms/remove">Delete</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="padding" style="margin: 30px;">
                <form action="<?php echo site_url('Farms/register'); ?>" method="post">
                    <div class="form-group">
                        <label for="inputIndexNo" class="bmd-label-floating">Owner ID</label>
                        <input type="text" class="form-control" id="inputIndexNo" name="owner_id"
                               value="<?php if (isset($owner_id)) echo $owner_id; ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputFirstName" class="bmd-label-floating">Name</label>
                        <input type="text" class="form-control" id="inputFirstName" name="name"
                               value="<?php if (isset($name)) echo $name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputLastName" class="bmd-label-floating">Location</label>
                        <input type="text" class="form-control" id="inputLastName" name="location"
                               value="<?php if (isset($location)) echo $location; ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-raised">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    $message = $this->session->flashdata('person_create_msg');
    if (isset($message)) {
        echo $message;
    }
    ?>
</div>

<?php include 'common/foot.php' ?>
</body>
</html>