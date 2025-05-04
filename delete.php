<?php
$connect=mysqli_connect('localhost','root','','registration');
if(!$connect){
    die(mysqli_error($connect));
}
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM user1 WHERE id='$id'";
    $result=mysqli_query($connect,$sql);
    if($result){ 
       header('location:dis.php');
    }
    else{
        die(mysqli_error($connect));
    }
}
?>