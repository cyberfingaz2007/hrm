<?php

class Model_Company_Position extends ORM {

	/**
    * @var Long $id not null autoincrement primary key
    * @var String $name not null
    * @var String $description not null
    */
    
    // Table description
    public $_table_name = 'company_position';
    public $_table_name_plural = false;
    public $_primary_key = 'id';
    
    // Table relations
    
    public $_belongs_to = array();
    
    public $_has_one = array();
    
    public $_has_many = array();

}
