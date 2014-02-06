<?php

class Model_People extends ORM {

	/**
	 * @var Long $id not null autoincrement primary key
	 * @var String $primary_name not null
	 * @var String $last_name not null
	 * @var Array<Attribute> $attributes null
	 */

	// Table description
	public $_table_name = 'people';
	public $_table_name_plural = false;
	public $_primary_key = 'id';
	
	// Table relations
	public $_belongs_to = array(
		'user' => array(
			'model' => 'user',
			'foreign_key' => 'id'
		),
	);
	
	public $_has_one = array();
	public $_has_many = array();

}
