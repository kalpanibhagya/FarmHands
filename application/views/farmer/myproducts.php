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
    <button class="btn btn-success" onclick="add_product()" title="Add new Product"><i class="glyphicon glyphicon-plus"></i> Add New Product</button>
    <br />
    <br />
    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
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
    var save_type;

    function display_products()
    {
        var table = $('#table').DataTable();
        table.destroy();

        $(document).ready(function() {
            table = $('#table').DataTable({

                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.

                // Load data for the table's content from an Ajax source
                "ajax": {

                    "url":  "<?php echo site_url('Products/ajax_list')?>" ,
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
    }

    function edit_product(product_name)
    {
        save_method = 'update';
        save_type = 'edit';
        $('#form_product')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('Products/ajax_edit/')?>/" + product_name,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {

                $('[name="product_name"]').val(data.degree);
                $('[name="quantity"]').val(data.university);
                $('[name="price"]').val(data.degree_type);

                $('#modal_form_product').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Product Info'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function add_product()
    {
        save_method = 'add';
        save_type = 'add';
        $('#form_product')[0].reset(); // reset form on modals
        $('#modal_form_product').modal('show'); // show bootstrap modal
        $('.modal-title').text('Add New Product'); // Set Title to Bootstrap modal title
    }

    function save()
    {
        var url;
        if (save_type == 'add')
        {
            url = "<?php echo site_url('Products/ajax_add')?>";
        }
        else if (save_type == 'edit')
        {
            url = "<?php echo site_url('Products/ajax_update')?>";
        }
        // ajax adding data to database
        $.ajax({
            url : url,
            type: "POST",
            data: $('#form_'.concat(save_type)).serializeArray(),
            dataType: "JSON",

            success: function(data)
            {
                //if success close modal and reload ajax table
                $('#modal_form_'.concat(save_type)).modal('hide');
                reload_table();
                swal(
                    'Good job!',
                    'Data has been save!',
                    'success'
                )

            },
            error: function (jqXHR, textStatus, errorThrown)
            {

                alert('Error adding / update data');

            }
        });
    }
</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form_product" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Edit Farmer</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form_product" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Product Name</label>
                            <div class="col-md-9">
                                <input name="product_name" placeholder="Product Name" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Quantity</label>
                            <div class="col-md-9">
                                <input name="quantity" placeholder="Quantity" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Price</label>
                            <div class="col-md-9">
                                <input type="text" name="price" placeholder="Price" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
</body>
</html>