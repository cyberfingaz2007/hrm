<?php

class Model_Company_Function extends ORM {

    public $_table_name = "company_function";
    public $_table_name_plural = false;
    public $_primary_key = "id";
    
    public $_belongs_to = array(
        "position" => array(
            "model" => "Company_Position",
            "foreign_key" => "position_id"
        ),
    );
    
    public $_has_one = array();
    
    public $_has_many = array();

}
