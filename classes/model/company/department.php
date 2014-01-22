<?php

class Model_Company_Department extends ORM {

    /**
    * @var Long $id not null autoincrement primary key
    * @var String $name not null
    * @var String $description not null
    * @var Company $company_id not null
    * @var ArrayList<Employee> $employees null
    */

    // Table description
    public $_table_name = 'department';
    public $_table_name_plural = false;
    public $_primary_key = 'id';
    
    // Table relations
    
    public $_belongs_to = array(
        'company' => array(
            'model' => 'company',
            'foreign_key' => 'company_id'
        ),
    );
    
    public $_has_one = array();
    
    public $_has_many = array(
        'employees' => array(
            'model' => 'employee',
            'foreign_key' => 'department_id'
        ),
    );

}
