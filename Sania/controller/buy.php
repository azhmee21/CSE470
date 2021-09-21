<?php
session_start();
$_SESSION['error']=" ";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pearl";
$conn = new mysqli($servername, $username, $password, $dbname);
  if(isset($_POST['checkout'])){
    $email=$_SESSION["email"];
    $sql="SELECT * FROM  cart WHERE email='$email'";
    $result=mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result))
    {
        $id=$row['productid'];
        $quantity=$row['quantity'];
        $selection="SELECT * FROM products WHERE id='$id'";
        $process=mysqli_query($conn, $selection);
        $rowCount=mysqli_fetch_array($process);
        $title=$rowCount['title'];
        $insert="INSERT INTO but(userEmail, producttitle, quantity) VALUES ('$email','$title','$quantity')";
        if(mysqli_query($conn, $insert)){
            
        }
        
    }
    $delete="DELETE  FROM cart WHERE  email='$email'";
    if(mysqli_query($conn, $delete)){
        $_SESSION['cart']=0;
        header("Location:../view/index.php");
    }else{
        echo "Error";
    }
}else{
    echo "Submit error";
}

?>