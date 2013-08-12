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
        $view->categories = ORM::factory('Category')->find_all();
        $template->content = $view;
    }
    
    public function action_view()
    {
        $view = new View_Jade('admin/category/index');
        $view->category = ORM::factory('Category', (int) $this->request->param('id'));
        $template->content = $view;
    }
    
    public function action_find()
    {
        $view = new View_Jade('admin/category/index');
        $category = $this->request->post('category');
        $categories = ORM::factory('Category')
            ->where(DB:expr("name LIKE %{$category}%"))
            ->find_all();
            
        $view->categories = $categories;
        $template->content = $view;
    }
    
    public function action_create()
    {}
    
    public function action_update()
    {}
    
    public function action_delete()
    {
        $category = ORM::factory('Category', (int) $this->request->param('id'));
        if($category->loaded())
        {
            $category->delete();
            if($category->deleted())
            {
                $this->redirect('admin/category/index');
            }
        }
    }
    
    public function after()
    {
        $this->response->body($this->template);
        
        parent::after();
    }

}
