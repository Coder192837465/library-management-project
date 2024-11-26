<?php

	include("dbconnect.php");

		if (isset($_POST['Submit'])){
		$username = $_POST['Name'];
		$email = $_POST['Email'];
		$password = $_POST['Password'];
    
	
		$sql="insert into users(Name,Email,Password,role) values ('$username','$email','$password','customer')";
		$result = mysqli_query($conn, $sql);
	     if ($result) {
		              echo "Sign Up Successfully";
					        header("location: index.php");
	    }
		  else {
		        echo "Error in Sign Up: " ;
	   		 }

	    
		}
?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Sign Up</title>
		 <link rel="stylesheet" href="deed.css"> 
     	<style>
		#sign-in-wrapper{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		body {
        	background-image: url(signuppic.webp);
        }

		#wrapper{
			display: flex;
			justify-content: center;
			align-items: center;
		}
        #box {
            width: 300px;
            margin: 20px auto;
            padding: 10px;
            background-color: white;
            border-radius: 10px;
            text-align: center;
        }

        form {
            font-size: 20px;
            margin: 10px;
            color: black;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        #button {
            background-color: lightblue;
            color: white;
            cursor: pointer;
        }

        #button:hover {
            background-color: darkblue;
		}
		 </style>

	</head>
<body id="sign-in-wrapper">
	 <div id="wrapper">
		<div id="box">
				<form method="post" >
				<div>
					<h2 id="signup">SIGN UP</h2>
				</div>
					<label for="Name">Username:</label>
					<input id="Name" name="Name" type="text" placeholder="Username" required>
					E:mail
					<br>
					<input type="email" id="Email" name="Email" placeholder="Email">
					Password:<br>
					<input id="Password" type="password" name="Password" placeholder="Password" required>
					<br>
		
					<input id="button" type="submit" name="Submit" value="Signup"><br>
		
					<a href="index.php">Click to Login</a><br>
				</form>
			</div>
	 </div>
</body>

</html>
