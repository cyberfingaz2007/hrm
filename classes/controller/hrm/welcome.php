<?php

class Controller_Hrm_Welcome extends Controller_Template {

	public $template = 'default/layout/main';
	
	public function before()
	{
		parent::before();
	}
	
	public function action_index()
	{
		$view = View::factory('default/hrm/welcome/index');
		$this->template->content = $view;
	}

}
