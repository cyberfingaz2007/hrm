<?php

class Model_Employee extends People {

	/**
    * @var Long $id not null autoincrement primary key
    * @var Salary $salary not null
    * @var Company $company_id not null
    * @var Company_Position $company_position_id not null
    * @var Company_Function $company_function_id not null
    * @var DateTime $date_create not null
    * @var DateTime $date_admission not null
    * @var DateTime $date_demission not null
    */
    
    // Table description
    public $_table_name = 'people';
    public $_table_name_plural = false;
    public $_primary_key = 'id';
    
    // Table relations
    
    public $_belongs_to = array(
    	'people' => array(
    		'model' => 'people',
    		'foreign_key' => 'people_id'
    	),
    	'company_position' => array(
    		'model' => 'company_position',
    		'foreign_key' => 'company_position_id'
    	),
    	'company_function' => array(
    		'model' => 'company_function',
    		'foreign_key' => 'company_function_id'
    	),
    );
    
    public $_has_one = array();
    
    public $_has_many = array();

}
