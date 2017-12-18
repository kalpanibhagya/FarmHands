<div class="container">
	<div class="single-page-artical">
		<h2><?=$title;?></h2>
		<?php echo validation_errors();?>
		<?php echo form_open_multipart('index.php/categories/create'); ?>
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="Name" placeholder="Enter Name">
			</div>
				<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>			
</div>
	