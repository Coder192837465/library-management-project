<?php
    include("dbconnect.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
    <div>
        <h1>Add Book</h1>
        <div>
            <form action="functionbookcreate.php" method="post">
                <input type="text" placeholder="Title" name="title">
                <input type="text" placeholder="Author Name" name="authorname">
                <textarea name="description" id="" cols="30" rows="10"></textarea>
                <input type="number" name="price">
                <input type="submit" value="submit" name="submit">
            </form>
        </div>
    </div>
</body>
</html>
