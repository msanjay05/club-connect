<?php
session_start();
if($_SESSION['login_type']!=9)
{
    header('location:registration.php');
}
else{
    echo '<h1>Super User Panel</h1><br>'; 
}
?>
<html>
    <head>
        <title>Super User Panel</title>
    <style>
        #sign_form{
            display:none;
            margin:auto;
        }
        #usr_delete
        {
            display:none;  
            margin:auto; 
        }
        #user_list
        {
            display:none;  
        }
    </style>
</head>
<body>
<div style="float:left;width:48%;">
<button onclick="show_usr_form()" >List Authorised User</button>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button onclick="show_crt_form()" >Create Authorised User</button>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button onclick="show_dlt_form()" >Delete Authorised User</button>
    <br><br>
<div id="sign_form">
        <form method="POST" action="admin_reg.php">
            <table>
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="u_name" placeholder="Name">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="u_email" placeholder="Email">
                    </td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>
                        <input type="text" name="u_phn" placeholder="Phone">
                    </td>
                </tr>
                <tr>
                    <td>SEX</td>
                    <td>
                        <select name="u_sex" style="width:100%;">
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Club</td>
                    <td>
                        <select name="u_club" style="width:100%;">
                            <option value="CID10001">Music Club</option>
                            <option value="CID10002">Photography Club</option>
                            <option value="CID10003">Dance Club</option>
                            <option value="CID10004">Nature Club</option>
                            <option value="CID10005">Painting Club</option>
                            <option value="CID10006">Quiz Club</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="pswd1" placeholder="Password">
                    </td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>
                        <input type="password" name="pswd2" placeholder="Confirm Password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Create User">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div id="usr_delete" >
        <form action="del_usr.php" method="POST"> 
        <input type="email" name="del_email" placeholder="Delete By Email Id">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" value="Delete The User">
        </form>
    </div>
    <div id="user_list">
        <?php
        require_once('connection.php');
        $query="Select * from user_account where User_Type=1";
        $status=mysqli_query($conn,$query);
        echo "<table style='border:3px solid black;
        border-collapse:collapse;width:90%;'>";
        echo "<tr style='border:3px solid black;
        border-collapse:collapse;'><th>Name</th><th>Email</th><th>Club ID</th></tr>";
        while($row=mysqli_fetch_array($status))
        {
            echo "<tr>";
            echo "<td style='border:3px solid black;
            border-collapse:collapse;'>".$row['Name']."</td>";
            echo "<td style='border:3px solid black;
            border-collapse:collapse;'>".$row['Email']."</td>";
            echo "<td style='border:3px solid black;
            border-collapse:collapse;'>".$row['Club_Id']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
    </div>
    <div style="float:right;width:48%;height:50%;">
    <div style="margin:auto;">
    <a href='logout.php' ><button style="background:red;width:150px;height:50px;color:white;font-size:20px">Log Out</button></a></div>
    </div>
</body>
<script>
    function show_crt_form()
    {
        document.getElementById("usr_delete").style.display="none";
        document.getElementById("user_list").style.display="none";
        document.getElementById("sign_form").style.display="block";
    }
    function show_dlt_form()
    {
        document.getElementById("usr_delete").style.display="block";
        document.getElementById("sign_form").style.display="none";
        document.getElementById("user_list").style.display="none";
    }
    function show_usr_form()
    {
        document.getElementById("usr_delete").style.display="none";
        document.getElementById("user_list").style.display="block";
        document.getElementById("sign_form").style.display="none";
    }
</script>
</html>