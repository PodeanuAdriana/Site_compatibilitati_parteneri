<?php
include 'config.php';

if(isset($_POST['trimite'])){
    
      
        $username=$_POST['username'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $select = mysqli_query($conn, $sql) or die ('Interogare nereusita !');

        if(mysqli_num_rows($select) > 0 ){
            echo "Utilizatorul deja exista !";
        }else{
            $sqli="INSERT INTO users (user,email,phone,parola) VALUES ('$username','$email','$phone','$password')";
            $select  = mysqli_query($conn, $sqli) or die('Interogare nereusita !');

            header('location:index.php');
        }
        
        // if ($select)
        // {
        //         echo "<script>alert('Solicitare transmisa administratorului'); window.location.href='index.php';</script>";
        // }
        // $vizualizezaza="SELECT * FROM users WHERE user='$username' and parola='$password'";
        // if (mysqli_query($conn, $vizualizezaza))
        // {
        // echo"Arata datele utilizatorului";
        // }
            
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <div class="inregistrare">
            <form action="register.php" method="post">
            Username: <input type="text" name="username" requiered><br>
            Email: <input type="email" name="email"requiered><br>
            Phone:<input type="text" name="phone" requiered><br>
            Password:<input type="password" name="password" requiered><br>
            <input type="submit" name="trimite" value="Inregistreaza-te!">
            </form>
        </div>
    </body>

</html>
