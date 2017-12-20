<link href="<?php echo base_url('assets/crud-assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/crud-assets/datatables/css/dataTables.bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/crud-assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') ?>"
      rel="stylesheet">

<script src="<?php echo base_url('assets/crud-assets/jquery/jquery-2.1.4.min.js') ?>"></script>
<script src="<?php echo base_url('assets/crud-assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/crud-assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/crud-assets/datatables/js/dataTables.bootstrap.js') ?>"></script>
<script src="<?php echo base_url('assets/crud-assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js') ?>"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.js"></script>


<div class="row">
    <div class="inline">
        <a class="btn btn-success" href="<?php echo base_url(); ?>Farmer/addFarm"><i class="glyphicon glyphicon-send"></i> Add new Farm</a>
    </div>
    <br/>
    <br/>
    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Farm ID</th>
            <th>Farm Name</th>
            <th>Location</th>
            <th>Description</th>
            <th style="width:189px;">Action</th>
        </tr>
        </thead>
        <tbody>
        <td>
            <?php
            foreach ($farms as $farm){
                echo "<tr>";
                echo "<td>";
                echo $farm->id;
                echo "</td>";
                echo "<td>";
                echo $farm->farm_name;
                echo "</td>";
                /*echo "<td>";
                echo $job->job_category;
                echo "</td>";*/
                echo "<td>";
                echo $farm->location;
                echo "</td>";
                echo "<td>";
                echo $farm->description;
                echo "</td>";
                echo "<td>"; ?>

                <a href="<?php echo base_url() ?>Farms/deleteFarm/<?php echo $farm->id ?>" title="Delete"
                   data-confirm="Are you sure?" data-method="post">
                    <!--span class="glyphicon glyphicon-remove"></span--><button type="submit" class="btn btn-danger">DELETE</button></a>

                <?php echo "</td>";
                echo "</tr>";

            }



            ?>


        </td>
        </tbody>


    </table>

</div>




</body>
</html>


