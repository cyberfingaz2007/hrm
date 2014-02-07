<?php

class Model_Curriculum_Deegre extends ORM {

	/**
	 * @var Long $id not null autoincrement primary key
	 * @var String $name not null
	 */
	 
	 // Table description
	 public $_table_name = 'curriculum_degree';
	 public $_table_name_plural = false;
	 public $_primary_key = 'id';
	 
	 public $_belongs_to = array();
	 
	 public $_has_one = array();
	 
	 public $_has_many = array(
	 	'curriculums' => array(
	 		'model' => 'curriculum',
	 		'foreign_key' => 'curriculum_degree_id'
	 	),
	 );

}
