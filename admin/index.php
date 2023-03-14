<?php
include('authentication.php');
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-12">
            <?php
            include('message.php');
            ?>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner"><BR><BR>
                <h3>Total Category</h3><br>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="category_view.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner"><br><br>
                <h3>Total Posts</h3><br>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="post_view.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
            <div class="inner"><br><br>
                <h3>Registered Users</h3><br>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="registered_user.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <div class="inner"><br><br>
                <h3>Total Admin</h3><br>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="registered_admin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              
            </div>
            
          </div>
          <div class="admin">
          <img src="img/adminpic.jpg" alt="pic ">
          </div>
          
          <!-- ./col -->
        </div>
        
        <!-- /.row -->
        </div><!-- /.container-fluid -->
        
        </section>
  
    </div>

   

<?php include('includes/script.php');?>  
<?php include('includes/footer.php');?>  