<?php
include 'connection.php';
$id = null;
if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $query = "SELECT * FROM `user1` WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        // Fetch data from result set
        $_row = mysqli_fetch_array($result);
        // Proceed with further operations using $row
        $name = $_row['name'];
        $lname = $_row['lname'];
        $email = $_row['email'];
        $pwd = $_row['pwd'];
        $gender = $_row['gender'];
        $city = $_row['city'];
        $address = $_row['address'];
    } else {
        die("Query failed: " . mysqli_error($conn));
    }
}


if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $sql = "UPDATE `user1` SET name=?, lname=?, email=?, pwd=?, gender=?, city=?, address=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssssi", $name, $lname, $email, $pwd, $gender, $city, $address, $id);
        if (mysqli_stmt_execute($stmt)) {
            header('location: dis.php');
            exit();
        } else {
            die("Update failed: " . mysqli_error($conn));
        }
    } else {
        die("Prepare statement failed: " . mysqli_error($conn));
    }
}
?>

<html>

<head>
    <link rel="stylesheet" href="regis.css">
</head>

<body>
    <div class="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h1>Registration</h1>
            <div class="input-box">
                <input type="text" name="name" placeholder="User Name" value="<?php echo $name; ?>">
            </div>
            <div class="input-box">
                <input type="text" name="lname" placeholder="Last Name" value="<?php echo $lname; ?>" required>
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Email Id" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-box">
                <input type="password" name="pwd" placeholder="Password" value="<?php echo $pwd; ?>" required>
            </div>
            <div class="input-box">
                <input type="text" name="gender" placeholder="Gender" value="<?php echo $gender; ?>" required>
            </div>
            <div class="input-box">
                <input type="text" name="city" placeholder="City" value="<?php echo $city; ?>" required>
            </div>
            <div class="input-box">
                <input type="text" name="address" placeholder="Address" value="<?php echo $address; ?>" required>
            </div>
            <button type="submit" name="submit" class="btn">Update</button>
        </form>
    </div>
</body>

</html>
