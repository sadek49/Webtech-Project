
<?php
    session_start();
    //print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
<link rel="stylesheet" href="../assets/style_login.css">
</head>
<body>
    <div class="login-container">
        <form action="../controllers/loginCheck.php" method="post">
            <fieldset>
                <legend>Login</legend>
                <table>
                    <tr>
                        <td>USERNAME/EMAIL:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="username" value="">
                        </td>
                    </tr>


                    <tr>
                        <td>PASSWORD:</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="password" value="">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" name="remember_me"> <label> Remember me</label>
                        </td>
                        <td><a href="forgotpassword.php"> Forgot Password?</a></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Sign In"></td>
                    </tr>

                    <tr>
                        <td>Don't Have an Account?</td>
                        <td><a href="signup.php"> Sign Up</a></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>