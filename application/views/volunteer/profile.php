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

<div class="row" style="margin-left: 20px;margin-right: 20px">
    <a class="glyphicon glyphicon-pencil" role="button" href="javascript:void(0)" onclick="edit_company_details()"></a>
    <h3 align="center" style="font-weight: bold">Profile</h3>
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>"/>
    </div>
    <div class="form-group">
        <label>First Name</label>
        <input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo $fname; ?>"/>
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo $lname; ?>"/>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="E-mail" value="<?php echo $email; ?>" readonly/>
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control" placeholder="Colombo, Sri Lanka" value="<?php echo $address; ?>"/>
    </div>
    <div class="form-group">
        <label>Contact Number</label>
        <input type="tel" name="telephone" class="form-control" placeholder="**********" value="<?php echo $telephone; ?>"/>
    </div>



</div>

<script type="text/javascript">

    var save_method; //for save method string
    var table;
    var save_type;
    $(document).ready(function() {
        table = $('#table').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('Company/ajax_list')?>",
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

    function edit_company()
    {
        save_method = 'update';
        save_type = 'company';
        $('#form_company')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('Company/ajax_edit_profile/')?>/" ,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {

                $('[name="username"]').val(data.username);
                //$('[name="logo"]').val(data.logo);

                $('#modal_form_company').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Username'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function edit_company_contact()
    {
        save_method = 'update';
        save_type = 'contact';
        $('#form_contact')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('Company/ajax_edit_profile/')?>/" ,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {

                $('[name="email"]').val(data.email);
                $('[name="address"]').val(data.address);
                $('[name="contact_no"]').val(data.contact_no);
                $('[name="linkedin"]').val(data.linkedin);
                $('[name="website"]').val(data.website);

                $('#modal_form_contact').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Contact Info'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function edit_company_details()
    {
        save_method = 'update';
        save_type = 'details';
        $('#form_details')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('Company/ajax_edit_profile/')?>/" ,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {

                $('[name="company_name"]').val(data.company_name);
                $('[name="register_no"]').val(data.register_no);
                $('[name="country"]').val(data.country);
                $('[name="type"]').val(data.type);
                $('[name="size"]').val(data.size);
                $('[name="hiring_status"]').val(data.hiring_status);
                $('[name="about"]').val(data.about);


                $('#modal_form_details').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Company Info'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function edit_contact_person()
    {
        save_method = 'update';
        save_type = 'person';
        $('#form_person')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('Company/ajax_edit_profile/')?>/" ,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {

                $('[name="cname"]').val(data.cname);
                $('[name="cemail"]').val(data.cemail);
                $('[name="ctelephone"]').val(data.ctelephone);

                $('#modal_form_person').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Contact Person Info'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function save()
    {
        var url;
        if (save_type == 'company')
        {
            url = "<?php echo site_url('Company/ajax_update_company_info')?>";
        }
        else if (save_type == 'contact')
        {
            url = "<?php echo site_url('Company/ajax_update_contact_info')?>";
        }
        else if (save_type == 'details')
        {
            url = "<?php echo site_url('Company/ajax_update_company_details')?>";
        }
        else if (save_type == 'person')
        {
            url = "<?php echo site_url('Company/ajax_update_contact_person')?>";
        }


        // ajax adding data to database
        $.ajax({
            url : url,
            type: "POST",
            data: $('#form_'.concat(save_type)).serialize(),
            dataType: "JSON",
            success: function(data)
            {
                //if success close modal and reload ajax table
                $('#modal_form_'.concat(save_type)).modal('hide');
                //reload_table();
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
<div class="modal fade" id="modal_form_company" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Company Info Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form_company" class="form-horizontal">
                    <input type="hidden" value="" name="company_id"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-9">
                                <input name="username" placeholder="full name" class="form-control" type="text">
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
<div class="modal fade" id="modal_form_contact" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Contact Details Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form_contact" class="form-horizontal">
                    <input type="hidden" value="" name="company_id"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Address</label>
                            <div class="col-md-9">
                                <input name="address" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Contact Number</label>
                            <div class="col-md-9">
                                <input name="contact_no"  class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Linked In</label>
                            <div class="col-md-9">
                                <input name="linkedin"  class="form-control" type="url">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Website</label>
                            <div class="col-md-9">
                                <input name="website"  class="form-control" type="url">
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
<div class="modal fade" id="modal_form_details" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Company Details Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form_details" class="form-horizontal">
                    <input type="hidden" value="" name="company_id"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Company Name</label>
                            <div class="col-md-9">
                                <input name="company_name" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Company Registration No.</label>
                            <div class="col-md-9">
                                <input name="register_no" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Country</label>
                            <div class="col-md-9">
                                <input name="country" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Company Type</label>
                            <div class="col-md-9">
                                <input name="type" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Company Size</label>
                            <div class="col-md-9">
                                <input name="size" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Currently Hiring?</label>
                            <div class="col-md-9">
                                <input name="hiring_status" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="about" required="" rows="5"></textarea>
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
<div class="modal fade" id="modal_form_person" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Contact Person Details Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form_person" class="form-horizontal">
                    <input type="hidden" value="" name="company_id"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-9">
                                <input name="cname" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Contact Number</label>
                            <div class="col-md-9">
                                <input name="ctelephone" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Email</label>
                            <div class="col-md-9">
                                <input name="cemail" class="form-control" type="email">
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


