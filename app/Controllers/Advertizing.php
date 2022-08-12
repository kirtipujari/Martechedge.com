<?php

namespace App\Controllers;

class Advertizing extends BaseController
{
	public function index()
	{
          $data['title'] = 'Advertizing | Alltake B2B';
          return view('header',$data)
            .view('advertizing')
            .view('footer');
	}

  public function video_advertizing()
  {
      $data['title'] = 'Video Advertizing | Advertizing | Alltake B2B';
        return view('header',$data)
          .view('video_advertizing')
          .view('footer');
  }

  public function fm_advertizing()
  {
      $data['title'] = 'FM Advertizing | Advertizing | Alltake B2B';
       return view('header',$data)
         .view('fm_advertizing')
         .view('footer');
  }

  public function radio_advertizing()
  {
      $data['title'] = 'Radio Advertizing | Advertizing | Alltake B2B';
       return view('header',$data)
         .view('radio_advertizing')
         .view('footer');
  }
}
?>