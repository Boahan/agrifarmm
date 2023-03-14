<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $sub = ($_POST['subject']);
   $csub = ($_POST['message']);

   $select = " SELECT * FROM contact_form WHERE email = '$email' && name = '$name' ";

   $result = mysqli_query($conn, $select);

   $insert = "INSERT INTO contact_form(name, email, subject, message) VALUES('$name','$email','$sub','$csub')";
   mysqli_query($conn, $insert);

 
};
?>


<?php 
@include 'includes/header.php';
@include 'includes/topbar.php';
@include 'includes/navbar.php';
?>


    

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Contact Us</h1>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="" class="btn btn-secondary py-md-3 px-md-5">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Contact Us</h6>
                <h1 class="display-5">Please Feel Free To Contact Us</h1>
            </div>



<div class="row g-0">
<div class="col-lg-7">
<div class="bg-primary h-100 p-5">
<form action="connect.php" method="post">
<div class="row g-3">
<div class="col-6">
<input type="text" class="form-control bg-light border-0 px-4" placeholder="Your Name" style="height: 55px;" name="name" required>
</div>
<div class="col-6">
<input type="email" class="form-control bg-light border-0 px-4" placeholder="Your Email" style="height: 55px;" name="email" required>
</div>
<div class="col-12">
<input type="text" class="form-control bg-light border-0 px-4" placeholder="Subject" style="height: 55px;" name="subject" required>
</div>
<div class="col-12">
<textarea class="form-control bg-light border-0 px-4 py-3" rows="2" placeholder="Message" name="message"required></textarea>
</div>
<div class="col-12">
<button class="btn btn-secondary w-100 py-3" type="submit" name="submit">Send Message</button>
</div>
</div>
</form>
</div>
</div>


                <div class="col-lg-5">
                    <div class="bg-secondary h-100 p-5">
                        <h2 class="text-white mb-4">Get In Touch</h2>
                        <div class="d-flex mb-4">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-geo-alt fs-4 text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-white">Our Office</h5>
                                <span class="text-white">Location, City, Country</span>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-envelope-open fs-4 text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-white">Email Us</h5>
                                <span class="text-white">info@example.com</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-phone-vibrate fs-4 text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-white">Call Us</h5>
                                <span class="text-white">+012 345 6789</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


     <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3444.6091230265365!2d77.99552601509545!3d30.305187381788205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39092a37c216c8ad%3A0x26e8f646843bfe17!2sSeema%20Dwar%2C%20Dehradun%2C%20Uttarakhand%20248146!5e0!3m2!1sen!2sin!4v1678520721647!5m2!1sen!2sin" width="1520" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <?php 
    @include 'includes/footer.php';
    @include 'includes/scripts.php';
    ?>

