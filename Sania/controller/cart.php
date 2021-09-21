<?php 
session_start();
$_SESSION['error']=" ";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pearl";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  if(isset($_POST['cart'])){
   
   echo "Yeahhhhh"."<br>";
     $code=$_POST['code'];
     
   
    $email= $_SESSION['email'];
    $check="SELECT * FROM cart WHERE email='$email' AND productid='$code'";
    $result=mysqli_query($conn, $check);
    $rowcount=mysqli_num_rows($result);
    if($rowcount>0){
      header("Location:../view/index.php");
    }else{
      $_SESSION['cart']=$_SESSION['cart']+1;
      $insert="INSERT INTO cart(email,productid,quantity) VALUES('$email', '$code','1')";
      if($conn -> query($insert)){
         header("Location:../view/index.php");
      }
    }
       }
    if(isset($_POST['delete'])){
      $code=$_POST['code'];
      $email= $_SESSION['email'];
      $delete="DELETE FROM cart WHERE email='$email' AND productid='$code'";
      if($conn -> query($delete)){
        $_SESSION['cart']=$_SESSION['cart']-1;
        header("Location:../view/viewcart.php");
        echo "r";
      }else{
        echo("Error description: " . $conn -> error);
      }
    }
    if(isset($_POST['update'])){
      $quantity=$_POST['quantity'];
      $code=$_POST['code'];
      $email= $_SESSION['email'];
      $update="UPDATE cart SET quantity='$quantity' WHERE email='$email' AND productid='$code'";
      if($conn -> query($update)){
        header("Location:../view/viewcart.php");
      }     
      else{
        echo("Error description: " . $conn -> error);
      }
    }
 

?>