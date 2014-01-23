<?php

class Model_Employee_Salary extends ORM {

	/**
	* @var Long $id not null autoincrement primary key
	* @var Employee $employee_id not null
	* @var Salary $salary_id not null
	* @var Decimal $salary_liquid not null
	*/

	public $_table_name = 'employee_salary';
	public $_table_name_plural = false;
	public $_primary_key = 'id';
	
	// Table relations
    
    public $_belongs_to = array();
    
    public $_has_one = array();
    
    public $_has_many = array();

}
