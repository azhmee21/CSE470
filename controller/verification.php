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
  if (isset($_POST['submit'])){
     
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $admin="SELECT * FROM admin WHERE email='$email' AND pass='$pass'";
    if($stm=$conn->prepare($admin)){
        $stm->execute();
        $stm->store_result();
    }
    if($stm->num_rows>0){
        header("Location:../view/admin.php");
    }else{
        $sql_e="SELECT * FROM users WHERE email='$email' AND pass='$pass' ";

    
        if($stmt1 = $conn->prepare($sql_e)){
            $stmt1->execute();
           $stmt1->store_result();
        }
        if($stmt1->num_rows>0){
            $sql="SELECT username FROM users WHERE email='$email' AND pass='$pass' ";
            $_SESSION['email']=$email;
            header("Location:../view/index.php");
            
        }else{
            $_SESSION['error']="Email or password do not match";
            header("Location:../view/login.php");
        }
    }
   
    
    
  
  }else{
      echo "Not submitted";
  }
?>