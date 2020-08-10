<?php
session_start();
    if($_SESSION['login_type']!=0)
    {
        header('location:registration.php');
    }
    else{
        echo '<h1>Club Connect</h1>'; 
        
    }
?>
<html>
    <head>

</head>
<body>
    <div style="float:left;width:65%;">
    <h3>Apply For Various Post of Various Clubs</h3>
    <form action="apply.php" method="POST">
        <table style="width:30%;">
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
            <td>Positions</td>
            <td>
            <select name="u_post" style="width:100%;">
                            <option value="General Secretary">General Secretary</option>
                            <option value="Joint Secretary">Joint Secretary</option>
                            <option value="Additional Secretary">Additional Secretary</option>
                            <option value="Executive Member">Executive Member</option>
                        </select>
            </td>
            </tr>
            <tr>
                <br>
            <td>
                <input type="submit" value="Apply">
            </td>
            <td>
                <input type="reset" value="Clear">
            </td>
            </tr>
        <table>
    </form>
    </div> 
    <div style="float:right;width:35%;height:50%;">
    <div style="margin:auto;">
    <a href='logout.php' ><button type="button" style="background:red;width:150px;height:50px;color:white;font-size:20px">Log Out</button></a></div>
    </div> 
</body>
</html>