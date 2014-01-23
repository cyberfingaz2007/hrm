<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<?php echo Form::open('company/create'); ?>
				<h1>Create Company</h1>
				<label>Name:</label>
				<input type="text" name="name" />
				<label>Description</label>
				<input type="text" name="description" />
				<label>Address:</label>
				<input type="text" name="address" />
				<label>City:</label>
				<input type="text" name="city" />
				<label>State:</label>
				<input type="text" name="state" />
				<label>Country:</label>
				<input type="text" name="country" />
				<br />
				<input type="submit" name="company_create" value="Create" />
			<?php echo Form::close(); ?>
		</div>
	</div>
</div>
