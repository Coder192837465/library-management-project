 <html>
    <head>
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
         <!-- Delete Book section starts -->
    <div>
        <h1>Delete books:</h1>
            <div>
                <form action="functiondeletebook.php" method="post">
                    <label for="deleteTitle">Enter Book Title to Delete:</label>
                    <input type="text" placeholder="Title" name="deleteTitle">
                    <input type="submit" value="Delete" name="deleteSubmit">
                </form>
            </div>
    </div>
    <!-- Delete Book section ends -->
    </body>
 </html>

 