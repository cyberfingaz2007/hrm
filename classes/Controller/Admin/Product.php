<?php

class Controller_Admin_Product extends Controller {
    
    public function before()
    {
        parent::before();
        
        $user_logged = ORM::factory('User', Session::instance()->get('user_logged'));
        
        $service = new ServiceAuth();
        $service->hasPermission($this->request, $user_logged);
    }

    public function action_index()
    {
        $template = new View_Jade('layout/admin');
        $view = new View_Jade('admin/product/index');
        
        $view->products = ORM::factory('Product')->find_all();
        
        $template->content = $view;
        $this->response->body($template);
    }
    
    public function action_find()
    {
        $template = new View_Jade('layout/admin');
        $view = new View_Jade('admin/product/find');
        
        if($this->request->post())
        {
            $products = ORM::factory('Product')
                ->where()
                ->find_all();
            
            $view->products = $products;
        }
        
        $template->content = $view;
        $this->response->body($template);
    }
    
    public function action_create()
    {
        $template = new View_Jade('layout/admin');
        $view = new View_Jade('admin/product/create');
        
        if($this->request->post())
        {
            $product = ORM::factory('Product');
            $product->save();
            if($product->saved())
            {
                $this->redirect('admin/product/index');
            }
        }
        
        $template->content = $view;
        $this->response->body($template);
    }
    
    public function action_edit()
    {
        
    }
    
    public function action_update()
    {
        
    }
    
    public function action_delete()
    {
        
    }

}
