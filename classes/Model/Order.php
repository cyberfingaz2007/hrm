<?php

class Model_Order extends ORM {

    public $_table_name = "orders";
    public $_primary_key = "id";

    public $_belongs_to = array(
        "user" => array(
            "model" => "User",
            "foreign_key" => "user_id"
        ),
    );

    public $_has_many = array(
        "order_products" => array(
            "model" => "Order_Product",
            "foreign_key" => "order_id"
        ),
    );

}
