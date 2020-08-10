<?php
session_start();
if(isset($_SESSION['login_type']))
{
    header('location:page_selector.php');
}
?>
<html>
    <head>
        <title>Registration</title>
        <style>
            #sign_form
            {
                display: none;
            }
        </style>
    </head>
    <body>
        <div id="sign_form">
        <form method="POST" action="reg.php">
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
                        <select name=u_sex>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
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
                        <input type="submit" value="Sign Up">
                    </td>
                    <td>
                        <input type="button" id="Show_Log_In" value="Log In" onclick="show_li_form()">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div id="login_form">
        <form action="login.php" method="POST">
            <table>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" placeholder="Email Id" name="l_email">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="text" placeholder="password" name="l_pwd">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Log In">
                    </td>
                    <td>
                        <input type="button" id="Show_Sign_Up" value="Sign Up" onclick="show_su_form()">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </body>
    <script>
        function show_su_form()
        {
            document.getElementById("login_form").style.display="none";
            document.getElementById("sign_form").style.display="block";
        }
        function show_li_form()
        {
            document.getElementById("sign_form").style.display="none";
            document.getElementById("login_form").style.display="block";
        }
    </script>
</html>