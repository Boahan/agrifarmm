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
                            Edit Post
                            <a href="post_view.php" class="btn btn-danger  float-right">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    {
                        $post_id = $_GET['id'];
                        $post_query = "SELECT * FROM products WHERE id='$post_id' LIMIT 1";
                        $post_query_res = mysqli_query($con,$post_query);

                        if(mysqli_num_rows($post_query_res)>0)
                        {
                            $post_row = mysqli_fetch_array($post_query_res);
                            ?>

                    
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="post_id" value="<?=$post_row['id']?>">

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Category List</label>
                            <?php
                            $category ="SELECT * FROM categories WHERE status='0'";
                            $category_run = mysqli_query($con,$category);

                        if(mysqli_num_rows($category_run)>0)
                        {
                            ?>
                            <select name="category_id" required class="form-control">
                                <option value="" >Select Category</option>
                                <?php
                                foreach($category_run as $categoryitem)
                                {
                                ?>
                    <option value="<?=$categoryitem['id']?>" <?=$categoryitem['id'] == $post_row['category_id']?'selected':''?>>
                                <?=$categoryitem['name']?>
                            </option>
                                <?php
                                }
                                    ?>
                                    </select>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <h5>No Category Available</h5>
                                    <?php
                                }

                            ?>


                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="<?=$post_row['name']?>" class="form-control" required placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" name="slug" value="<?=$post_row['slug']?>" class="form-control" required placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="summernote" class="form-control" required rows="3" placeholder="Enter Description"><?=$post_row['description']?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Meta Title</label>
                                <input type="text"  name="meta_title" value="<?=$post_row['meta_title']?>" class="form-control" required placeholder="Enter Meta Title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea name="meta_description"  class="form-control" required rows="3" placeholder="Enter Meta Description"><?=$post_row['meta_description']?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Keyword</label>
                                <textarea name="meta_keyword"  class="form-control" required rows="3" placeholder="Enter Meta Keyword"><?=$post_row['meta_keyword']?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="hidden" name="old_image" value="<?=$post_row['image']?>"/>
                                <input type="file" name="image" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label><br/>
                                <input type="checkbox" name="status" <?=$post_row['status'] == '1' ? 'checked':''?> width="70px" height="70px"> Checked = Hidden, Unchecked = Visible
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" name="post_update" class="btn btn-primary btn-block">Update</button>
                            </div>
                        </div>
                    </div>

                    </form>
                    <?php
                        }
                        else
                        {
                            ?>
                            <h4>No Record Found</h4>
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