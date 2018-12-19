<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Bisnis Financial Security">
    <meta name="keywords" content="bisnis,financial,security,Geronimo & Shang Xiang">
    <meta name="author" content="Geronimo & Shang Xiang">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Univision-Produk</title>
    <link rel="icon" type="image/png" href="http://bisnis.financialsecurity.id/assets/images/16.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsee.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/template-style.css">
    <link href="<?php echo base_url(); ?>assets/font/font1.css" rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/font/font2.css" rel='stylesheet' type='text/css'>
    <style>
	.img-s {
	  border-radius: 50%;
	  width: 100px;
	  margin-right: 12px;
	} 
	
	.img-s2 {
	  border-radius: 50%;
	  width: 100px;

	} 
	 p.social a.tw{
        width: 28px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') left top no-repeat;
        margin-right: 8px;
        float: left;
        }
        
        p.social a.fb{
        width: 28px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -36px top no-repeat;
        float: left;
        margin-right: 8px;
        }
        
        p.social a.li{
        width: 28px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -72px top no-repeat;
        float: left;
        }
        
        p.social a.ig{
        width: 33px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -100px top no-repeat;
        float: left;
        }
        
        p.social a.pa{
        width: 33px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -133px top no-repeat;
        float: left;
        }
        
        p.social a.te{
        width: 33px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -167px top no-repeat;
        float: left;
        }
        
        p.social a.wa{
        width: 33px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -200px top no-repeat;
        float: left;
        }
        
        p.social a.tw:hover{
        width: 28px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') left bottom no-repeat;
        float: left;
        }
        
        p.social a.fb:hover{
        width: 28px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -36px bottom no-repeat;
        float: left;
        }
        
        p.social a.li:hover{
        width: 28px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/img/social.png') -72px bottom no-repeat;
        float: left;
        }
        
        p.social a.ig:hover{
        width: 33px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -100px bottom no-repeat;
        float: left;
        }
        
        p.social a.pa:hover{
        width: 33px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -133px bottom no-repeat;
        float: left;
        }
        
        p.social a.te:hover{
        width: 33px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -167px bottom no-repeat;
        float: left;
        }
        
        p.social a.wa:hover{
        width: 33px;
        height: 28px;
        background: url('http://bisnis.financialsecurity.id/assets/img/social.png') -200px bottom no-repeat;
        float: left;
        
	}
	</style>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>      
  </head>
  
  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<a href="<?php if(isset($agent)) echo "http://produk.financialsecurity.id/about/".$agent['username'];?>" class="hide-s" style="position:fixed;top:120px;right:-14px;z-index:10;"><img class="img-s" src="http://bisnis.financialsecurity.id/assets/agents/<?php if(isset($agent)) echo $agent['image'];?>" alt=""></a>
    <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="<?php echo base_url(); ?>index.html" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="<?php echo base_url(); ?>assets/img/logo.png" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="<?php echo base_url(); ?>assets/img/logo-dark.png" alt="">
          </a>
        </div>
        <div class="top-nav s-12 l-10">
          <p class="nav-text"></p>
          <ul class="right chevron">
            <li>
                <a href="
                  <?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                  $slug3  = $this->uri->segment(3); 
                    if($slug1 == "about" AND $slug2 != "") {
                      $pages = base_url().$slug2;

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                      $pages = base_url().$slug2;

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                      $pages = base_url();

                    }elseif($slug1 == "products" AND $slug2 != "") {
                      $pages = base_url().$slug2;

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                      $pages = base_url();

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                      $pages = base_url().$slug2;

                    }elseif($slug1 == "productpage" AND $slug2 == "view") {
                      $pages = base_url();

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url().$slug2;

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url();

                    }elseif($slug1 == "benefit" AND $slug2 == "view") {
                      $pages = base_url();

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url().$slug2;

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url();

                    }elseif($slug1 == "contacts" OR $slug1 == "sdetail" OR $slug1 == "products" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup") {
                     $pages = base_url();

                    }else{
                      $pages = base_url().$slug1;
                    }
                    echo $pages;
                  ?>
                  ">Home
                </a>
            </li>
                        <li><a>Products</a>
              <ul>
                <li><a href="<?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                  $slug3  = $this->uri->segment(3); 
                    if($slug1 == "about" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/aj";

                    }elseif($slug1 == "products" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/aj";

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/aj";

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                      $pages = base_url()."productpage/aj";

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/aj";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/aj";

                    }elseif($slug1 == "productpage" AND $slug2 == "view") {
                      $pages = base_url()."productpage/aj";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."productpage/".$slug2."/aj";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."productpage/aj";

                    }elseif($slug1 == "benefit" AND $slug2 == "view") {
                      $pages = base_url()."productpage/aj";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."productpage/".$slug2."/aj";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."productpage/aj";

                    }elseif($slug1 == "contacts" OR $slug1 == "sdetail" OR $slug1 == "products" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup" OR $slug1 == "") {
                      $pages = base_url()."productpage/aj";

                    }else{
                      $pages = base_url()."productpage/".$slug1."/aj";
                    }
                    echo $pages;
                  ?>">
                  
                Asuransi Jiwa</a></li>
                <li>
                  <a href="<?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                  $slug3  = $this->uri->segment(3); 
                    if($slug1 == "about" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/ak";

                    }elseif($slug1 == "products" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/ak";

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/ak";

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                      $pages = base_url()."productpage/ak";

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/ak";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/ak";

                    }elseif($slug1 == "productpage" AND $slug2 == "view") {
                      $pages = base_url()."productpage/ak";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."productpage/".$slug2."/ak";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."productpage/ak";

                    }elseif($slug1 == "benefit" AND $slug2 == "view") {
                      $pages = base_url()."productpage/ak";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."productpage/".$slug2."/ak";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."productpage/ak";

                    }elseif($slug1 == "contacts" OR $slug1 == "sdetail" OR $slug1 == "products" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup" OR $slug1 == "") {
                      $pages = base_url()."productpage/ak";

                    }else{
                      $pages = base_url()."productpage/".$slug1."/ak";
                    }
                    echo $pages;
                  ?>">
                Asuransi Kesehatan</a></li>
                <li>
                  <a href="<?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                  $slug3  = $this->uri->segment(3); 
                    if($slug1 == "about" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/apk";

                    }elseif($slug1 == "products" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/apk";

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/apk";

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                      $pages = base_url()."productpage/apk";

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/apk";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/apk";

                    }elseif($slug1 == "productpage" AND $slug2 == "view") {
                      $pages = base_url()."productpage/apk";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."productpage/".$slug2."/apk";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."productpage/apk";

                    }elseif($slug1 == "benefit" AND $slug2 == "view") {
                      $pages = base_url()."productpage/apk";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."productpage/".$slug2."/apk";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."productpage/apk";

                    }elseif($slug1 == "contacts" OR $slug1 == "sdetail" OR $slug1 == "products" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup" OR $slug1 == "") {
                      $pages = base_url()."productpage/apk";

                    }else{
                      $pages = base_url()."productpage/".$slug1."/apk";
                    }
                    echo $pages;
                  ?>">
                Asuransi Penyakit Kritis</a></li>
                <li>
                  <a href="<?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                  $slug3  = $this->uri->segment(3); 
                    if($slug1 == "about" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/akl";

                    }elseif($slug1 == "products" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/akl";

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/akl";

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                      $pages = base_url()."productpage/akl";

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/akl";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/akl";

                    }elseif($slug1 == "productpage" AND $slug2 == "view") {
                      $pages = base_url()."productpage/akl";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."productpage/".$slug2."/akl";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."productpage/akl";

                    }elseif($slug1 == "benefit" AND $slug2 == "view") {
                      $pages = base_url()."productpage/akl";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."productpage/".$slug2."/akl";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."productpage/akl";

                    }elseif($slug1 == "contacts" OR $slug1 == "sdetail" OR $slug1 == "products" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup" OR $slug1 == "") {
                      $pages = base_url()."productpage/akl";

                    }else{
                      $pages = base_url()."productpage/".$slug1."/akl";
                    }
                    echo $pages;
                  ?>">
                Asuransi Keluarga Lengkap</a></li>
                <li><a href="<?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                  $slug3  = $this->uri->segment(3); 
                    if($slug1 == "about" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/as";

                    }elseif($slug1 == "products" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/as";

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/as";

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                      $pages = base_url()."productpage/as";

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/as";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/as";

                    }elseif($slug1 == "productpage" AND $slug2 == "view") {
                      $pages = base_url()."productpage/as";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."productpage/".$slug2."/as";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."productpage/as";

                    }elseif($slug1 == "benefit" AND $slug2 == "view") {
                      $pages = base_url()."productpage/as";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."productpage/".$slug2."/as";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."productpage/as";

                    }elseif($slug1 == "contacts" OR $slug1 == "sdetail" OR $slug1 == "products" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup" OR $slug1 == "") {
                      $pages = base_url()."productpage/as";

                    }else{
                      $pages = base_url()."productpage/".$slug1."/as";
                    }
                    echo $pages;
                  ?>">
                Asuransi Syariah</a></li>
               
                <li><a href="<?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                  $slug3  = $this->uri->segment(3); 
                    if($slug1 == "about" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/ap";

                    }elseif($slug1 == "products" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/ap";

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/ap";

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                      $pages = base_url()."productpage/ap";

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/ap";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                     $pages = base_url()."productpage/".$slug2."/ap";

                    }elseif($slug1 == "productpage" AND $slug2 == "view") {
                      $pages = base_url()."productpage/ap";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."productpage/".$slug2."/ap";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."productpage/ap";

                    }elseif($slug1 == "benefit" AND $slug2 == "view") {
                      $pages = base_url()."productpage/ap";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."productpage/".$slug2."/ap";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."productpage/ap";

                    }elseif($slug1 == "contacts" OR $slug1 == "sdetail" OR $slug1 == "products" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup" OR $slug1 == "") {
                      $pages = base_url()."productpage/ap";

                    }else{
                      $pages = base_url()."productpage/".$slug1."/ap";
                    }
                    echo $pages;
                  ?>">
                Asuransi Pendidikan</a></li>
              </ul>
            </li>
            <li><a>Benefit</a>
              <ul>
                <li><a href="<?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                  $slug3  = $this->uri->segment(3); 
                    if($slug1 == "about" AND $slug2 != "") {
                     $pages = base_url()."benefit/".$slug2."/k";

                    }elseif($slug1 == "products" AND $slug2 != "") {
                     $pages = base_url()."benefit/".$slug2."/k";

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                     $pages = base_url()."benefit/".$slug2."/k";

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                      $pages = base_url()."benefit/k";

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                     $pages = base_url()."benefit/".$slug2."/k";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                     $pages = base_url()."benefit/".$slug2."/k";

                    }elseif($slug1 == "productpage" AND $slug2 == "view") {
                      $pages = base_url()."benefit/k";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."benefit/".$slug2."/k";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."benefit/k";

                    }elseif($slug1 == "benefit" AND $slug2 == "view") {
                      $pages = base_url()."benefit/k";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."benefit/".$slug2."/k";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."benefit/k";

                    }elseif($slug1 == "contacts" OR $slug1 == "sdetail" OR $slug1 == "products" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup" OR $slug1 == "") {
                      $pages = base_url()."benefit/k";

                    }else{
                      $pages = base_url()."benefit/".$slug1."/k";
                    }
                    echo $pages;
                  ?>">
                  
                Keluarga Terencana</a></li>
                <li>
                  <a href="<?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                  $slug3  = $this->uri->segment(3); 
                    if($slug1 == "about" AND $slug2 != "") {
                     $pages = base_url()."benefit/".$slug2."/f";

                    }elseif($slug1 == "products" AND $slug2 != "") {
                     $pages = base_url()."benefit/".$slug2."/f";

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                     $pages = base_url()."benefit/".$slug2."/f";

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                      $pages = base_url()."benefit/f";

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                     $pages = base_url()."benefit/".$slug2."/f";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                     $pages = base_url()."benefit/".$slug2."/f";

                    }elseif($slug1 == "productpage" AND $slug2 == "view") {
                      $pages = base_url()."benefit/f";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."benefit/".$slug2."/f";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."benefit/f";

                    }elseif($slug1 == "benefit" AND $slug2 == "view") {
                      $pages = base_url()."benefit/f";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."benefit/".$slug2."/f";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."benefit/f";

                    }elseif($slug1 == "contacts" OR $slug1 == "sdetail" OR $slug1 == "products" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup" OR $slug1 == "") {
                      $pages = base_url()."benefit/f";

                    }else{
                      $pages = base_url()."benefit/".$slug1."/f";
                    }
                    echo $pages;
                  ?>">
                Fakta Klaim</a></li>
                </ul>
                </li>
             <li>
              <a href="
                <?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                    
                   if($slug1 == "about" AND $slug2 != "") {
                      $pages = base_url()."about/".$slug2;

                    }elseif($slug1 == "products" AND $slug2 != "") {
                      $pages = base_url()."about/".$slug2;

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                      $pages = base_url()."about/".$slug2;

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                       $pages = base_url()."about";

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                      $pages = base_url()."about/".$slug2;

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                      $pages = base_url()."about/".$slug2;

                    }elseif($slug1 == "productpage" AND $slug2 == "view") {
                        $pages = base_url()."about/".$slug2;

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."about/".$slug2;

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."about";

                    }elseif($slug1 == "benefit" AND $slug2 == "view") {
                        $pages = base_url()."about/".$slug2;

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."about/".$slug2;

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."about";

                    }elseif($slug1 == "contacts" OR $slug1 == "sdetail" OR $slug1 == "products" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup") {
                      $pages = base_url()."about";
                    }else{
                      $pages = base_url()."about/".$slug1;
                    }
                    echo $pages;
                  ?>
                ">About
              </a>
            </li>
           <li><a href="
                <?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                    if($slug1 == "about" AND $slug2 != "") {
                      $pages = base_url()."gallery/".$slug2;

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                      $pages = base_url()."gallery/".$slug2;

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                      $pages = base_url()."gallery/".$slug2;

                    }elseif($slug1 == "products" AND $slug2 != "") {
                      $pages = base_url()."gallery/".$slug2;

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                       $pages = base_url()."gallery";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                      $pages = base_url()."gallery/".$slug2;

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                      $pages = base_url()."gallery/".$slug2;

                    }elseif($slug1 == "productpage" AND $slug2 == "view") {
                       $pages = base_url()."gallery";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."gallery/".$slug2;

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."gallery";

                    }elseif($slug1 == "benefit" AND $slug2 == "view") {
                       $pages = base_url()."gallery";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."gallery/".$slug2;

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."gallery";

                    }elseif($slug1 == "contacts" OR $slug1 == "sdetail" OR $slug1 == "products" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup") {
                     $pages = base_url()."gallery";

                    }else{
                      $pages = base_url()."gallery/".$slug1;
                    }
                    echo $pages;
                  ?>
                ">Articles</a></li>
              <li> <a href="
                <?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                    if($slug1 == "about" AND $slug2 != "") {
                      $pages = base_url()."contacts/".$slug2;

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                       $pages = base_url()."contacts";

                    }elseif($slug1 == "sdetail" AND $slug2 == "view") {
                       $pages = base_url()."contacts/".$slug2;

                    }elseif($slug1 == "products" AND $slug2 != "") {
                      $pages = base_url()."contacts/".$slug2;

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                      $pages = base_url()."contacts/".$slug2;

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                      $pages = base_url()."contacts/".$slug2;

                    }elseif($slug1 == "productpage" AND $slug2 == "view") {
                       $pages = base_url()."contacts";

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."contacts/".$slug2;

                    }elseif($slug1 == "productpage" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."contacts";

                    }elseif($slug1 == "benefit" AND $slug2 == "view") {
                       $pages = base_url()."contacts";

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 != "") {
                      $pages = base_url()."contacts/".$slug2;

                    }elseif($slug1 == "benefit" AND $slug2 != "" AND $slug3 == "") {
                      $pages = base_url()."contacts";

                    }elseif($slug1 == "contacts" OR $slug1 == "sdetail" OR $slug1 == "products" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup") {
                     $pages = base_url()."contacts";

                    }else{
                      $pages = base_url()."contacts/".$slug1;
                    }
                    echo $pages;
                  ?>
                ">Simulation
              </a>
            </li>
            <li><a href=
                "http://bisnis.financialsecurity.id/signin">Sign In</a></li>
                  <li><a href="
                  <?php 
                  $slug1  = $this->uri->segment(1); 
                  $slug2  = $this->uri->segment(2); 
                    if($slug1 == "about" AND $slug2 != "") {
                      $pages = "http://bisnis.financialsecurity.id/".$slug2;

                    }elseif($slug1 == "productpage" AND $slug2 != "") {
                       $pages = "http://bisnis.financialsecurity.id/";

                    }elseif($slug1 == "benefit" AND $slug2 != "") {
                       $pages = "http://bisnis.financialsecurity.id/";

                    }elseif($slug1 == "sdetail" AND $slug2 != "") {
                       $pages = "http://bisnis.financialsecurity.id/".$slug2;

                    }elseif($slug1 == "productpage" AND $slug2 == "") {
                       $pages = "http://bisnis.financialsecurity.id/".$slug2;

                    }elseif($slug1 == "benefit" AND $slug2 == "") {
                       $pages = "http://bisnis.financialsecurity.id/".$slug2;

                    }elseif($slug1 == "gallery" AND $slug2 == "view") {
                       $pages = "http://bisnis.financialsecurity.id/";

                    }elseif($slug1 == "gallery" AND $slug2 != "") {
                      $pages = "http://bisnis.financialsecurity.id/".$slug2;

                    }elseif($slug1 == "contacts" AND $slug2 != "") {
                      $pages = "http://bisnis.financialsecurity.id/".$slug2;

                    }elseif($slug1 == "story" AND $slug2 == "view") {
                      $pages = "http://bisnis.financialsecurity.id/";

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 != "") {
                      $pages = "http://bisnis.financialsecurity.id/".$slug2;

                    }elseif($slug1 == "story" AND $slug2 != "" AND $slug3 == "") {
                      $pages = "http://bisnis.financialsecurity.id/";

                    }elseif($slug1 == "contacts" OR $slug1 == "sdetail" OR $slug1 == "products" OR $slug1 == "gallery" OR $slug1 == "about" OR $slug1 == "forgot" OR $slug1 == "signin" OR $slug1 == "signup") {
                     $pages = "http://bisnis.financialsecurity.id/";

                    }else{
                      $pages = "http://bisnis.financialsecurity.id/".$slug1;
                    }
                    echo $pages;
                  ?>
                  ">Kenali Bisnis Kami</a></li>
          </ul>
        </div>
      </nav>
    </header>
  