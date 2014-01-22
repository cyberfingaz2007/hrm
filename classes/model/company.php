<?php

class Model_Company extends ORM {

	/**
	* @var Long $id not null autoincrement primary key
	* @var String $name not null
	* @var Address $address_id not null
	*/

	// Table description
	public $_table_name = 'company';
	public $_table_name_plural = false;
	public $_primary_key = 'id';
	
	// Table relations
	public $_belongs_to = array(
		//sede
		'head' => array(
			'model' => 'company',
			'foreign_key' => 'company_id',
		),
	);
	
	public $_has_one = array();
	
	public $_has_many = array(
		//filiais
		'branches' => array(
			'model' => 'company',
			'foreign_key' => 'company_id',
		),
	);

}
