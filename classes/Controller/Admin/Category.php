<?php

class Controller_Admin_Category extends Controller {

    public function action_index()
    {
        $template = new View_Jade('layout/admin');
        $view = new View_Jade('admin/category/index');
        $template->content = $view;
        $this->response->body($template);
    }

}
