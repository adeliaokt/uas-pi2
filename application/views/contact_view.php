<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo base_url().'assets/css/open-iconic-bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.css'?>">
    
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/owl.carousel.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/owl.theme.default.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/magnific-popup.css'?>">

    <link rel="stylesheet" href="<?php echo base_url().'assets/css/aos.css'?>">

    <link rel="stylesheet" href="<?php echo base_url().'assets/css/ionicons.min.css'?>">
    
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/flaticon.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/icomoon.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
  </head>
  <body>
  <?php $this->load->view('header') ;?>
    
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url().'assets/images/bg1.jpg'?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Me</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact Me<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-8">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon">
		          		<span class="icon-map-o"></span>
		          	</div>
		            <p><span>Address:</span> Kota Cirebon</p>
		          </div>
		          <div class="col-md-4 text-center border-height py-4">
		          	<div class="icon">
		          		<span class="icon-mobile-phone"></span>
		          	</div>
		            <p><span>Phone:</span> <a href="tel://1234567920"> 0881023599570</a></p>
		          </div>
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon">
		          		<span class="icon-envelope-o"></span>
		          	</div>
		            <p><span>Email:</span> <a href="adeliaaa.ok@gmail.com">adeliaaa.ok@gmail.com</a></p>
		          </div>
		        </div>
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
          	<h2 class="text-center">Jika ada pertanyaan <br>silahkan, jangan ragu untuk mengirim pesan</h2>
            <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
      </div>
    </section>
		
    <?php $this->load->view('footer') ;?>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



  <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery-migrate-3.0.1.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/popper.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.easing.1.3.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.waypoints.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.stellar.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/owl.carousel.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.magnific-popup.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/aos.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.animateNumber.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/scrollax.min.js'?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url().'assets/js/google-map.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/main.js'?>"></script>
    
  </body>
</html>