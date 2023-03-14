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
                             ADD Post
                            <a href="post_view.php" class="btn btn-danger  float-right">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    
                    <form action="code.php" method="POST" enctype="multipart/form-data">

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
                                <option value="<?=$categoryitem['id']?>"><?=$categoryitem['name']?></option>
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
                                <input type="text" name="name" class="form-control" required placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" name="slug" class="form-control" required placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="summernote" class="form-control" required rows="3" placeholder="Enter Description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Meta Title</label>
                                <input type="text"  name="meta_title" class="form-control" required placeholder="Enter Meta Title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea name="meta_description"  class="form-control" required rows="3" placeholder="Enter Meta Description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Keyword</label>
                                <textarea name="meta_keyword"  class="form-control" required rows="3" placeholder="Enter Meta Keyword"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label><br/>
                                <input type="checkbox" name="status" width="70px" height="70px"> Show
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" name="post_add" class="btn btn-primary btn-block">SAVE</button>
                            </div>
                        </div>
                    </div>

                    </form>

                    </div>
                </div>
            </div>
        </div>
   
</section>

</div>
<?php include('includes/script.php');?>  
<?php include('includes/footer.php');?>  