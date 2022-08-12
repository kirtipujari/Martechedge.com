<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel = "icon" href = "<?php echo base_url('/images/logo/favicon.png'); ?>" type = "image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/stylesheet.css'); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title><?php echo $title; ?></title>
  </head>
  <body>

   <div class="container py-3">
     <div class="row">
       <div class="col-lg-10">
       <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('/images/logo.png'); ?>" width="200" alt="Alltake ITES Pvt. Ltd."></a>
       
       </div>
       <div class="col-lg-2">
        <a href="https://www.linkedin.com/company/alltake-ites-pvt-ltd/" target="_blank" class=""><i class="fab fa-linkedin fs-4 text-dark linkd me-3"></i></a>
        <a href="https://www.facebook.com/people/Alltake-B2B/100063904035803/" target="_blank" class=""><i class="fab fa-facebook-square text-dark fs-4 me-3 face"></i></a>
        <a href="https://twitter.com/ALLTAKE_B2B" target="_blank" class=""><i class="fab fa-twitter me-3 text-dark fs-4 twit"></i></a>
       

       </div>
     </div>
   </div>
   
   <div class="container-fluid px-0 ">
   <nav class="navbar navbar-expand-lg bg-dark ">
<div class="container px-lg-2">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white ms-5" aria-current="page" href="<?php echo base_url('/'); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo base_url('news'); ?>">News</a>
        </li>

        <li class="nav-item">
          <a class="nav-link dropdown-toggle text-white" href="<?php echo base_url('martech-radar'); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="navbarDropdown">
            Martech Radar
          </a>
          <ul class="dropdown-menu">
            <div class="row ">
              <div class="col-lg-2 mx-auto" >
                  <li><a class="dropdown-item " href="<?php echo base_url('martech-radar/audio-advertizing'); ?>">AI/ML</a></li>
                   <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/audio-advertizing'); ?>">Audio Advertizing</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/business'); ?>">Business</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/content-marketing'); ?>">Content Marketing</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/audio-advertizing'); ?>">Customer Experience Management</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/content-marketing'); ?>">Digital Asset Management</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/business'); ?>">Identity Management</a></li>
                </div>
              <div class="col-lg-2 mx-auto">
                 <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/audio-advertizing'); ?>">Analytics</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/content-marketing'); ?>">Automation</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/business'); ?>">Business Intelliegence</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/audio-advertizing'); ?>">Content Syndication</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/content-marketing'); ?>">Customer Identity Management</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/business'); ?>">Ecommerce and mobile ecommerce</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/business'); ?>">Intelligent Assistants</a></li>
              </div>
               <div class="col-lg-2 mx-auto">
                 <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/audio-advertizing'); ?>">Apps for Business</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/content-marketing'); ?>">B2B Data</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/business'); ?>">Collaboration</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/audio-advertizing'); ?>">Customer Aquisition</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/content-marketing'); ?>">Customer Relationship Management</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/business'); ?>">Email Marketing</a></li>
              </div>
               <div class="col-lg-2 mx-auto">
                 <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/audio-advertizing'); ?>">Interactive Content</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/content-marketing'); ?>">Audiance Data</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/business'); ?>">Behavioral Marketing</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/audio-advertizing'); ?>">Communication</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/content-marketing'); ?>">Customer Data Flatform</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/business'); ?>">Data Management Flatform</a></li>
              </div>
               <div class="col-lg-2">
                 <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/audio-advertizing'); ?>">Entertainment</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/content-marketing'); ?>">Marketing</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/business'); ?>">AR/VR</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/audio-advertizing'); ?>">Brand Safety</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/content-marketing'); ?>">Content Management</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('martech-radar/business'); ?>">Digital Transformation</a></li>
              </div>
            </div>


            
          </ul>
        </li>
           <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="<?php echo base_url('advertizing'); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Advertizing
          </a>
          <ul class="dropdown-menu dropdown-menu1 mx-auto" >
            <div class="row p-3">
              <div class="col-lg-3">
                <img src="<?php echo base_url('images/home/img-1.png'); ?>" class="img-fluid">
                <li><a class="dropdown-item" href="<?php echo base_url('advertizing/video-advertizing'); ?>">Video Advertizing</a></li>
              </div>
              <div class="col-lg-3">
                <img src="<?php echo base_url('images/home/img-1.png'); ?>" class="img-fluid">
                <li><a class="dropdown-item" href="<?php echo base_url('advertizing/fm-advertizing'); ?>">FM Advertizing</a></li>
              </div>
              <div class="col-lg-3">
                <img src="<?php echo base_url('images/home/img-1.png'); ?>" class="img-fluid">
                <li><a class="dropdown-item" href="<?php echo base_url('advertizing/radio-advertizing'); ?>">Radio Advertizing</a></li>
              </div>
              <div class="col-lg-3">
                <img src="<?php echo base_url('images/home/img-1.png'); ?>" class="img-fluid">
                <li><a class="dropdown-item" href="<?php echo base_url('advertizing/radio-advertizing'); ?>">Radio Advertizing</a></li>
                <p>Video Advertizing is the best movement to capture good things</p>
              </div>
            </div>
            
            
            
            
          </ul>
        </li>
           <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="<?php echo base_url('interviews'); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Interviews
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('interviews/technical-round'); ?>">Technical Round</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('interviews/practical-round'); ?>">Practical Round</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('interviews/final-round'); ?>">Final Round</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo base_url('contact'); ?>">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo base_url('blog'); ?>">Blog</a>
        </li>
      </ul>
    </div>
 </div>
</nav>
</div>