<?php
include 'config.php';
// session_start(); 
$id =$_GET['id'];
if(isset($_POST['update'])){
    // $id=$_SESSION['id'];
    // session_destroy();
   
    //if($id===$id1)
    $sql="SELECT * FROM users WHERE id='$id'";
    $select=mysqli_query($conn,$sql) or die('Nu merge !');
    if(mysqli_num_rows($select)>0){
        $ok=0;
        //if(!empty($_POST['id'])){
           // $id1=$_POST['id'];
            //$sql="UPDATE users SET id='$id'";
           // mysqli_query($conn,$sql) or die('Nu merge ID!');
           //$ok++;}
        if(!empty($_POST['username'])){
        $username=$_POST['username'];
        $sql="UPDATE users SET user='$username' WHERE id='$id'";
        mysqli_query($conn,$sql) or die('Nu merge USER!');
        $ok++;}
        if(!empty($_POST['email'])){
            $email=$_POST['email'];
            $sql="UPDATE users SET email='$email' WHERE id='$id'";
            mysqli_query($conn,$sql) or die('Nu merge EMAIL!');
            $ok++;
        }
        if(!empty($_POST['phone'])){
            $phone=$_POST['phone'];
            $sql="UPDATE users SET phone='$phone' WHERE id='$id'";
            mysqli_query($conn,$sql) or die('Nu merge TELE!');
            $ok++;
        }
        if(!empty($_POST['parola'])){
            $parola=$_POST['parola'];
            $sql="UPDATE users SET parola='$parola' WHERE id='$id'";
            mysqli_query($conn,$sql) or die('Nu merge PAROLA!');
            $ok++;
            
            
        }
        if($ok>0){
            echo'Modificare reusita!';
            
            
        }
            else
            echo 'Modificare nereusita!';
    }
    else echo'ID negasit!';
    
}
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css"
</head>
<body>
<div class="Formular">
<form action="" method="POST">
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

            <button type="submit" class="btn" name="update">Update</button>
            <button tpe="back"class="btn" name="back"><a href="display.php">Back</a></button>
</form>
</div>

</body>
</html>