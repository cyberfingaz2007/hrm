<?php

class Controller_Admin_Order extends Controller {
    
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
        $view = new View_Jade('admin/order/index');
        
        $view->orders = ORM::factory('Order')
            ->order_by('datecreated', 'DESC')
            ->find_all();
        
        $this->template->content = $view;
    }
    
    public function action_view()
    {
        $view = View_Jade::factory('admin/order/view');
        
        $order = ORM::factory('Order', (int) $this->request->param('id'));
        
        $view->order = $order;
        
        $this->template->content = $view;
    }
    
    public function action_find()
    {
        $view = View_Jade::factory('admin/order/find');
        
        $orders = ORM::factory('Order')
            ->where('datecreated', '=', $this->request->post('start'))
            ->find_all();
        
        $view->orders = $orders;
        
        $this->template->content = $view;
    }
    
    public function action_create()
    {
        $view = View_Jade::factory('admin/order/create');
        
        $order = ORM::factory('Order');
        
        if($this->request->post())
        {
            $order->user = $this->user_logged;
            $order->cust = $this->request->post('cust');
            $order->save();
            
            if($order->saved())
            {
                $this->redirect('admin/order/create');
                return;
            }
        }
        
        $view->order = $order;
        $this->template->content = $view;
    }
    
    public function action_update()
    {
        $view = View_Jade::factory('admin/order/update');
        
        $order = ORM::factory('Order', (int) $this->request->param('id'));
        
        if($this->request->post())
        {
            $order->user = $this->user_logged;
            $order->cust = $this->request->post('cust');
            $order->save();
            
            if($order->saved())
            {
                $this->redirect('admin/order/create');
                return;
            }
        }
        
        $view->order = $order;
        $this->template->content = $view;
    }
    
    public function after()
    {
        $this->response->body($this->template);
        
        parent::after();
    }

}
