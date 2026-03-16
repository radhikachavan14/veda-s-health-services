<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Veda's Health Service | Emergency Blood Supply </title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/filogo.png" rel="icon">
<link href="assets/img/filogo.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">

<!-- ======================================================= -->

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center"> 
    <!---<h1 class="logo me-auto"><a href="index.html">Tejal Industries</a></h1>--->
     <!--Uncomment below if you prefer to use an image logo --> 
   <a href="index.html" class="logo me-auto"><img src="assets/img/logo1.jpg" alt="Vedas Help" class="img-fluid"></a>
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a  href="emergency.html">Emergency</a></li>
        <li><a href="hospital.html">Hospitals</a></li>
        <li><a href="blood_bank.html">Blood Banks</a></li>
        <li><a href="Medical.html">Medicals</a></li>
        <li><a class="active" href="about.html">About</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i> </nav>
    <!-- .navbar --> 
   <a href="emergency.html" class="get-started-btn">Get help</a> </div>
</header>
<!-- End Header --> 
<div class="breadcrumbs aos-init aos-animate" data-aos="fade-in"> 
	<div class="container">
		<h2>About Us</h2> 
	</div>
	</div>
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100"> <img src="assets/img/about.jpg" class="img-fluid" alt=""> </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
         <div class="section-title">
          <p>About Us</p>
        </div>
          <br>
          <p>Have you ever witnessed a relative of yours or a close friend searching frantically for a blood donor, when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking? Have you witnessed loss of life for the only reason that a donor was not available at the most needed hours?</p>
          <p>We got motivation for this project from real life problems faced by the people "Veda's Health Service" is an medium that brings voluntary blood donors and those in need of blood on to a common platform. Through this website, we seek donors who are willing to donate blood, as well as provide the timeliest support to those in frantic need of it.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Section -->
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
			<div class="section-title">
          <p>Join us</p>
        </div>
<div class="col-lg-4">
            <div class="info">
              <div class="name">
                <i class="ri-user-line"></i>
                <h4>full Name:</h4>
				</div>
              <div class="email">
                <i class="bi bi-droplet"></i>
                <h4>Blood type:</h4>
              </div>

              <div class="phone">
              <i class="ri-arrow-up-circle-line"></i>
				  <h4>Age:</h4>
              </div>
				  <div class="phone">
                <i class="bi bi-envelope"></i>
                <h4>Message:</h4>
              </div>
            </div>
          </div>
			
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Contact Us </h2>
                        <hr>
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
			<!--
          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="forms/about.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="dname" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="blood_type" id="blood" placeholder="Blood type" required>
              </div>
				 <div class="form-group mt-3">
                <input type="text" class="form-control" name="age" id="age" placeholder="Age" required>
              </div>
				 <div class="form-group mt-5">
                <a href="" class="get-started-btn">send</a>-->
              </div>
            </form>
          </div>
        </div>
	</div>
	
   
	<!--End Contact Section -->
   <!-- ======= footer ======= -->
<footer id="footer" class= "mt-4">
  
  <div class="container d-md-flex py-4">
    <div class="me-md-auto text-center text-md-start">
      <div class="copyright"> &copy; Copyright <strong><span>VEDA'S HEALTH SERVICS</span></strong>. All Rights Reserved </div>
      <div class="credits">
        Designed by Shalimar Kathade</div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0"> <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> </div>
  </div>
</footer>
<!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 

<!-- Vendor JS Files --> 
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script> 
<script src="assets/vendor/aos/aos.js"></script> 
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script> 
<script src="assets/vendor/php-email-form/validate.js"></script> 

<!--  Main JS File --> 
<script src="assets/js/main.js"></script>
</body>
</html>
