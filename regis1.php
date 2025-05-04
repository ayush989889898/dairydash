<?php
     require_once('connection.php');

    if(isset($_POST['submit'])) {
        // Retrieve form data
        $name=$_POST['name'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $pwd=$_POST['pwd'];
        $gender=$_POST['gender'];
        $city=$_POST['city'];
        $address=$_POST['address'];
        $stmt = $conn->prepare("INSERT INTO `users`(`name`, `lname`, `email`, `password`, `gender`, `city`,`address`) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss", $name, $lname, $email, $pwd, $gender,$city,$address);
        $stmt->execute();
        $stmt->close();
        header("location:login.html");
    }
?>