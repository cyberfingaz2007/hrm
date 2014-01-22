<?php

class Model_Salary extends ORM {

	/**
    * @var Long $id not null autoincrement primary key
    * @var Company $company_id not null
    * @var Company_Position $position_id not null
    * @var Company_Function $function_id not null
    * @var Decimal $value not null
    */
    
    // Table description
    public $_table_name = 'salary';
    public $_table_name_plural = false;
    public $_primary_key = 'id';
    
    // Table relations
    
    public $_belongs_to = array();
    
    public $_has_one = array();
    
    public $_has_many = array();

}
