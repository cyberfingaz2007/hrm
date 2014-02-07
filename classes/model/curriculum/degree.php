<?php

class Model_Curriculum_Degree extends ORM {

	/**
	 * @var Long $id not null autoincrement primary_key
	 * @var Curriculum $curriculum not null
	 * @var Degree $degree not null
	 * @var School $school not null
	 * @var int $year_start not null
	 * @var int $year_finish not null
	 */

	public $_table_name = 'curriculum_degree';
	
	public $_belongs_to = array(
		'curriculum' => array(
			'model' => 'curriculum',
			'foreign_key' => 'curriculum_id',
		),
		'degree' => array(
			'model' => 'degree',
			'foreign_key' => 'degree_id',
		),
	);

}
