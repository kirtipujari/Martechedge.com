<?php

namespace App\Controllers;

class News extends BaseController
{
	public function index()
	{
		$data['title'] = 'News | Alltake B2B';
		 return view('header',$data)
		  .view('news')
		  .view('footer');
	}
}
?>