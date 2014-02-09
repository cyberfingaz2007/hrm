<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php echo Form::open('hrm/company/update'); ?>
				<h1>Update Company</h1>
				<?php include 'form.php'; ?>
				<br />
				<input type="submit" name="company_update" value="Update" />
			<?php echo Form::close(); ?>
		</div>
	</div>
</div>
