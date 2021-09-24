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
    
    $user=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $passConfirm=$_POST['password-confirm'];
    if(empty($user) && empty($user) && empty($user) && empty($user)){
        $_SESSION['error']="Fill all fields";
        header("Location:../view/register.php?Fill all fields");
    }else{
        if($passConfirm== $pass){
            $sql_u="SELECT * FROM users WHERE  username='$user' ";
            if($stmt = $conn->prepare($sql_u)){
                $stmt->execute();
                $stmt->store_result();
            }
            $sql_e="SELECT * FROM users WHERE email='$email' ";
            if($stmt1 = $conn->prepare($sql_e)){
                $stmt1->execute();
                $stmt1->store_result();
            }
            
            if($stmt->num_rows>0 || $stmt1->num_rows>0){
                $_SESSION['error']="Usename or email already exsist";
               
                header("Location:../view/register.php?Usename or email already exsist");
            }else{
                $sql="INSERT INTO users (username, email, pass) VALUES ('$user', '$email', '$pass')";
                if ($conn->query($sql) === TRUE){
                    header("Location:../view/index.php");
                }else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
           
        }else{
            $_SESSION['error']="Passwords don't match";
            header("Location:../view/register.php?error=Passwords don't match");
        }
       
    }
    
    
}
 
 
?>