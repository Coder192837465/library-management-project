<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addbooks</title>
    <link rel="stylesheet" href="admin-dashboard.css"> <style>
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
</head>
<body>
    <!-- Add Book section starts -->
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
        <h1>Add Book</h1>

        <div>
            <form action="functionbookcreate.php" method="post">
                <input type="text" placeholder="Title" name="title"><br>
                <input type="text" placeholder="Author Name" name="authorname"><br>
                <textarea name="description" placeholder="description" id="" cols="30" rows="10"></textarea><br>
                <input type="number" placeholder="price" name="price">
                <input type="submit" value="submit" name="submit">
            </form>
        </div>
    </div>

</body>
</html> 
    
<!-- Add Book section ends-->

</body>
</html>