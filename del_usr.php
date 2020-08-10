<?php
require_once('connection.php');
$email_dl=$_POST['del_email'];
//echo $email_dl;
if($conn)
{
    $query_to_delete="delete from user_account where Email='$email_dl'";
    $delete_status=mysqli_query($conn,$query_to_delete);
    header('location:superuser_panel.php');
}
?>