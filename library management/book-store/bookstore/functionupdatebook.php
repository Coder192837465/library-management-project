<?php
    include("dbconnect.php");
    session_start();

    if (isset($_POST['updateSubmit'])) {
        $updateTitle = mysqli_real_escape_string($conn, $_POST['updateTitle']);
        $newAuthorName = mysqli_real_escape_string($conn, $_POST['newBookauthorName']);
        $newDescription = mysqli_real_escape_string($conn, $_POST['newDescription']);
        $newPrice = mysqli_real_escape_string($conn, $_POST['newPrice']);

        $updateSql = "UPDATE `books` SET BookauthorName = '$newAuthorName', Bookdescription = '$newDescription', Bookprice = '$newPrice' WHERE Booktitle = '$updateTitle'";
        $updateResult = mysqli_query($conn, $updateSql);

        if ($updateResult) {
            echo "Book updated successfully.";
        } else {
            echo "Error updating book: " . mysqli_error($conn);
        }
    }
?>
