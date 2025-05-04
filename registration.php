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
        
        $stmt = $conn->prepare("INSERT INTO `user1`(`name`, `lname`, `email`, `pwd`, `gender`, `city`) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $name, $lname, $email, $pwd, $gender,$city);
        $stmt->execute();
        $stmt->close();
    }
?>