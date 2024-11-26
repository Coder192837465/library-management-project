<?php
    include("dbconnect.php");
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="deed.css">
    <title>Book List</title>
    <style>
        /* Internal CSS */
        .book-container {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            width: 40%;
            margin-top: 6%;
            margin-left: 30%;
        }
        .book-title {
            font-size: 18px;
            font-weight: bold;
        }
        .book-author {
            font-style: italic;
            color: #666;
        }
        .book-description {
            margin-top: 5px;
            margin-bottom: 5px;
            
        }
        .book-price {
            font-weight: bold;
            color: #007bff; /* Blue color */
        }
        .shop-button {
            background-color: #28a745; /* Green color */
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        /* Adjustments for better spacing */
        .book-container:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<header class="header">

<div class="header-1">

    <a href="#" class="logo"> <i class="fas fa-book"></i> book store </a>

   

    <div class="icons">
        
        <div id='username'>
            <?php
            echo $_SESSION["Name"];
            ?>
            <a href="logout.php" style="font-size:1.7rem;">Logout</a>
        </div>
    </div>

</div>

<div class="header-2">
    <nav class="navbar">
        <a href="deedlogin.php">home</a>
        <a href="featured">featured</a>
        <a href="arrivals">arrivals</a>
        <a href="reviews">reviews</a>
        <a href="#about us">about us</a>
        <?php
           if ($_SESSION['role']==='admin') {
            echo "<a href='admin-dashboard.php'>Admin Dashboard</a>";
           }
           
        ?>
    </nav>
</div>

</header>
    <?php
        $sql = "SELECT * FROM `books`";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
    ?>
                <div class="book-container">
                    <form action="payment.php" method="POST">

                <!-- Hidden because no need to show this, only to use it to send to payments.php -->
                        <input type="hidden" name="Booktitle" value="<?php echo $row['Booktitle'];?>">
                        <input type="hidden" name="Bookauthorname" value="<?php echo $row['Bookauthorname']?>">
                        <input type="hidden" name="Bookprice" value="<?php echo $row['Bookprice']?>">

                        <div class="book-title"><?php echo "Booktitle: ". $row['Booktitle']; ?></div>
                        <div class="book-author"><?php echo "Author:  ".$row['Bookauthorname']; ?></div>
                        <div class="book-description"><?php echo "Description: ". $row['Bookdescription']; ?></div>
                        <div class="book-price"><?php echo "Price: ".$row['Bookprice']; ?></div>


                        <input type='submit' value='Shop' class='shop-button' name='shop'>
                    </form>
                </div>
    <?php
            }
            // Free the result set
            mysqli_free_result($result);
        } else {
            // Handle the case where the query fails
            echo "Error: " . mysqli_error($conn);
        }
    ?>
</body>
</html>
