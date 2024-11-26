<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updatebooks</title>
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
 
  
    .navbar{
            border-radius: 1.5%;
    }
          
    </style>
</head>
<body>
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
    <!-- Update Book section starts -->
    <div>
    <h1>Update Book</h1>
    <div>
        <form action="functionupdatebook.php" method="post">
            <label for="updateTitle">Enter Book Title to Update:</label><br>
            <input type="text" placeholder="Title" name="updateTitle"><br>
            <input type="text" placeholder="New Bookauthor Name" name="newBookauthorName"><br>
            <textarea name="newDescription" cols="30" rows="10" placeholder="New Description"></textarea><br>
            <input type="number" name="newPrice" placeholder="New Price">
            <input type="submit" value="Update" name="updateSubmit">
        </form>
    </div>
</div>
<!-- Update Book section ends -->
</body>
</html>