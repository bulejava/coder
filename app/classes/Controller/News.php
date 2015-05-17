<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Main{


    public function before(){

     parent::before();
        $this->default = Database::instance();

    }

    public function action_view()
    {
     $this->page_title = 'INDEX';

      $id=intval($this->request->param('id'));

        $result=DB::select()->from('download')->where('id','=',$id)->execute($this->default)->as_array();

       $view=View::factory('pc/news/view');

       $view->ncontent=$result[0]['softsay'];

        $this->template->content =$view;
	}

    public function action_index()
    {
          $this->page_title = 'Home';


                $query = DB::select()
                    ->from('download')
                    ->where('star', '=','2')
                    ->execute($this->default);

                $result=$query->as_array();


                $this->template->content = View::factory("pc/news/default")->bind('newsList',$result);

       // echo 'hello world';


    }


}
