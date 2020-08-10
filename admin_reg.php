<?php
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
    $club=$_POST['u_club'];
    if($pwd1==$pwd2)
    {
        $insert_query="Insert into user_account values('$name','$email','$phone','$pwd2','$sex','1','$club')";
        $Query_Status=mysqli_query($conn,$insert_query);
        if($Query_Status)
        {
            echo 'Data Inserted Sucessfully';
            header('location:superuser_panel.php');
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