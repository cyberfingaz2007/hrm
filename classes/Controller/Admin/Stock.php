<?php

class Controller_Admin_Stock extends Controller {
    
    public $template;
    public $user_logged;
    
    public function before()
    {
        parent::before();
        
        $this->user_logged = ORM::factory('User', Session::instance()->get('user_logged'));
        $this->template = new View_Jade('layout/admin');
        $this->template->bind_global('user_logged', $this->user_logged);
        
        $service = new ServiceAuth();
        $service->hasPermission($this->request, $this->user_logged) ? : $this->redirect('admin');
    }

    public function action_index()
    {
        $view = new View_Jade('admin/stock/index');
        $view->categories = ORM::factory('Category')->find_all();
        $template->content = $view;
    }
    
    public function action_view()
    {
        $view = new View_Jade('admin/stock/view');
        $view->stock = ORM::factory('Stock', (int) $this->request->param('id));
        $template->content = $view;
    }
    
}
