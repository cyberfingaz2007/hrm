<?php

class Controller_Admin_Module extends Controller {
    
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
        $view = new View_Jade('admin/module/index');
        
        //TODO: list all modules
        $modules = array();
        
        if ($dh = opendir(MODPATH))
        {
             while (($file = readdir($dh)) ! in_array('.', '..')))
             {
                 $modules[] = $file;
             }
             
             closedir($dh);
        }
        
        if(count($modules))
        {
            $view->modules = $modules;
        }
        
        //TODO: enable modules
        
        $template->content = $view;
    }
    
    public function action_install()
    {
        $view = new View_Jade('admin/module/install');
        
        //TODO: install modules
        
        $template->content = $view;
    }
    
    public function action_uninstall()
    {
        $view = new View_Jade('admin/module/uninstall');
        
        //TODO: uninstall modules
        
        $template->content = $view;
    }
    
    public function after()
    {
        $this->response->body($this->template);
        
        parent::after();
    }
}
