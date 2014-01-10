<?php

class Model_Company extends ORM {

    public $_table_name = "company";
    public $_table_name_plural = false;
    public $_primary_key = "id";

    public $_belongs_to = array();

    public $_has_one = array();
    
    public $_has_many = array();

}
