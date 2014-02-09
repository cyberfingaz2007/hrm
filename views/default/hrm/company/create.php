<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php echo Form::open('hrm/company/create'); ?>
				<h1>Create Company</h1>
				<?php include 'form.php'; ?>
				<br />
				<input type="submit" name="company_create" value="Create" />
			<?php echo Form::close(); ?>
		</div>
	</div>
</div>
