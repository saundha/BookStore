<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register - User Registration for Book Store.</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="wrapper">
            <main>
                <?php
                require_once 'header.php';
                ?>
                <h2 style="font-family: 'Sans Serif';">Login</h2>


                <form action="login1.php" method="post">
                    <div class="rigTable">
                        <table>
                            <tr>
                                <td>Username:</td>
                                <td><input type="text" name="username" required autofocus></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="password" required></td>
                            </tr>
                            <tr>
                                <td colspan="2"><center><input type="submit" value="Login"></center></td>
                            </tr>
                        </table>
                    </div>
                </form>
                <?php
                if (isset($_REQUEST['result'])) {
                    if ($_REQUEST['result'] == "fail") {

                        echo "<p>Login failed! Either username or password is incorrect. Please try again.</p>";
                    }
                }
                ?>

