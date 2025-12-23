<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup Page</title>
</head>
<body>
        <form action="../controllers/signupCheck.php" method="post" enctype="">
            <fieldset>
            <legend>Signup Page</legend>
            <table>
                <tr>
                    <td>FULL NAME: </td>
                    <td><input type="text" name="fullname" value="" placeholder="ENTER FULL NAME"></td>
                </tr>
                <tr>
                    <td>USERNAME: </td>
                    <td><input type="text" name="username" value="" placeholder="ENTER UNIQUE USERNAME"></td>
                </tr>

                <tr>
                    <td>EMAIL: </td>
                    <td><input type="email" name="email" value="" placeholder="example@email.com"></td>
                </tr>

                <tr>
                    <td>DATE OF BIRTH</td>
                
                    <td><input type="date" name="dob"></td>
                </tr>

                <tr>
                    <td>GENDER: </td>
                    <td>
                        <input type="radio" name="gender" value="male"> Male <br>
                        <input type="radio" name="gender" value="female"> Female <br>
                        <input type="radio" name="gender" value="other"> Other <br>
                    </td>
                </tr>
                
                <tr>
                    <td>PASSWORD: </td>
                    <td><input type="password" name="password" id="password" value="" placeholder="ENTER PASSWORD"></td>
                </tr>
                <tr>
                    <td>CONFIRM PASSWORD:</td>
                    <td><input type="password" name="confirmpassword" id="confirmpassword" value="" placeholder="CONFIRM PASSWORD"></td>
                </tr>


                <tr>
                    <td>ADDRESS:</td>
                    <td>
                    <textarea name="address" rows="4" cols="30" placeholder="Enter your address"></textarea>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="SIGN UP">
            
                    </td>
                </tr>

                <tr>
                    
                    <td></td>
                    <td>
                        Already Have an Account?
                        <a href="login.php"> Sign In</a>
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
</body>
</html>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup Page</title>
    <link rel="stylesheet" href="../assets/style_signup.css">
</head>
<body>

<div class="signup-container">
    <form class="signup-form" action="../controllers/signupCheck.php" method="post">
        <fieldset>
            <legend>Signup Page</legend>

            <table>
                <tr>
                    <td>FULL NAME:</td>
                    <td><input type="text" name="fullname" placeholder="ENTER FULL NAME"></td>
                </tr>

                <tr>
                    <td>USERNAME:</td>
                    <td><input type="text" name="username" placeholder="ENTER UNIQUE USERNAME"></td>
                </tr>

                <tr>
                    <td>EMAIL:</td>
                    <td><input type="email" name="email" placeholder="example@email.com"></td>
                </tr>

                <tr>
                    <td>DATE OF BIRTH:</td>
                    <td><input type="date" name="dob"></td>
                </tr>

                <tr>
                    <td>GENDER:</td>
                    <td>
                        <input type="radio" name="gender" value="male"> Male <br>
                        <input type="radio" name="gender" value="female"> Female <br>
                        <input type="radio" name="gender" value="other"> Other
                    </td>
                </tr>

                <tr>
                    <td>PASSWORD:</td>
                    <td><input type="password" name="password" id="password" placeholder="ENTER PASSWORD"></td>
                </tr>

                <tr>
                    <td>CONFIRM PASSWORD:</td>
                    <td><input type="password" name="confirmpassword" id="confirmpassword" placeholder="CONFIRM PASSWORD"></td>
                </tr>

                <tr>
                    <td>ADDRESS:</td>
                    <td><textarea name="address" rows="4" cols="30" placeholder="Enter your address"></textarea></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="SIGN UP"></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        Already Have an Account?
                        <a href="login.php">Sign In</a>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>

</body>
</html>
