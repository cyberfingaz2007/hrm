<?php

class Controller_Hrm_Company extends Controller_Template {

	public $template = 'default/layout/main';
	
	public $user_logged;
	
	public $page;
	
	public function before()
	{
		parent::before();
		
		$this->page = new stdClass;
		$this->page->title = 'Company Admin';
		$this->page->description = '';
		
		$this->user_logged = Filter_Security::userLogged();
	}
	
	public function action_index()
	{
		// TODO: list companies User is employeeds
		$companies = ORM::factory('company')
			->where('user_id', '=', $this->user_logged->id)
			->find_all();
		
		$view = View::factory('default/hrm/company/index');
		$view->companies = $companies;
		
		$this->render(array('json' => $companies, 'html' => $view));
	}
	
	public function action_find()
	{
		// TODO: list companies User is employeeds
		$companies = ORM::factory('company')
			->where('user_id', '=', $this->user_logged->id)
			->and_where('name', 'LIKE', "%{$this->request->get('name')}%")
			->find_all();
		
		$view = View::factory('default/hrm/company/find');
		$view->companies = $companies;
		
		$this->render(array('json' => $companies, 'html' => $view));
	}
	
	public function action_create()
	{
		$company = ORM::factory('company');
		
		if($this->request->post())
		{
			// TODO: Move address create to model
			$address = ORM::factory('address')
				->values($this->request->post('address'))
				->create();
			
			$company->name = $this->request->post('name');
			$company->addAddress($address);
			$company->save();
		}
		
		$view = View::factory('default/hrm/company/create');
		$view->company = $company;
		
		$this->render(array('json' => $company, 'html' => $view));
	}
	
	public function action_update()
	{
		$company = ORM::factory('company')
			->save();
		
		if($this->request->post())
		{
			// TODO: Move address create to model
			$address = ORM::factory('address')
				->values($this->request->post('address'))
				->create();
			
			$company->name = $this->request->post('name');
			$company->addAddress($address);
			$company->save();
		}
		
		$view = View::factory('default/hrm/company/create');
		$view->company = $company;
		
		$this->render(array('json' => $company, 'html' => $view));
	}
	
	public function after()
	{
		parent::after();
	}

}
