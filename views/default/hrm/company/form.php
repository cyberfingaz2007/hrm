						<label><?php echo __('Name'); ?>:</label>
						<input type="text" name="name" value="<?php echo $company->name; ?>" />
						<label><?php echo __('Address'); ?>:</label>
						<input type="text" name="address['street']"  value="<?php echo $company->address->street; ?>" />
						<label><?php echo __('Number'); ?>:</label>
						<input type="text" name="address['number']"  value="<?php echo $company->address->number; ?>" />
						<label><?php echo __('City'); ?>:</label>
						<input type="text" name="address['city_id']"  value="<?php echo $company->address->city->id; ?>" />
						<label><?php echo __('State'); ?>:</label>
						<input type="text" name="address['state_id']"  value="<?php echo $company->address->state->id; ?>" />
						<label><?php echo __('Zipcode'); ?>:</label>
						<input type="text" name="address['zipcode']"  value="<?php echo $company->address->zipcode->id; ?>" />
						<label><?php echo __('Country'); ?>:</label>
						<input type="text" name="address['country']" value="<?php echo $company->address->country->id; ?>" />
