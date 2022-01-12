<?php
    include '../dbconnection.php';

    $user_id = $_POST['user_Id'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $mobileno=$_POST['mobileno'];
    $name=null;
   //echo $oldpass;

        $insert_client = "UPDATE admin_user SET user_name='$username',user_email='$email',user_mobile='$mobileno' where user_email='$user_id'";
        $result = mysqli_query($con, $insert_client);
        if($result){
            echo '<script>alert("User Updated....")</script>';
           /* header('Location: ./index.php');
            die();*/
        }
        else{
            echo '<script>alert("Something Wrong")</script>';
        }

    
   
?>