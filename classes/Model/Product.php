<?php

class Model_Product extends ORM {

    public $_table_name = "products";
    public $_primary_key = "id";

    public $_belongs_to = array(
        "category" => array(
            "model" => "Category",
            "foreign_key" => "category_id"
        ),
    );

}
