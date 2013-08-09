<?php

class Controller_Admin_Category extends Controller {
    
    public $template;
    public $user_logged;
    
    public function before()
    {
        parent::before();
        
        $this->user_logged = ORM::factory('User', Session::instance()->get('user_logged'));
        $this->template = new View_Jade('layout/admin');
        $this->template->bind_global('user_logged', $user_logged);
        
        $service = new ServiceAuth();
        $service->hasPermission($this->request, $this->user_logged) ? : $this->redirect('admin');
    }

    public function action_index()
    {
        $view = new View_Jade('admin/category/index');
        $template->content = $view;
    }
    
    public function action_view()
    {}
    
    public function action_find()
    {}
    
    public function action_create()
    {}
    
    
    public function action_update()
    {}
    
    public function after()
    {
        $this->response->body($this->template);
        
        parent::after();
    }

}
