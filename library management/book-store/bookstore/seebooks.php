<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seebooks</title>
    <link rel="stylesheet" href="admin-dashboard.css">
    <style>
        .header{
            padding-left: 0px;
            padding-top: 0px;
        }
         .header-2 .navbar{
            text-decoration: none;
            background-color: green;
         }

        .header-2 .navbar a{
            text-decoration: none;
            background-color: green;
        }
   
        .title{
             text-align: left;
             padding-left: 2rem;
             text-decoration: none;
             background-color: white;
             } 

        .logo{
         text-decoration: none;
         color: black;
        }

        .header .title .logo{
         font-size: 1.9rem;
         font-weight: bolder;
        }
 
        .card{
            padding-left: 2rem;
            padding-top: 1rem;
            padding-bottom: 1rem;
            background-color: brown;
            margin-bottom: 20px;
            
        }
        .navbar{
            border-radius: 1.5%;
        }
          
    </style>
    </style>
</head>
<body>
    <!-- See Book section starts -->
    <header class="header">
    <div class="title">

        <a href="#" class="logo"> <i class="fas fa-book"></i> Book store </a>
    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="deedlogin.php">Home</a>
            <a href="admin-dashboard.php">All users</a> 
            <a href="addbooks.php">Add Book</a>
            <a href="seebooks.php">See books</a>
            <a href="deletebooks.php">Delete books</a>
            <a href="updatebooks.php">Update Book</a>
        </nav>
    </div>
</header>
    <div>
        <h1>
            See books:
        </h1>
        <div>
        <?php
         include("dbconnect.php");
         session_start();
            $sql = "select * from `books`";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                 ?>
                 <div class="card">
                    <?php
                    echo "Bookid: ".$row['Bookid']."<br> " ; 
                     echo "Booktitle: " .$row['Booktitle'] ;
                    // echo"<input type='submit' value='Update' name='update'>";
                    echo "<br>";
                    ?>
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
        </div>
    </div>
    
    <!-- See Book section ends -->
</body>
</html>