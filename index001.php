<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My First Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    section{
      width: 100%;
      height: 100vh;
      background: url("assets/img/Marley-art.jpg") top center;
      background-size: cover;
    }
    form {
	  width: 500px;
	  border: 2px solid #ccc;
	  padding: 30px;
	  background: #fff;
	  border-radius: 15px;
  }

  h2 {
	  text-align: center;
	  margin-bottom: 40px;
  }

  input {
	  display: block;
    border: 2px solid #ccc;
  	width: 95%;
	  padding: 10px;
	  margin: 10px auto;
	  border-radius: 5px;
  }
  label {
	  color: #888;
	  font-size: 18px;
	  padding: 10px;
  }

  button {  
	  float: right;
	  background: #555;
	  padding: 10px 15px;
	  color: #fff;
	  border-radius: 5px;
	  margin-right: 10px;
	  border: none;
    }
    button:hover{
	    opacity: .7;
    }
    .error {
      background: #F2DEDE;
      color: #A94442;
      padding: 10px;
      width: 95%;
      border-radius: 5px;
      margin: 20px auto;
    }

    h1 {
  	  text-align: center;
	   color: #fff;
    }

  .ca {
	  font-size: 14px;
	  display: inline-block;
	  padding: 10px;
	  text-decoration: none;
	  color: #444;
  }

  .ca:hover {
	  text-decoration: underline;
  }
    
  </style>
  
</head>

</html>
<body>
    <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/Strath101.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Ignatius VMK</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/Ignatius_VMK" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/_ignatius.vmk_/" target="_blank"  class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="https://www.linkedin.com/in/ignatius-kariuki-63890a244/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="http://localhost//PORTFOLIO2/index.html"  class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="http://localhost//PORTFOLIO2/about.html"  class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="http://localhost//PORTFOLIO2/resume.html"   class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="http://localhost//PORTFOLIO2/portfolio.html"    class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="http://localhost//PORTFOLIO2/areas.html"  class="nav-link scrollto"><i class="bx bx-server"></i> <span>Areas Covered</span></a></li>
          <li><a href="http://localhost//PORTFOLIO2/contact.html"  class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
          <li><a href="http://localhost//PORTFOLIO2/index001.php"  class="nav-link scrollto"><i class="##"></i> <span>Log In</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Login Section ======= -->
  <section id="login" class="d-flex flex-column justify-content-center align-items-center">
  <form action="http://localhost//PORTFOLIO2/Login-registration-System-PHP-and-MYSQL/login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
		<a href="http://localhost/PORTFOLIO2/signup001.php" class="ca"  >Create an account</a>
		<a href="http://localhost/PORTFOLIO2/index.html" class="ca"  >Home Page</a>
     </form>
  </section><!-- End Hero -->


</body>