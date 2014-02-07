<?php

class Model_Curriculum extends ORM {

	/**
	 * @var Long $id not null autoincrement primary key
	 * @var String $name not null
	 */

	public $_table_name = '';
	public $_table_name_plural = false;
	public $_primary_key = 'id';

	public $_belongs_to = array();
	
	public $_has_one = array();
	public $_has_many = array(
		'degree' => array(
			'model' => 'degree',
			'through' => 'curriculum_degree'
		),	
	);

}
