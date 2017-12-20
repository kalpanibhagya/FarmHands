<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  

  <title>Farms</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

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

<head>
    <?php include 'common/head.php' ?>
</head>
<body>
  <style >
    body{
      font-size:15px;
    }
  </style>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url();?>Farms/index"style="font-size:14px;">View</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>Farms/register"style="font-size:14px;">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo base_url();?>Farms/search_farm"style="font-size:14px;">Retrieve</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>Farms/update_farm"style="font-size:14px;">Update</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>Farms/remove"style="font-size:14px;">Delete</a>
                </li>
            </ul>
        </div>
    </div>
          </h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th style="font-size:20px;">Owner ID</th>
        <th style="font-size:20px;">Name</th>
        <th style="font-size:20px;">Location</th>
      </tr>
    </thead>
    <tbody>
    
	<?php	
	$this->load->database();
	$data = $this->db->query('SELECT owner_id, name, location FROM farms');
	
     foreach($data->result_array()  as $r): ?>
        <tr>
			<td><?php echo $r['owner_id']; ?></td>
      <td><?php echo $r['name']; ?></td>
			<td><?php echo $r['location']; ?></td>
		 </tr>
    <?php endforeach; ?>
	
	 
    </tbody>
  </table>
</div>

<?php include 'common/foot.php' ?>
</body>
</html>
