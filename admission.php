<?php
include_once 'config/db.php';

if(isset($_POST['submit'])){

  $name =stripslashes($_POST['name']);
  $name = mysqli_real_escape_string($conn, $name);
  $mother_name = stripslashes($_POST['mother_name']);
  $mother_name = mysqli_real_escape_string($conn, $mother_name);
  $father_name = stripslashes($_POST['father_name']);
  $father_name = mysqli_real_escape_string($conn, $father_name);

  $class = stripslashes($_POST['class']);
  $class = mysqli_real_escape_string($conn, $class);

  $brc = stripslashes($_POST['brc']);
  $brc = mysqli_real_escape_string($conn, $brc);



    $query = "INSERT INTO student (name, mother_name, father_name, class, brc) VALUES ('$name', '$mother_name', '$father_name', '$class', '$brc')";

    $result = mysqli_query($conn, $query);

    if(($result)){
     echo  "Thank you for your interest in IE! An admissions representative will contact you shortly.";

    }else {
      echo "Something went wrong";
    }

  
 }
?>

<!-- student form -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Addmission - INSTITUTE OF EDUCATION</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

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

  <!--  Header  -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">INSTITUTE OF EDUCATION</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a  href="index.php">Home</a></li>
          <li><a class="active" href="#admission.php">Addmission</a></li>
          <li class="dropdown"><a href="#"><span>Appointment</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="appoint/teacher.php">Teacher</a></li>
              <li><a href="appoint/stuff.php">Staff</a></li>
              <li><a href="appoint/account.php">Accountant</a></li>
             
            </ul>
          </li>
         
          <li class="dropdown"><a href="#"><span>Classes</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="kg.php">KG</a></li>
                  
                  <li><a href="standard1.php">Standard 1</a></li>
                  <li><a href="standard2.php">Standard 2</a></li>
                  <li><a href="standard3.php">Standard 3</a></li>
                  <li><a href="standard4.php">Standard 4</a></li>
                  <li><a href="standard5.php">Standard 5</a></li>
                </ul>
         
              
          </li>
          <li><a href="trainers.php">Teachers</a></li>
          <li><a  href="courses.php">Gallery</a></li>
          
          <!-- <li><a class="active" href="about.php">About</a></li>     -->
         
          <!-- <li><a href="events.php">Events</a></li> -->
          <li><a href="notice.php">Notice</a></li>

         
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        
      </nav><!-- .navbar -->

      

    </div>
  </header><!-- End Header -->
  

  <main id="main">
    
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Addmission Form</h2>
        <p>Students Addmission form KG to Standard 5. </p>
      </div>
    </div>

   
</main><!-- End #main -->
<div class="marquee">
  <marquee behavior="scroll" direction="fade-left"><h4>Notice:  Last date of submission for Students:
    15 December, 2022. --  Last Date of Teachers and stuff's application 31 October 2022.</h4></marquee>
</div>


<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
      <div class="accordion accordion-flush" id="accordionFlushExample">
     <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed bg-warning text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      Application form for students <a class="btn btn-danger float-end " href="#">Click Here</a>
      </button>
      </h2>
       <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <form action="" method="post">
          <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Student Name" required>
          </div>
          <div class="mb-3">
            <input type="text" name="mother_name" class="form-control" placeholder="Mothers_name" required>
          </div>
          <div class="mb-3">
            <input type="text" name="father_name" class="form-control" placeholder="Fathers_name " required>
          </div>
          <div class="mb-3">
            <input type="number" name="brc" class="form-control" placeholder="Birth Registration certificate" required>
          </div>

          <div class="mb-3">
          <label for="">Desire to get admission into -</label><br>
            <select name="class" id="">
              
            <option value="">Select Grade</option>
              <option value="kg">KG</option>
              <option value="standard 1">standard 1</option>
              <option value="standard 2">standard 2</option>
              <option value="standard 3">standard 3</option>
              <option value="standard 4">standard 4</option>
              <option value="standard 5">standard 5</option>
            </select>
          </div>

          <div class="mb-3">
          <input type="submit" name="submit" value="Enroll" class="form-control btn btn-info" >
          </div>
          </form>
          
          </div>
           </div>
         </div>
  
  
        </div>
      </div>
    </div>

  
  </div>
</div>

<!-- Footer  -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>INSTITUTE OF EDUCATION</h3>
            <p>
               <br>
               Parbatipur Upazilla<br>
              Dinajpur <br><br>
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
            <p>Share your valuable Opinion to upgrade our quality.</p>
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

  <!--JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!--JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>