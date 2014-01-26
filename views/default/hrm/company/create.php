<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php echo Form::open('hrm/company/create'); ?>
				<h1>Create Company</h1>
				<label><?php echo __('Name'); ?>:</label>
				<input type="text" name="name" />
				<label><?php echo __('Address'); ?>:</label>
				<input type="text" name="address['street']" />
				<label><?php echo __('Number'); ?>:</label>
				<input type="text" name="address['number']" />
				<label><?php echo __('City'); ?>:</label>
				<input type="text" name="address['city']" />
				<label><?php echo __('State'); ?>:</label>
				<input type="text" name="address['state']" />
				<label><?php echo __('Zipcode'); ?>:</label>
				<input type="text" name="address['zipcode']" />
				<label><?php echo __('Country'); ?>:</label>
				<input type="text" name="address['country']" />
				<br />
				<input type="submit" name="company_create" value="Create" />
			<?php echo Form::close(); ?>
		</div>
	</div>
</div>
