<?php
    include("dbconnect.php");
    session_start();

    if(!isset($_POST['Booktitle'])){
    header("Location:../shopbooks.php");
    exit();
    }

?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {



        // Retrieve the book title,authorname and price from the form
        $Booktitle = $_POST['Booktitle'];
        $Bookauthorname = $_POST['Bookauthorname'];
        $Bookprice = $_POST['Bookprice'];

    // echo $Booktitle;
    // echo $Bookauthorname;
    // echo $Bookprice;




        // Process the payment for the book with this ID
        // You can implement your payment logic here
    }

    else {
            // Handle the case where the query fails
            echo "Error: " . mysqli_error($conn);
        }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Payment
    </h1>

    <!-- Do it like this OR directly show all the values via the form -->
    <p>
        Book Title:
    </p>

    <p>
        <?php echo $Booktitle;?>
    </p>
    <p>
        Book Author Name:
    </p>
    
    <p>
        <?php echo $Bookauthorname;?>
    </p>
    <p>
        Book Price:
    </p>
    
    <p style="font-weight: 900; font-size:1.4rem; padding:10px 10px 10px 10px;">
        <?php echo $Bookprice;?>
    </p>

    <form action="#" method="POST">

    <!-- For example, like this you dum dum, 
    dont forget to add php wala bracket in values -->

        <!-- <input type="text" name="Booktitle" value=" php echo $Booktitle;?>">
        <input type="text" name="Bookauthorname" value=" php echo $Bookauthorname;?>">
        <input type="text" name="Bookprice" value=" php echo $Bookprice;?>"> -->

        <input type="hidden" name="Booktitle" value=" <?php echo $Booktitle;?>">
        <input type="hidden" name="Bookauthorname" value=" <?php echo $Bookauthorname;?>">
        <input type="hidden" name="Bookprice" value=" <?php echo $Bookprice;?>">
        
        <input type="submit" value="Pay">
    </form>
</body>
</html>
