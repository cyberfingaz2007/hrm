<?php

class Controller_Admin_Welcome extends Controller {

    public function action_index()
    {
        $template = new View_Jade('layout/admin');
        $view = new View_Jade('admin/welcome/index');
        $view->products = ORM::factory('Product')->find_all();
        $view->categories = ORM::factory('Category')->find_all();
        $view->orders = ORM::factory('Order')->find_all();
        $template->content = $view;
        $this->response->body($template);
    }

}
