<?php

require_once("config/dbcon.php");
if(isset($_POST['login_button']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
     $password = mysqli_real_escape_string($con, $_POST['password']);
  

$sql=$con->query("select * from users where email='$email'  AND password='$password'");


        if($sql->num_rows > 0)
        {
            $query_fetch=$sql->fetch_assoc();
            $_SESSION['user_id']=$query_fetch['id'];
            header('Location: Home.php');

        }
        else
        {
            $_SESSION['message'] = " not registered"; //message to show
            header("Location: login.php");
            exit(0);  
        }

    
   

}


if(isset($_POST['register_btn']))
{
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);

    if($password == $confirm_password)
    {
        // Check Email
        $checkemail = "SELECT email FROM users WHERE email='$email' LIMIT 1";
        $checkemail_run = mysqli_query($con, $checkemail);

        if(mysqli_num_rows($checkemail_run) > 0)
        {
            // Already Email Exists
            $_SESSION['message'] = "Already Email Exists";
            header("Location: signup.php");
            exit(0);
        }
        else
        {
            $user_query = "INSERT INTO users (fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')";
            $user_query_run = mysqli_query($con, $user_query);

            if($user_query_run)
            {
                $_SESSION['message'] = "Registered Successfully";
                header("Location: login.php");
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Something Went Wrong!";
                header("Location: signup.php");
                exit(0);
            }
        }
    }
    else
    {
        $_SESSION['message'] = "Password and Confirm Password does not Match";
        header("Location: signup.php");
        exit(0);
    }
}

?>