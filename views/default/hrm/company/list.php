			<?php foreach($companies as $company): ?>
			<div class="company">
				<div class="name"><?php echo Html::anchor('hrm/company/view'.$company->id, $company->name); ?></div>
			</div>
			<?php endforeach; ?>
			<?php //TODO: include pagination ?>
