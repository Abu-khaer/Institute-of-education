<?php
include_once 'config/db.php';

if(isset($_POST['submit'])){

  $name =stripslashes($_POST['name']);
  $name = mysqli_real_escape_string($conn, $name);
  $mother_name = stripslashes($_POST['mother_name']);
  $mother_name = mysqli_real_escape_string($conn, $mother_name);
  $father_name = stripslashes($_POST['father_name']);
  $father_name = mysqli_real_escape_string($conn, $father_name);
  $brc = stripslashes($_POST['brc']);
  $brc = mysqli_real_escape_string($conn, $brc);



    $query = "INSERT INTO student (name, mother_name, father_name, brc) VALUES ('$name', '$mother_name', '$father_name', '$brc')";

    $result = mysqli_query($conn, $query);

    if(($result)){
     echo  "Enroll Successfull";
    }else {
      echo "Something went wrong";
    }

  
 }


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Standard 1 - INSTITUTE OF EDUCATION</title>
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

  <!--  CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">INSTITUTE OF EDUCATION</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="admission.php">Addmission</a></li>

          <li class="dropdown"><a href="#"><span>Classes</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Students</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a  href="kg.php">KG</a></li>
                  <li><a href="admission.php">Addmission</a></li>
                  <li><a href="standard 1.php">Standard 1</a></li>
                  <li><a class="active" href="standard 2.php">Standard 2</a></li>
                  <li><a href="standard 3.php">Standard 3</a></li>
                  <li><a href="standard 4.php">Standard 4</a></li>
                  <li><a href="standard 5.php">Standard 5</a></li>
                </ul>
              </li>
             
             
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      <button type="button" class="get-started-btn  btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Enroll Now
      </button>

    </div>
    
  </header><!-- End Header -->

  <main id="main">
    

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Class KG</h2>
        <p>This is primary section Of our Grade level.
          student play and enjoy here and learn some basic point of study. </p>
      </div>
    </div><!-- End Breadcrumbs -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Student Applicant Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Student Name" required>
          </div>
          <div class="mb-3">
            <input type="text" name="mother_name" class="form-control" placeholder="Mothers_name" required>
          </div>
          <div class="mb-3">
            <input type="text" name="father_name" class="form-control" placeholder="fathers_name " required>
          </div>
          <div class="mb-3">
            <input type="number" name="brc" class="form-control" placeholder="Birt Registration certificate" required>
          </div>
          <div class="mb-3">
            
          </div>
       
      </div>
      <div class="modal-footer">
        <input type="submit" name="submit" value="Save Data" class="form-control btn btn-info" >
      </div>
    </form>
    </div>
  </div>
</div>
   

  </main><!-- End #main -->


  <section class="kg" id="kg_class">
    <div class="container">
      <div class="row ">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Accademic Subject</div>
              <div class="card-body  bg-success">
                <ol class="text-warning">
                  <li> Bangla </li>
                  <li>English</li>
                  <li>Math</li>
                  <li>Arabic and moral study</li>
                </ol>

              </div>
            </div>
          </div>
        </div>
        <h1 class="text-center text-danger bg-warning mt-5">gallary</h1>
        <div class="col-lg-4">
       
          <div class="card">
            <div class="card-header bg-info">
              <div class="card-title text-center text-danger">Class Picture</div>
            </div>
              <div class="card-body">
                <img src="assets/img/gallary 3.jpg" id="std_img" alt="">

              </div>
            
            <div class="card-footer">
              <p>this is Anual events Programme</p>
              <a href="#" class="btn btn-primary form-control">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header  bg-info">
              <div class="card-title text-center">Class Picture</div>
            </div>
              <div class="card-body">
                <img src="assets/img/gallary 2.jpg" id="std_img" alt="">

              </div>
            
            <div class="card-footer">
              <p>this is Anual events Programme</p>
              <a href="#" class="btn btn-primary form-control">Read More</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card">
            <div class="card-header  bg-info">
              <div class="card-title text-center">Class Picture</div>
            </div>
              <div class="card-body">
                <img src="assets/img/gallary 2.jpg" id="std_img" alt="">

              </div>
            
            <div class="card-footer">
              <p>this is Anual events Programme</p>
              <a href="#" class="btn btn-primary form-control">Read More</a>
            </div>
          </div>
        </div>
      </div>

   
  </div>
  </section>
 
  
 
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>INSTITUTE OF EDUCATION</h3>
            <p>
              Parbatipur Upazilla <br>
              Dinajpur <br>
              Bangladesh <br><br>
              <strong>Phone:</strong> +88 017100000<br>
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
            <p>Share your valuable opinion to us.</p>
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

  <!--  JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!--Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>