<?php

namespace App\Controllers;

class Contact extends BaseController
{
	public function index()
	{
		$data['title'] = 'Contact | Alltake B2B';
		 return view('header',$data)
		   .view('contact')
		   .view('footer');
	}
}
?>