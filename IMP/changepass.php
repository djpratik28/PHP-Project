<?php
    include '../dbconnection.php';

    $user_id=$_POST['user_Id'];
    $oldpass=$_POST['oldpass'];
    $newpassword=$_POST['newpass'];
    $confirmpassword=$_POST['confpass'];
    $name=null;
   //echo $oldpass;
    $sql=mysqli_query($con,"SELECT * FROM admin_user where user_email ='$user_id'");
    while($num=mysqli_fetch_array($sql)){
        $name=$num['user_email'];
    }
        // echo $name=$num['user_email']
    if($name!=null){
        if($newpassword == $confirmpassword){
            $reesult=mysqli_query($con,"update admin_user set password=' $newpassword' where user_email='$name'");

            if($reesult){
                echo "<script>alert('Passowrd changed suceesfully')</script>";
                header('Location: ./index.php');
                die();
            }

        }
        else{
           
           // header('Location: ./index.php');
            echo "<script>alert('Passowrd Does not Match')</script>";
        }
    }
   
?>