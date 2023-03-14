<?php
include('authentication.php');
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php'); 
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">



<!--Delete User -->
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
      <div class="modal-body">
       <input type="hidden" name="delete_id" class="delete_user_id">
       <p>
        Are you sure, you want to delete this data?
      </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="DeleteUserbtn" class="btn btn-primary">Delete</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!--Delete User -->


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
              <li class="breadcrumb-item active">Messages</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <?php
     if(isset($_SESSION['status']))
     {
        echo"<h4>".$_SESSION['status']."</h4>";
        unset($_SESSION['status']);
     }
     ?>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Messages</h3>
             
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $query = "SELECT * FROM contact_form";
                      $query_run = mysqli_query($con,$query);

                      if(mysqli_num_rows($query_run)>0)
                      {
                        foreach($query_run as $row)
                        {
                            ?>
                             <tr>
                             <td><?php  echo $row ['id']; ?></td>
                             <td><?php  echo $row ['name']; ?></td>
                             <td><?php  echo $row ['email']; ?></td>
                             <td><?php  echo $row ['subject']; ?></td>
                             <td><?php  echo $row ['message']; ?></td>
                    <td>
                      <form action="code.php" method="POST">
                      <button type="button" name="contact_delete" value="<?php  echo $row ['id']; ?>" class="btn btn-danger btn-sm deletebtn">Delete</a>
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
                            <td>No Record Found</td>
                      </tr>
                      <?php
                      }
                      ?>
                </tbody>
               </table>
                </div>
           </div>


</div>
<?php include('includes/script.php');?>  

<script>
 $(document).ready(function(){
 $('.email_id').keyup(function(e){
  var email=$('.email_id').val();
  
  $.ajax({
    type: "POST",
    url: "code.php",
    data: {
        'check_Emailbtn':1,
        'email':email,
    },
    success: function(response){
    $('.email_error').text(response);
    }
  });
  });
 });

</script>






<script>
$(document).ready(function(){
$('.deletebtn').click(function(e){
  e.preventDefault();
   
  var user_id =$(this).val();
  $('.delete_user_id').val(user_id);
  $('#DeleteModal').modal('show');

});
});
</script>

<?php include('includes/footer.php');?>  
