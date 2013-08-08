<?php

class Controller_Admin_Product extends Controller {

    public $template;
    public $user_logged;
    
    public function before()
    {
        parent::before();
        
        $this->user_logged = ORM::factory('User', Session::instance()->get('user_logged'));
        
        $service = new ServiceAuth();
        $service->hasPermission($this->request, $this->user_logged) ? : $this->redirect('admin');
    }

    public function action_index()
    {
        $template = new View_Jade('layout/admin');
        $view = new View_Jade('admin/product/index');
        
        $view->products = ORM::factory('Product')->find_all();
        
        $template->content = $view;
        $template->bind_global('user_logged', $user_logged);
    }

    public function action_view()
    {
        $template = new View_Jade('layout/admin');
        $view = new View_Jade('admin/product/view');
        
        $product = ORM::factory('Product')
            ->find((int) $this->request->param('id'));
        
        if(! $produc->loaded())
        {
            //TODO: error page - product not found
        }
        
        $view->product = $product;
        
        $template->content = $view;
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
    }
    
    public function action_update()
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
    }
    
    public function action_delete()
    {
        if($this->request->post())
        {
            $product = ORM::factory('Product');
            $product->delete();
            
            if($product->deleted())
            {
                $this->redirect('admin/product/index');
                return;
            }
        }
    }
    
    public function after()
    {
        $this->response->body($this->template);
        
        parent::after();
    }

}
