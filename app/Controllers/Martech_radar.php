<?php

namespace App\Controllers;

class Martech_radar extends BaseController
{
	public function index()
	{
		$data['title'] = 'Martech Radar | Alltake B2B';
		 return view('header',$data)
		   .view('martech_radar')
		   .view('footer');
	
	}
    
    public function audio_advertizing()
    {
    	$data['title'] = 'Audio Advertizing | Martech Radar | Alltake B2B';
		 return view('header',$data)
		   .view('audio_advertizing')
		   .view('footer');
    }

  public function content_marketing()
  {
  	 $data['title'] = 'Content Marketing | Martech Radar | Alltake B2B';
  	  return view('header',$data)
  	    .view('content_marketing')
  	    .view('footer');
  }
 
  public function business()
  {
  	 $data['title'] = 'Business | Martech Radar | Alltake B2B';
  	   return view('header',$data)
  	     .view('business')
  	     .view('footer');
  }
}
?>