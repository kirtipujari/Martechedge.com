<?php

namespace App\Controllers;

class Blog extends BaseController
{
	public function index()
	{
		$data['title'] = 'Blog | Alltake B2B';
		  return view('header',$data)
		    .view('blog')
		    .view('footer');
	}

  

}
?>