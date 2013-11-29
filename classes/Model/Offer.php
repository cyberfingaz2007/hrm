<?php

class Model_Offer extends ORM {

    public $_table_name = 'offer';
    public $_table_name_plural = FALSE;
    public $_primary_key = 'id';
    
    public $_belongs_to = array();
    public $_has_one = array();
    public $_has_many = array();

}
