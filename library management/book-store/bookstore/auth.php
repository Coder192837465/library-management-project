<?php
    session_start();
?>
<?php
    include 'dbconnect.php';
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $Password = $_POST['password'];
    }
    $sql = "select * from `users` where Name='$username' and Password='$Password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $role=$row['role'];
        $_SESSION['Name']=$username;
        $_SESSION['role']=$role;
        header("location: deedlogin.php");

    } else {
        echo "Invalid  username or password";
    }
    ?>