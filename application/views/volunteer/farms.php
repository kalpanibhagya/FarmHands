<link href="<?php echo base_url('assets/crud-assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/crud-assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/crud-assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">

<script src="<?php echo base_url('assets/crud-assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/crud-assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/crud-assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/crud-assets/datatables/js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/crud-assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.js"></script>

<div class = "row">
    <br />
    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Farm Name</th>
            <th>Location</th>
            <th>Description</th>
            <th>Farmer ID</th>
            <th style="width:189px;">Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>


    </table>
</div>


</div>


<script type="text/javascript">

    var save_method; //for save method string
    var table;
    $(document).ready(function() {
        table = $('#table').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('Farms/ajax_list_view_all')?>",
                "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [ -1 ], //last column
                    "orderable": false, //set not orderable
                },
            ],

        });
    });
    //view person
    function view_person(id)
    {
        $.ajax({
            url : "<?php echo site_url('Farms/list_by_id')?>/" + id,
            type: "GET",
            success: function(result)
            {
                $('#dynamicPart').empty().html(result).fadeIn('slow');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
    }


</script>
</body>
</html>