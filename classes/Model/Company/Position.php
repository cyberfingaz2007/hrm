<?php

class Model_Company_Position extends ORM {

    public $_table_name = "company_position";
    public $_table_name_plural = false;
    public $_primary_key = "id";
    
    public $_belongs_to = array();
    
    public $_has_one = array();
    
    public $_has_many = array(
        "functions" => array(
            "model" => "Company_Function",
            "foreign_key" => "position_id"
        ),
    );

}
