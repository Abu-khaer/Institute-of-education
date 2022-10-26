<?php
include_once 'config/db.php';
  // Teachers Form application start
if(isset($_POST['submit'])){

  $name =stripslashes($_POST['name']);
  $name = mysqli_real_escape_string($conn, $name);

  $mother_name = stripslashes($_POST['mother_name']);
  $mother_name = mysqli_real_escape_string($conn, $mother_name);

  $father_name = stripslashes($_POST['father_name']);
  $father_name = mysqli_real_escape_string($conn, $father_name);

  $nid = stripslashes($_POST['nid']);
  $nid = mysqli_real_escape_string($conn, $nid);

  $ssc = stripslashes($_POST['ssc']);
   $ssc = mysqli_real_escape_string($conn, $ssc);

   $result_ssc = stripslashes($_POST['result_ssc']);
   $result_ssc = mysqli_real_escape_string($conn, $result_ssc);

  $phone = stripslashes($_POST['phone']);
  $phone = mysqli_real_escape_string($conn, $phone);

  $email = stripslashes($_POST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  
  $brc = stripslashes($_POST['brc']);
  $brc = mysqli_real_escape_string($conn, $brc);


    $query = "INSERT INTO stuff (name, mother_name, father_name, nid, ssc, result_ssc, phone, email, brc) VALUES ('$name', '$mother_name', '$father_name', '$nid', '$ssc', '$result_ssc', '$phone', '$email', '$brc')";

    $result = mysqli_query($conn, $query);

    if(($result)){
        echo '<script>alert("Registration Successfull")</script>';
    }else {
      echo "Something went wrong";
    }

  
 }
?>
 <!-- teachers Application End -->




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact - INSTITUTE OF EDUCATION</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

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

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">INSTITUTE OF EDUCATION</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a  href="../index.html">Home</a></li>
          <li><a  href="../courses.html">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Enrollment</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Students</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="../kg.html">KG</a></li>
                  <li><a href="../standard 1.html">Standard 1</a></li>
                  <li><a href="../standard 2.html">Standard 2</a></li>
                  <li><a href="../standard 3.html">Standard 3</a></li>
                  <li><a href="../standard 4.html">Standard 4</a></li>
                  <li><a href="../standard 5.html">Standard 5</a></li>
                </ul>
              </li>
              <li><a href="../notice.html">Teachers</a></li>
              <li><a href="../notice.html">Stuff</a></li>
              
             
            </ul>
          </li>
          <li><a href="../about.html">About</a></li>    
          <li><a href="../trainers.html">Teachers</a></li>
          <li><a href="../events.html">Events</a></li>
          <li><a href="../notice.html">Notice</a></li>

         
          <li><a class="active" href="contact.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        
      </nav><!-- .navbar -->



    </div>
  </header><!-- End Header -->

  <main id="main" class="bg-info">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Stuff Appointment</h2>
        <p> </p>
      </div>
    </div><!-- End Breadcrumbs -->


    
<div class="accordion" id="accordionPanelsStayOpenExample">
 
  <div class="accordion-item">
    <h2 class="accordion-header " id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed justify-content-center" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
       <span class="text-bg-warning"><strong>Stuff Application Form.</strong> <a class="btn btn-danger btn-sm" href="#"> Click Here </a></span>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body text-center">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header bg-danger">
              <div class="card-title text-center text-light"><h2>Stuff Application Form</h2></div>
            </div>
            <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                  <input type="text" name="name" class="form-control" placeholder="Candidate Name" required>
                </div>
                <div class="mb-3">
                  <input type="text" name="mother_name" class="form-control" placeholder="Mothers_name" required>
                </div>
                <div class="mb-3">
                  <input type="text" name="father_name" class="form-control" placeholder="fathers_name " required>
                </div>
                <div class="mb-3">
                  <input type="number" name="nid" class="form-control" placeholder="NID Number " required>
                </div>
                
                  <label for="">Educational Qualification</label><br>
                  SSC 
                  <select name="ssc" id="" class="form-control">
                    <option value="">Select Board</option>
                  <option value="Dhaka">Dhaka</option>
                  <option value="Rajshahi">Rajshahi</option>
                  <option value="Khulna">Khulna</option>
                  <option value="Sylhet">Sylhet</option>
                  <option value="Comilla">Comilla</option>
                  <option value="Mymensingh">Mymensingh</option>
                  <option value="Barishal">Barishal</option>
                  <option value="Rangpur">Rangpur</option>
                  <option value="Madrasha">Madrasha</option>
                  </select>
    
                  <!-- result -->
                  Result 
                  <select name="ssc_result" id=""class="form-control">
                    <option value="">Select Result</option>
                  <option value="A+">A+</option>
                  <option value="A">A</option>
                  <option value="A-">A-</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  </select>
                </div>
                
    
    
                <div class="mb-3">
                  <input type="number" name="brc" class="form-control" placeholder="Birth Registration certificate Number" required>
                </div>
                <div class="mb-3">
                  <input type="text" name="email" class="form-control" placeholder="Input Email Here">
                </div>
                <div class="mb-3">


                <div class="mb-3">
                  <input type="number" name="phone" class="form-control" placeholder="Mobile Number" required>
                </div>
               
                <div class="mb-3">
                  <input type="submit" name="submit" value="Save Data" class="form-control btn btn-info" >
                </div>
              </form>
              <div class="mb-3">
                <p>After Completing this form . Send your CV through Email.</p>
                <strong><a href="https://mail.google.com/compose=new">insedubd23@gmail.com</a></strong>
                <p>Thank you</p>
              </div>
              
  
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>INSTITUTE OF EDUCATION</h3>
            <p>
             ParbatiPur Upazilla  <br>
              Dinajpur<br>
              Bangladesh <br><br>
              <strong>Phone:</strong> +88 01710000<br>
              <strong>Email:</strong> insedubd23@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Share Your Valuable Opinion.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>INSTITUTE OF EDUCATION</span></strong>. All Rights Reserved
        </div>
        
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>