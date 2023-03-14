<?php
include('authentication.php');
include('config/dbcon.php');
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   <section class="content mt-4">
 
        <div class="row">
            <div class="col-md-12">
           <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4>
                             Edit Category
                            <a href="category_view.php" class="btn btn-danger  float-right">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                   
                   
                    
  <?php
  if(isset($_GET['id']))
  {
    $category_id =$_GET['id'];
    $category_edit ="SELECT * FROM categories WHERE id='$category_id' LIMIT 1";
    $category_run = mysqli_query($con,$category_edit);

    if(mysqli_num_rows($category_run)>0)
    {
        $row = mysqli_fetch_array($category_run);
        ?>
  
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="category_id" value="<?=$row['id']?>">

                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="<?=$row['name']?>" class="form-control" required placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" name="slug" value="<?=$row['slug']?>" class="form-control" required placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description"  class="form-control" required rows="3" placeholder="Enter Description"><?=$row['name']?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Meta Title</label>
                                <input type="text"  name="meta_title" value="<?=$row['meta_title']?>" class="form-control" required placeholder="Enter Meta Title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea name="meta_description"  class="form-control" required rows="3" placeholder="Enter Meta Description"><?=$row['meta_description']?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Keyword</label>
                                <textarea name="meta_keyword"  class="form-control" required rows="3" placeholder="Enter Meta Keyword"><?=$row['meta_keyword']?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Navbar Status</label><br/>
                                <input type="checkbox" name="navbar_status" <?=$row['navbar_status'] == '1' ? 'checked' : '' ?> width="70px" height="70px"> Show
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label><br/>
                                <input type="checkbox" name="status" <?=$row['status'] == '1' ? 'checked' : '' ?>  width="70px" height="70px"> Show
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" name="category_update" class="btn btn-primary btn-block">UPDATE</button>
                            </div>
                        </div>
                    </div>

                    </form>

                <?php
                }
                else
                {
                ?>
                <h4>No Such category Found</h4>
                <?php
                }
                }
                ?>

                    </div>
                </div>
            </div>
        </div>
   
</section>

</div>
<?php include('includes/script.php');?>  
<?php include('includes/footer.php');?>  