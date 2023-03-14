<?php
include('authentication.php');
include('config/dbcon.php');





if(isset($_POST['category_add']))
{
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];
    $navbar_status = $_POST['navbar_status'] == true ? '1':'0';
    $status = $_POST['status'] == true ? '1':'0';

    $query = "INSERT INTO categories (name,slug,description,meta_title,meta_description,meta_keyword,navbar_status,status) VALUES ('$name','$slug','$description','$meta_title','$meta_description','$meta_keyword','$navbar_status','$status')";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
            $_SESSION['status']="category Added Successfully";
            header('location: category_add.php');
            exit(0);
    }
    else
    {
        $_SESSION['status']="Something Went Wrong";
        header('location: category_add.php');
        exit(0);
    }
}


if(isset($_POST['category_update']))
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];
    $navbar_status = $_POST['navbar_status'] == true ? '1':'0';
    $status = $_POST['status'] == true ? '1':'0';

    $query= "UPDATE categories SET name='$name',slug='$slug',description='$description',meta_title='$meta_title',
    meta_description='$meta_description',meta_keyword='$meta_keyword',navbar_status='$navbar_status',status='$status' WHERE id='$category_id' ";
    $query_run= mysqli_query($con,$query);
    if($query_run)
    {
        $_SESSION['status']="Category Updated Successfully";
        header('location: category_edit.php?id='.$category_id);
        exit(0);
    }
    else
    {
        $_SESSION['status']="Something Went Wrong";
        header('location: category_edit.php?id='.$category_id);
        exit(0);
    }

}




if(isset($_POST['category_delete']))
{
    $category_id = $_POST['category_delete'];
    $query= "UPDATE categories SET STATUS='2' WHERE id='$category_id' LIMIT 1";
    $query_run= mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['status']="Category Deleted Successfully";
        header('location: category_view.php');
    }
    else
    {
        $_SESSION['status']="Something Went Wrong";
        header('location: category_view.php');
    }

}


if(isset($_POST['post_update']))
{
    $post_id = $_POST['post_id'];
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];
    $old_filename = $_POST['old_image'];
    $image = $_FILES['image']['name'];


    $update_filename = "";
    if($image != NULL)
    {
        $image_extension= pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;
        $update_filename = $filename; 
    }
    else
    {
        $update_filename = $old_filename; 
    }

 
    $status = $_POST['status'] == true ? '1':'0';


    $query = "UPDATE products SET category_id='$category_id',name='$name',slug='$slug',description='$description', image='$update_filename',meta_title='$meta_title',meta_description='$meta_description',meta_keyword='$meta_keyword',status='$status' WHERE id='$post_id' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        if($image != NULL)
        {
            if(file_exists('uploads/product/'.$old_filename)){
                unlink("uploads/product/".$old_filename);

            }
            move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/product/'.$update_filename);
        }
        $_SESSION['status']="Post Updated Successfully";
        header('location: post_edit.php?id='.$post_id);
        exit(0);
    }
    else
    {
        $_SESSION['status']="Something Went Wrong";
        header('location: post_edit.php?id='.$post_id);
        exit(0);
    }
}

if(isset($_POST['contact_delete']))
    {
    
        $userid = $_POST['contact_delete'];

        $query = "DELETE FROM contact_form WHERE id='$userid' ";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            $_SESSION['status'] = "Admin Deleted Successfully";
            header("Location: connect.php");
        }
        else
        {
            $_SESSION['status']="Admin Deleting Failed";
            header("Location: connect.php");
        }
    }


















if(isset($_POST['post_add']))
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];
    $image = $_FILES['image']['name'];

    $image_extension= pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;

 
    $status = $_POST['status'] == true ? '1':'0';

    $query = "INSERT INTO products (category_id,name,slug,description,image,meta_title,meta_description,meta_keyword,status) VALUES ('$category_id','$name','$slug','$description','$filename','$meta_title','$meta_description','$meta_keyword','$status')";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/product/'.$filename);
        $_SESSION['status']="Post Added Successfully";
        header('location: post_add.php');
        exit(0);
    }
    else
    {
        $_SESSION['status']="Something Went Wrong";
        header('location: post_add.php');
        exit(0);
    }
}



if(isset($_POST['post_delete_btn']))
{
    $post_id = $_POST['post_delete_btn'];

    $check_img_query = "SELECT * FROM products WHERE id='$post_id' LIMIT 1";
    $img_res = mysqli_query($con,$check_img_query);
    $res_data = mysqli_fetch_array($img_res);

    $image = $res_data['image'];

    $query="DELETE FROM products WHERE id='$post_id' LIMIT 1";
    $query_run = mysqli_query($con,$query);


    if($query_run)
    {
            if(file_exists('uploads/product/'.$image)){
                unlink("uploads/product/".$image);
            }

        $_SESSION['status']="Post Deleted Successfully";
        header('location: post_view.php');
        exit(0);
    }
    else
    {
        $_SESSION['status']="Something Went Wrong";
        header('location: post_view.php');
        exit(0);
    }
}


















