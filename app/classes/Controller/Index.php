<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Main {

    public function action_index()
    {
        //$this->page_title = 'Home';

        $default = Database::instance();

        $query = DB::select()
            ->from('download')
            ->where('star', '=','2')
            ->execute($default);

        $result=$query->as_array();

        $pk='sss';

        $this->template->content = View::factory("pc/news/default",$result)->bind('newsList',$result);
	}

	}
