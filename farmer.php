<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Agrifarm</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">


<!-- bootstrap  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/card.css">
    


</head>

<body>

    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-start">
                <h3>welcome, <span><?php echo $_SESSION['admin_name'] ?></span> !</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="index.php" class="navbar-brand ms-lg-5">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Agri</span>Farm</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-end">
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="https://instagram.com/gusainshaswat?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="https://github.com/Boahan"><i class="fab fa-github"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="https://www.linkedin.com/in/shaswat-gusain-2924a324a"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
        <a href="index.php" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Farm</span>Fresh</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="farmer_blog.php" class="nav-item nav-link">Blog</a>
                <a href="weather.php" class="nav-item nav-link">weather</a>
                <a href="shopping/index.php" class="nav-item nav-link">ecommerce</a>

                <a href="https://rzp.io/l/wSXTA0m" class="nav-item nav-link">Donate</a>
                <a href="logout.php" class="nav-item nav-link">logout</a>

            </div>
        </div>
    </nav>
    <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/4.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h3 class="text-white">Farmer's Dashboard</h3>
                            <h1 class="display-1 text-white mb-md-4">The One <br>Who Feeds Your Family</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Explore</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5">Contact</a>
                        </div>
                    </div>
                </div>
    </div>
    <!-- Carousel End -->


    <div class="container">
    <div class="card-hover">
      <div class="card-hover__content">
        <h3 class="card-hover__title">
          1 Farmers <span>paradise</span> 
        </h3>
        <p class="card-hover__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia quisquam doloremque nostrum laboriosam, blanditiis libero corporis nulla a aut?</p>
        <a href="shopping/index.php" class="card-hover__link">
          <span>Learn How</span>
          <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
          </svg>        
        </a>
      </div>
      <div class="card-hover__extra">
        <h4>Shop <span>now</span> and get <span>40%</span> discount!</h4>
      </div>
      <img src="img/q.jpg" alt="">
    </div>
  
    <div class="card-hover">
      <div class="card-hover__content">
        <h3 class="card-hover__title">
        2  BLOG <span>HERE</span> 
        </h3>
        <p class="card-hover__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia quisquam doloremque nostrum laboriosam, blanditiis libero corporis nulla a aut?</p>
        <a href="farmer_blog.php" class="card-hover__link">
          <span>Learn How</span>
          <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
          </svg>        
        </a>
      </div>
      <div class="card-hover__extra">
        <h4>Be <span>updated</span> and get <span>news</span> here!</h4>
      </div>
      <img src="img/s.jpg" alt="">
    </div>
  
    <div class="card-hover">
      <div class="card-hover__content">
        <h3 class="card-hover__title">
         3 WEATHER <span>APP</span>
        </h3>
        <p class="card-hover__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia quisquam doloremque nostrum laboriosam, blanditiis libero corporis nulla a aut?</p>
        <a href="weather.php" class="card-hover__link">
          <span>Learn How</span>
          <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
          </svg>        
        </a>
      </div>
      <div class="card-hover__extra">
        <h4>Predict <span>now</span> and be <span>rest</span> assured!</h4>
      </div>
      <img src="img/we.png" alt="">
    </div>
   


  
</div>

<div class="container-fluid bg-dark text-white py-4">
            <div class="container text-center">
                <p class="mb-0">&copy; <a class="text-secondary fw-bold">Agrifram</a>. All Rights Reserved. Designed by <a class="text-secondary fw-bold">Shaswat Gusain</a></p>
            </div>
        </div>


   
  <?php 
    @include 'includes/scripts.php';
    ?>

    
    

    