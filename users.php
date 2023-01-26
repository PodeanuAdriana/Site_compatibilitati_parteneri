<?php
require 'config.php';
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $parola=$_POST['parola'];

    $inserare="INSERT INTO users(user,email,phone,parola)VALUES('$username','$email','$phone','$parola')";
    $result=mysqli_query($conn,$inserare);
    if($result){
        //echo"Date introduse!";
        header('location:display.php');
    }
    else{
        die(mysqli_error($conn));
    }


}
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css"
</head>
<body>
<div class="Formular">
<form method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="username">
        </div><br>
        <div class="form-group">
        <label>EMAIL</label>
        <input type="email" class="form-control" placeholder="Enter your email" name="email">
    </div><br>
    <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control" placeholder="Enter your number" name="phone">
    </div><br>
    <div class="form-group">
        <label>Parola</label>
        <input type="password" class="form-control" placeholder="Enter your password" name="parola">
    </div><br>

            <button type="submit" class="btn" name="submit">Trimite</button>
</form>
</div>

</body>
</html>