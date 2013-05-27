<?php

class Model_User extends ORM {

    public $_table_name = "users";
    public $_primary_key = "id";

    public $_belongs_to = array(
        /*"category" => array(
            "model" => "Category",
            "foreign_key" => "category_id"
        ),*/
    );

    public $_has_many = array(
        "orders" => array(
            "model" => "Order",
            "foreign_key" => "user_id"
        ),
    );

}
