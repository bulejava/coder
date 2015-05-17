<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15-5-16
 * Time: 下午7:47
 */

class Controller_Main extends Controller_Template{

    public $page_title;

    public function before()
    {

        $this->template="pc/template/main";

        parent::before();


        // Make $page_title available to all views
        View::bind_global('page_title', $this->page_title);

        // Load $sidebar into the template as a view
        $this->template->header = View::factory('pc/template/header');
    }












}