if(isset($_POST['product_save']))
{
    $slug = $_POST['slug'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $meta_description = $_POST['meta_description'];
    $meta_title = $_POST['meta_title'];
    $offermeta_title = $_POST['offermeta_title'];
    $meta_keyword = $_POST['meta_keyword'];
    $navbar_status = $_POST['navbar_status'];
    $status = $_POST['status'] == true ? '1':'0';
    $image = $_FILES['image']['name'];

    $allowed_extension= array('png','jpg','jpeg');
    $file_extension= pathinfo($image, PATHINFO_EXTENSION);

    $filename = time().'.'.$file_extension;
    if(!in_array($file_extension,$allowed_extension))
    {
        $_SESSION['status']="Only jpg,png,jpeg Image";
        header('location: product-add.php');
        exit(0);
    }
    else
    {
        $query = "INSERT INTO products (slug,name,description,meta_description,meta_title,offermeta_title,meta_keyword,navbar_status,image,status) 
        VALUES ('$slug','$name','$description','$meta_description','$meta_title','$offermeta_title','$meta_keyword','$navbar_status','$filename','$status')";
        $query_run = mysqli_query($con,$query);
        if($query_run)
        {
            move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/product/'.$filename);
            $_SESSION['status']="Product Added Successfully";
            header('location: product-add.php');
            exit(0);
        }
        else
        {
            $_SESSION['status']="Something Went Wrong";
            header('location: product-add.php');
            exit(0);
        }
    
    }

}






















if(isset($_POST['logout_btn']))
{
    // session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);

    $_SESSION['status']="Logged Out Successfully";
    header('location: login.php');
    exit(0);
}


if(isset($_POST['check_Emailbtn']))
{
    $email = $_POST['email'];

    $checkmail ="SELECT email FROM users WHERE email='$email' ";
    $checkmail_run = mysqli_query($con,$checkmail);

    if(mysqli_num_rows($checkmail_run)>0)
    {
      echo "Email Id Already Exists";
    }
    else
    {
      echo  "Email Available";
    }
}
    
    if(isset($_POST['addUser'])){
    
       $name = $_POST['name'];
       $phone = $_POST['phone'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $confirmpassword = $_POST['confirmpassword'];

       if($password == $confirmpassword)
       {
        $checkmail ="SELECT email FROM users WHERE email='$email' ";
        $checkmail_run = mysqli_query($con,$checkmail);

        if(mysqli_num_rows($checkmail_run)>0)
        {
            $_SESSION['status'] = "Email Already Exists";
            header("Location: registered.php");
            exit;
        }
        else
        {
            $user_query = "INSERT INTO users (name,phone,email,password)VALUES('$name','$phone','$email','$password')";
            $user_query_run = mysqli_query($con,$user_query);
    
            if($user_query_run)
            {
                $_SESSION['status'] = "User Added Successfully";
                header("Location: registered_admin.php");
            }
            else
            {
                $_SESSION['status']="User Not Added";
                header("Location: registered_admin.php");
            }
        }
       }
       else
       {
        $_SESSION['status']="Password And Confirm Password Does Not Match";
        header("Location: registered_admin.php");
       }

    }
    if(isset($_POST['updateUser']))
    {
    
        $user_id = $_POST['user_id'];
        $name = $_POST['name'];   
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "UPDATE users  SET name='$name',phone='$phone',email='$email',password='$password' WHERE id='$user_id' ";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            $_SESSION['status'] = "User Updated Successfully";
            header("Location: registered_admin.php");
        }
        else
        {
            $_SESSION['status']="User Updating Failed";
            header("Location: registered_admin.php");
        }
    }

if(isset($_POST['DeleteUserbtn']))
    {
    
        $userid = $_POST['delete_id'];

        $query = "DELETE FROM users WHERE id='$userid' ";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            $_SESSION['status'] = "Admin Deleted Successfully";
            header("Location: registered_admin.php");
        }
        else
        {
            $_SESSION['status']="Admin Deleting Failed";
            header("Location: registered_admin.php");
        }
    }



if(isset($_POST['user_delete']))
    {
    
        $userid = $_POST['delete_id'];

        $query = "DELETE FROM user_form WHERE id='$userid' ";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            $_SESSION['status'] = "User Deleted Successfully";
            header("Location: registered_user.php");
        }
        else
        {
            $_SESSION['status']="User Deleting Failed";
            header("Location: registered_user.php");
        }
    }


if(isset($_POST['DeleteUserbtn']))
    {
    
        $userid = $_POST['delete_id'];

        $query = "DELETE FROM users WHERE id='$userid' ";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            $_SESSION['status'] = "Admin Deleted Successfully";
            header("Location: registered_admin.php");
        }
        else
        {
            $_SESSION['status']="Admin Deleting Failed";
            header("Location: registered_admin.php");
        }
    }
    ?>
