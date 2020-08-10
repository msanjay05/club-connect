<?php
session_start();
if($_SESSION['login_type']!=1)
{
    header('location:registration.php');
}
else{
    require_once('connection.php');
    echo '<h1>Admin Panel</h1>';
    echo "<h1>Name :".$_SESSION['login_name']."&nbsp;&nbsp;";
    echo "|| Authorised for : ";
    $cid=$_SESSION['club_id'];
    $club_name="Select * from club where Club_Id='$cid'";
    $status=mysqli_query($conn,$club_name);
    $row=mysqli_fetch_array($status);
    echo $row['Club_Name'];
    echo '</h1>';
}
?>
<html>
    <head>

</head>
<body>
    <div style="float:left;width:65%;">
    <?php
    require_once('connection.php');
    $club_id_ses=$_SESSION['club_id'];
    $query="Select * from applicant_details where Club_Id='$club_id_ses'";
    $status=mysqli_query($conn,$query);
    echo "<table style='border:3px solid black;
    border-collapse:collapse;width:90%;'>";
    echo "<tr style='border:3px solid black;
    border-collapse:collapse;'><th>Name</th><th>Email</th><th>Club ID</th></tr>";
    while($row=mysqli_fetch_array($status))
    {
        echo "<tr>";
        echo "<td style='border:3px solid black;
        border-collapse:collapse;'>".$row['Email']."</td>";
        echo "<td style='border:3px solid black;
        border-collapse:collapse;'>".$row['Position']."</td>";
        echo "<td style='border:3px solid black;
        border-collapse:collapse;'>".$row['Club_Id']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    </div> 
    <div style="float:right;width:35%;height:50%;">
    <div style="margin:auto;">
    <a href='logout.php' ><button style="background:red;width:150px;height:50px;color:white;font-size:20px">Log Out</button></a></div>
    </div> 
</body>
</html>