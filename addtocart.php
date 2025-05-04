<?php
$connect=mysqli_connect('localhost','root','');
if(!$connect){
    // die(mysqli_error($connect));
}
// mysqli_select_db('registration');
if(isset($post['submit'])){
    $id=$_post['id'];
    $name=$_post['username'];
    $lname=$_post['lname'];
    $email=$_post['email'];
    $pwd=$_post['pwd'];
    $gender=$_post['gender'];
$query="insert into user(id,name,lname,email,pwd,gender)
values('$id',$name',' $lname', '$email','$pwd,'$gender')";
$result=mysqli_query($connect,$query);
if($result){
    header('location:display.php');
}
else{
    die(mysqli_error($connect));
}
}
?>

<html>
<head>
<link rel="stylesheet" href="regis.css">
</head>
<body>
<div class="wrapper">
<form method="post">
<h1>Registration</h1>
        <div class="input-box">
            <input type="text" name="username" placeholder="User Name" required>    
        </div>
		<div class="input-box">
<input type="text" name="lname" placeholder="Last Name" required>
</div>
<div class="input-box">
<input type="text" name="email" placeholder="Emai Id" required>
</div>
<div class="input-box">
<input type="password" name="pwd" placeholder="password" requird>
</div>
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female<br><br><br>
<label for="city" class="city"><b>City</b></label>
<select class="btn">
<option value="surat">Surat</option>
<option value="bombay">Bombay</option>
<option value="bardoli">Bardoli</option>
<option value="bharuch">Bharuch</option>
</select><br><br><br>
 <button type="submit" class="btn" name="submit">registration</button>
</div>
</form>
</body>
</html>