<?php
include 'config.php';
// session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>
        <div class="container">


        <button class="btn" ><a href="users.php">Add Users</a></button><br>
        <br>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Parola</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM users";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
          //imi ia ultima inregistrare
          //trebuie sa ia fiecare inregistrare in parte 
            $id=$row['id'];
            // $_SESSION['id']=$id;  
            $username=$row['user'];
            $email=$row['email'];
            $phone=$row['phone'];
            $parola=$row['parola'];
            
            echo'<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$username.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td>'.$parola.'</td>
            <td><button class="btn"><a href="update.php?id='.$id.'">UPDATE</a></button>
                <button class="btn"><a href="delete.php?id='.$id.'">DELETE</a></button>
            </td>
          </tr>';
        }
    }


    ?>
  
  </tbody>
</table>
            
        </div>


    </body>



</html>