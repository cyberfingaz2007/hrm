<?php

class Controller_Admin_Welcome extends Controller {

    public function action_index()
    {
        $template = new View_Jade('layout/admin');
        $view = new View_Jade('admin/welcome/index');
        $template->content = $view;
        $this->response->body($template);
    }

}
