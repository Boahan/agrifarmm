
<?php

@include 'config.php';
include('admin/config/dbcon.php');

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
                <a href="farmer.php" class="nav-item nav-link active">Home</a>
                <?php
                $navbarCategory = "SELECT * FROM categories WHERE  navbar_status='0' AND status='0' ";
                $navbarCategory_run = mysqli_query($con,$navbarCategory);

                if(mysqli_num_rows($navbarCategory_run)>0)
                {
                    foreach($navbarCategory_run as $navItems)
                    {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="category.php?title=<?= $navItems['slug'];?>"><?= $navItems['name'];?></a>
                    </li>
                    <?php
                    }
                }
                ?>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a href="https://rzp.io/l/wSXTA0m" class="nav-item nav-link">Donate</a>
                <a href="logout.php" class="nav-item nav-link">logout</a>

            </div>
        </div>
    </nav>


<div class="py-5">
    <div class="containerr">
        <div class="row">
            <div class="col-md-8">

            <?php
            if(isset($_GET['title']))
            {
                $slug = mysqli_real_escape_string($con,$_GET['title']);
                $category="SELECT id,slug FROM categories WHERE slug='$slug' AND status='0' LIMIT 1";
                $Category_run= mysqli_query($con,$category);

                if(mysqli_num_rows($Category_run)>0)
                {
                    $categoryItem =mysqli_fetch_array($Category_run);
                    $category_id= $categoryItem['id'];
                    $posts ="SELECT category_id,name,slug,created_at FROM products WHERE category_id='$category_id' AND status='0' ";
                    $posts_run = mysqli_query($con,$posts );
                    if(mysqli_num_rows($posts_run)>0)
                    {
                        foreach($posts_run as $postItems)
                        {
                        ?>
                        <a href="post.php?title=<?=$postItems['slug'];?>" class="text-decoration-none">
                        <div class="card card-body shadow-sm mb-4">
                            <h5><?=$postItems['name'];?></h5>
                        <div>
                            <label class="text-dark me-2">Posted On: <?= date('d-M-Y',strtotime($postItems['created_at']));?></label>
                </div>
                </div>
                </a>
                       <?php
                    }
                    }
                    else
                    {
                        ?>
                        <h4>No Post Available</h4>
                        <?php
                    }

                }
                else
                {
                    ?>
                    <h4>No Such Category Found</h4>
                    <?php
                }
            }
            else
            {
                ?>
                <h4>No Such Url Found</h4>
                <?php
            }
            ?>

      
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Advertise</h4>
            </div>
            <div class="card-body">
                Your Advertise
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
