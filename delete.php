<?php
include 'config.php';
// session_start(); 
$id =$_GET['id'];
//este preluat id-ul in pagina   
    $sql="SELECT * FROM users WHERE id='$id'";
   $select=mysqli_query($conn,$sql) or die("Interogare nefacuta!"); 
   if(mysqli_num_rows($select))
   {
        $stergere="DELETE FROM users WHERE id= '$id'";
        mysqli_query($conn,$stergere)or die("Interogare nefacuta!");
        echo"Utilizator sters cu succes!";
        echo'<button><a href="display.php">Back</a></button>';
    }
/*if(isset($_POST['delete']))
{
 
  
  
    
   

}
else{
echo'nu intra in isset!';
}
*/
?>
