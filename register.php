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
                // include header file here
                require_once 'header.php';
                ?>
                <h2 style="font-family: 'Sans Serif';">Register</h2>


                <form action="register1.php" method="post">
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
                                <td colspan="2"><center><input type="submit" value="Register"></center></td>
                            </tr>
                        </table>
                    </div>
                </form>

                <?php
                // PHP code to display messages to the user

                if (isset($_REQUEST['result'])) {
                    if ($_REQUEST['result'] == "userexists") {
                        echo "User already exists";
                    } elseif ($_REQUEST['result'] == "success") {
                        echo "New user is successfully registered";
                    } elseif ($_REQUEST['result'] == "fail") {
                        echo "Something went wrong. User is not registered";
                    }
                }
                ?>
            </main>
        </div>
    </body>
</html>
