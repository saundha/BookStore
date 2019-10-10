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
        <main>
            <?php
            require_once 'header.php';
            ?>
            <div class="logout">
                <table>
                    <tr>
                        <th><a href="logout.php">Logout</a></th>
                    </tr>
                </table>
            </div>
            <center><h2>Add book for Book Store.</h2></center>
            <form action="add_book.php" method="post">
                <div class="rigTable">
                    <table>
                        <tr>
                            <td>Book name:</td>
                            <td><input type="text" name="bookname" required autofocus></td>
                        </tr>
                        <tr>
                            <td>Book author:</td>
                            <td><input type="text" name="bookauthor" required></td>
                        </tr>
                        <tr>
                            <td>Book price:</td>
                            <td><input type="number" name="bookprice" required></td>
                        </tr>
                        <tr>
                            <td colspan="2"><center><input type="submit" value="Add book"></center></td>
                        </tr>
                    </table>
                </div>
            </form>
            <?php
            $bookname = $_REQUEST['bookname'];
            $bookauthor = $_REQUEST['bookauthor'];
            $bookprice = $_REQUEST['bookprice'];

            if ($bookname) {
                $query = "insert into bookstore(bookname,bookauthor,bookprice)values('$bookname','$bookauthor','$bookprice');";
                $result = mysqli_query($conn, $query);

                if ($result == 1) {

                    echo "<h3 style='font-color:green;'>Book Successfully Added.</h3>";
                } else {
                    echo "<h3 style='font-color:red;'>Failed to add book.</h3>";
                }
            }
            ?>

        </main>
    </body>
</html>

