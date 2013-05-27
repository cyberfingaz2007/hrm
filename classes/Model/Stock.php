<?php
class Model_Stock extends ORM {
	
	//amount:integer operation:integer belongs_to:product:Product date_created:timestamp
	
	public $_belongs_to = array(
		'product' = array(
			'model' => 'Product',
			'foreign_key' => 'product_id',
		),
	);
	
	public $_has_one = array();
	
	public $_has_many = array();
	
	public $_table_name = 'stocks';
	public $_primary_key = 'id';
	
}
