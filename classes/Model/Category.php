<?php

class Model_Category extends ORM {

    public $_table_name = "categories";
    public $_primary_key = "id";

    public $_has_many = array(
        "products"  => array(
            "model" => "product",
            "foreign_key" => "category_id"
        ),
    );

}
