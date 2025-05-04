
<?php
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'registration');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to fetch data
$query = "SELECT * FROM user1";
$result = mysqli_query($conn, $query);

// Check if query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Start table
echo "<h1>User Details</h1>";
echo "<table align='center' border='1' style='padding: 10px; margin: 10px; width: 100%; height: 50%;'>";
echo "<tr><th>ID</th><th>Name</th><th>Last Name</th><th>Email</th><th>password</th><th>gender</th><th>city</th><th>address</th><th>Action</th></tr>";

// Loop through each row
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>"; 
    echo "<td align='center'>".$row['id']."</td>";
    echo "<td align='center'>".$row['name']."</td>";
    echo "<td align='center'>".$row['lname']."</td>";
    echo "<td align='center'>".$row['email']."</td>";
    echo "<td align='center'>".$row['pwd']."</td>";
    echo "<td align='center'>".$row['gender']."</td>";
    echo "<td align='center'>".$row['city']."</td>";
    echo "<td align='center'>".$row['address']."</td>";
    echo "<td align='center'><button style='background-color: #fbf3d5; color: white; padding: 15px 30px; border: none; border-radius: 3px;'><a href='delete.php?deleteid=".$row['id']."'>Delete</a></button> | 
    <button style='background-color: #bbe2ec; color: white; padding: 15px 30px; border: none; border-radius: 3px;'><a href='update.php?updateid=".$row['id']."'>Update</a></button></td>";
    echo "</tr>";

}

// End table
echo "</table>";

// Close connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <link rel="stylesheet" href="addcart.css">
</head>
<body background-image="background.jpg">
        <button class='btn'><a href="regis.html">Add user</a></button>
</body>
</html>
