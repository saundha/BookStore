<?php

// to avoid 'headers already sent...' warning
ob_start();
require_once 'config.php';
require_once 'header.php';
$bookname = $_REQUEST['bookname'];
$query = "select * from bookstore";
$result = mysqli_query($conn, $query);
if ($bookname == "") {
    echo "<div class='rigTable'>";
    echo "<table id='books'><tr><th>Book ID</th><th>Book Name</th><th>Book Author</th><th>Book Price</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td> " . $row['bookid'] . "</td><td>" . $row['bookname'] . "</td><td>" . $row['bookauthor'] . "</td><td>" . $row['bookprice'] . "</td></tr>";
    }
    echo "</table>";
    echo "</div>";
} elseif (isset($bookname)) {
    $bookname = $_REQUEST['bookname'];
    $query2 = "select * from bookstore where bookname like '%$bookname%'";
    $result2 = mysqli_query($conn, $query2);
    if (mysqli_num_rows($result2) > 0) {
        echo "<div class='rigTable'>";
        echo "<table id='books'><tr><th>Book ID</th><th>Book Name</th><th>Book Author</th><th>Book Price</th></tr>";
        while ($row = mysqli_fetch_assoc($result2)) {
            echo "<tr><td> " . $row['bookid'] . "</td><td>" . $row['bookname'] . "</td><td>" . $row['bookauthor'] . "</td><td>" . $row['bookprice'] . "</td></tr>";
        }
        echo "</table>";
        echo "</div>";
    } else
        echo "<h3>Could not find that book</h3>";
} else
    echo "<h3>The table is empty.</h3>";
?>