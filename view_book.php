<?php
ob_start();
require_once 'check_session.php';
require_once 'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add book for Book Store.</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php
        // include header file here
        require_once 'header.php';
        ?>
        <div class="logout">
            <table>
                <tr>
                    <th><a href="logout.php">Logout</a></th>
                </tr>
            </table>
        </div>
    <center><h2>View books in Book Store.</h2></center>
    <form action="view_book1.php" method="post">
        <div class="rigTable">
            <table>
                <tr>
                    <td>Book name:</td>
                    <td><input type="text" name="bookname"  autofocus></td>
                </tr>
                <tr>
                    <td colspan="2"><center><input type="submit" value="Search book"></center></td>
                </tr>
            </table>
        </div>
    </form>


</body>
</html>
