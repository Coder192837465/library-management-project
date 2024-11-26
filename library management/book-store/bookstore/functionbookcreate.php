<?php
    session_start();
?>

<?php
	include("dbconnect.php");

		if (isset($_POST['submit'])){
            $title = $_POST['title'];
            $author = $_POST['authorname'];
            $description=$_POST['description'];
            $price=$_POST['price'];

		$sql="insert into books(Booktitle,Bookauthorname,Bookdescription,Bookprice,Bookadded) values ('$title','$author','$description','$price', NOW())";
		$result = mysqli_query($conn, $sql);
	     if ($result) {
		            echo "Added Successfully";
					        header("location: admin-dashboard.php");
	    }
		  else {
            echo "Error: " . mysqli_error($conn);
	   		 }

	    
		}
?>
