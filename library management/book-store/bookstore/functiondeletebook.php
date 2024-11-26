<?php
    include("dbconnect.php");
    session_start();

    if (isset($_POST['deleteSubmit'])) {
        $deleteTitle = mysqli_real_escape_string($conn, $_POST['deleteTitle']);

        $deleteSql = "DELETE FROM `books` WHERE Booktitle = '$deleteTitle'";
        $deleteResult = mysqli_query($conn, $deleteSql);

        if ($deleteResult) {
            echo "Book deleted successfully.";
        } else {
            echo "Error deleting book: " . mysqli_error($conn);
        }
    }
?>
