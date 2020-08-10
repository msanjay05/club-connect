<?php
session_start();
if(isset($_SESSION['login_type']))
{
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
   header('location:registration.php');
}

?>
