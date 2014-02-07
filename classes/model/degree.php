<?php

class Model_Deegre extends ORM {

	/**
	 * @var Long $id not null autoincrement primary key
	 * @var String $name not null
	 */
	 
	 // Table description
	 public $_table_name = 'degree';
	 public $_table_name_plural = false;
	 public $_primary_key = 'id';
	 
	 public $_belongs_to = array();
	 
	 public $_has_one = array();
	 
	 public $_has_many = array(
	 	'curriculum_degrees' => array(
	 		'model' => 'curriculum_degree',
	 		'foreign_key' => 'degree_id'
	 	),
	 );

}
