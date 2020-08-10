<?php
session_start();
if(isset($_SESSION['login_type']))
{
    header('location:page_selector.php');
}
require_once('connection.php');
echo "Sucesfully Referred to reg.php <br>";

if($conn)
{
    $name=$_POST['u_name'];
    $email=$_POST['u_email'];
    $phone=$_POST['u_phn'];
    $sex=$_POST['u_sex'];
    $pwd1=$_POST['pswd1'];
    $pwd2=$_POST['pswd2'];
    if($pwd1==$pwd2)
    {
        $insert_query="Insert into user_account values('$name','$email','$phone','$pwd2','$sex','0','None')";
        $Query_Status=mysqli_query($conn,$insert_query);
        if($Query_Status)
        {
            echo 'Data Inserted Sucessfully';
            header('location:registration.php');
        }
        else
        {
            echo 'error Occured while inserting data<br>';
        }
    }
   
}
else
{
    echo "Error in Database Connectivity";
}
?>