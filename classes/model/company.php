<?php

class Model_Company extends ORM {

	/**
	* @var Long $id not null autoincrement primary key
	* @var String $name not null
	* @var Address $address_id not null
	*/

	public $_table_name = 'company';
	public $_table_name_plural = false;
	public $_primary_key = 'id';
	
	public $_belongs_to = array();
	public $_has_one = array();
	public $_has_many = array();

}
