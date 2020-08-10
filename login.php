<?php
session_start();
echo 'Login.php <br>';
require_once('connection.php');
if($conn){
$user_email=$_POST['l_email'];
$user_pwd=$_POST['l_pwd'];
$check_user="select * from user_account where Email='$user_email'";
if($row=mysqli_fetch_array(mysqli_query($conn,$check_user)))
{
    if($user_pwd==$row['Password'])
    {
        echo "Login sucessfull<br>";
        $_SESSION['login_email']=$row['Email'];
        $_SESSION['login_name']=$row['Name'];
        $_SESSION['login_type']=$row['User_Type'];
        $_SESSION['club_id']=$row['Club_Id'];
        if($_SESSION['login_type']==0)
        {
            header('location:user_view.php');
        }
        else if($_SESSION['login_type']==1)
        {
            header('location:admin_panel.php'); 
        }
        else if($_SESSION['login_type']==9)
        {
            header('location:superuser_panel.php');
        }
    }
    else
    {
        echo "Incorrect Password<br>";
    }
}
else
{
    echo "Not Registred with us <br>";
}
}
else
{
    echo "Database Eroor<br>";
}
?>