<?php

class Model_Order_Product extends ORM {

    public $_table_name = "order_products";
    public $_primary_key = "id";

    public $_belongs_to = array(
        "order" => array(
            "model" => "Order",
            "foreign_key" => "order_id"
        ),
        "product" => array(
            "model" => "Product",
            "foreign_key" => "product_id"
        ),
    );

}
