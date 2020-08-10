<?php
session_start();
require_once('connection.php');
$club_id=$_POST['u_club'];
$club_pos=$_POST['u_post'];
$u_email=$_SESSION['login_email'];
if($conn)
{
    $insert_query="insert into applicant_details values('$club_id','$club_pos','$u_email')";
    $insert_status=mysqli_query($conn,$insert_query);
    if($insert_status)
    {
        echo "<br><br><br><br><h3 align='center'>Sucessfully Applied</h3>";
        echo "<div align='center' style='font-size:20px;'><a href='registration.php'>Home</a></div>";
    }
}
?>