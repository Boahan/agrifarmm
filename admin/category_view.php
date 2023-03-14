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
                            View Category
                            <a href="category_add.php" class="btn btn-primary float-right">Add Category</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                               </thead>
                               <tbody>
                                <?php
                                 $category ="SELECT * FROM categories WHERE status!='2'";
                                 $category_run = mysqli_query($con,$category);

                                 if(mysqli_num_rows($category_run)>0)
                                 {
                                    foreach($category_run as $item)
                                    {
                                        ?>
                                        <tr>
                                        <td><?= $item['id']?></td>
                                        <td><?= $item['name']?></td>
                                        <td>
                                        <?= $item['status'] == '1' ? 'hidden' : 'visible' ?> 
                                        </td>
                                        <td>
                                        <a href="category_edit.php?id=<?=$item['id']?>" class="btn btn-success">EDIT</a>
                                        </td>
                                        <td>
                       <form action="code.php" method="POST">
                    <button type="submit" name="category_delete" value="<?= $item['id']?>" class="btn btn-danger">DELETE</a>
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