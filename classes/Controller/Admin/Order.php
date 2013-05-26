<?php

class Controller_Admin_Order extends Controller {

    public function action_index()
    {
        $template = new View_Jade('layout/admin');
        $view = new View_Jade('admin/order/index');
        $template->content = $view;
        $this->response->body($template);
    }

}
