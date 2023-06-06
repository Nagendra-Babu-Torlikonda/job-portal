<?php

$server = 'localhost';
$user = 'root';
$pass = "";
$db = 'job';

$conn = mysqli_connect('localhost:3336','root','','job');
if ($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}else{
    session_start();
    if (isset($_POST['signup']))
    {
        $firstname = $_POST['firstname'];
        if(!empty($_POST['lastname']))
            $lastname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['password-confirm'];

        if($password==$confirm_password){
            $qry = "SELECT * FROM `users` WHERE email = '$email'";
            $result = mysqli_query($conn,$qry);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            if(mysqli_num_rows($result) == 1)
            {
                echo "<h3>Email already exists</h3><a href = 'login.php'>Login Now</a>";
            }
            else
            {
                $query = "INSERT INTO `users`(name, dob, gender, email, password) VALUES ('$firstname.$lastname','$dob','$gender','$email','$password')";
                $result = $conn->query($query);
                echo "<script>alert('Successfully Registered');</script>";
                header("location:login.php");
            }
            
            
          
    }
    }
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $qry = "SELECT * FROM `users` WHERE email = '$email' and password = '$password'";
        $result = mysqli_query($conn,$qry);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(mysqli_num_rows($result) == 1)
        {
            echo "<script>alert('Login Successfull');</script>";
            header("location:home.php");
        }
        else
        {
            echo "<h3>Invalid username or password</h3><a href = 'login.php'>Try Again</a>";
        }
    }
}
?>