<?php
   
   $servername="localhost";
   $username="root";
   $pasword="";
   $dbname="project";
   
   if(!$conn = mysqli_connect($servername,$username,$pasword,$dbname))
   {
    die("failed to connect".mysqli_connect_error());
   }
   

?>