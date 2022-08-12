<?php

namespace App\Controllers;

class Interviews extends BaseController
{
	public function index()
	{
		$data['title'] = 'Interviews | Alltake B2B';
		 return view('header',$data)
		  .view('interviews')
		  .view('footer');
	}

  public function technical_round()
  {
  	  $data['title'] = 'Technical Round | Interviews | Alltake B2B';
  	   return view('header',$data)
  	     .view('technical_round')
  	     .view('footer');
  }
 
   public function practical_round()
   {
   	  $data['title'] = 'Practical Round | Interviews | Alltake B2B';
   	    return view('header',$data)
   	     .view('practical_round')
   	     .view('footer');
   }

   public function final_round()
   {
   	  $data['title'] = 'Final Round | Interviews | Alltake B2B';
   	    return view('header',$data)
   	      .view('final_round')
   	      .view('footer');
   }
}
?>