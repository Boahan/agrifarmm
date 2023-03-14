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
                            View Post
                            <a href="post_add.php" class="btn btn-primary float-right">ADD</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                               </thead>
                               <tbody>
                                <?php
                              
                                 $posts ="SELECT p.*, c.name AS cname FROM products p,categories c WHERE c.id = p.category_id ";
                                 $posts_run = mysqli_query($con,$posts);

                                 if(mysqli_num_rows($posts_run)>0)
                                 {
                                    foreach($posts_run as $post)
                                    {
                                        ?>
                                        <tr>
                                        <td><?= $post['id'];?></td>
                                        <td><?= $post['name'];?></td>
                                        <td><?= $post['cname'];?></td>
                                        <td><img src="./uploads/product/<?= $post['image']?>" width="60px" height="60px"/>
                                        </td>

                                        <td><?= $post['status'] == '1' ? 'Hidden':'Visible' ?></td>

                                        <td>
                                            <a href="post_edit.php?id=<?=$post['id']?>" class="btn btn-success">EDIT</a>
                                        </td>
                                        <td>
                                            <form action="code.php" method="POST">
                                        <button type="submit" name="post_delete_btn" value="<?=$post['id']?>" class="btn btn-danger">DELETE</a>
                                    </form>
                                        </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <tr>
                                    <td colspan="6">NO RECORD FOUND</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
   
</section>

</div>
<?php include('includes/script.php');?>  
<?php include('includes/footer.php');?>  