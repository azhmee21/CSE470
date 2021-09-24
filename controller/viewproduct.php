<?php
session_start();
require_once "db.php";
?>
<head>
     <link rel="stylesheet" href="../view/css/bootstrap.min.css">
    <link rel="stylesheet" href="../view/css/css/all.min.css">
    <link rel="stylesheet" href="../view/css/css/style.css">
</head>
<?php
$email= $_SESSION['email'];

if(isset($_POST['search'])){
   
    $color=$_POST['color'];
    $jwellery=$_POST['jwellery'];
    foreach($jwellery as $t){
       
        $select="SELECT * FROM products ORDER BY id DESC WHERE type IN($t)";
        
        $res = mysqli_query($conn, $select);
        ?>
        <?php 
            while ($rowSelect = mysqli_fetch_array($res))
            {
               
                $title = $rowSelect ['title'];
                $content = $rowSelect ['content'];
                $price = $rowSelect ['price'];
            ?>
                   
                                                <div class="col-lg-3 col-sm-6 my-3">
                                                <form action="../controller/cart.php" method="post">
                                                    <div class="col-12 bg-white text-center h-100 product-item">
                                                        <div class="row h-100">
                                                            <div class="col-12 p-0 mb-3">
                                                                
                                            <input type='hidden' name='code' value="<?php echo $rowSelect ["id"]; ?>" />
                                             <img src="../controller/imageView.php?id=<?php echo $rowSelect ["id"]; ?>" style="max-height: 200px; w"/>
            
                                                            </div>
                                                            <div class="col-12 mb-3">
                                                <?php echo $title; ?>
                                             </div>
                                                            
                                                                
                                                                
                                             <div class="col-12 mb-3">
                                                  <span class="product-price">
                                                      <?php echo $price ?>
                                                  </span>
                                             </div>
                                           <div class="col-12 mb-3 align-self-end">
                                           <button class="btn btn-outline-dark" type="submit" name="cart"><i class="fas fa-cart-plus me-2"></i>Add to cart</button>
                                          </div>
                                      </div>
                                    </div>
                                    </form>
                                  </div>
            
                                 <?php 
                                 }
                              
                                ?> 
        ?>
   <?php 
   }
   echo "Hello";
   header("Location:../view/index.php");
}else{
    $sql = "SELECT * FROM products ORDER BY id  DESC";
    $result = mysqli_query($conn, $sql);
    ?>
                                        <?php 
while ($row = mysqli_fetch_array($result))
{
    $title = $row['title'];
    $content = $row['content'];
    $price = $row['price'];
?>
       
                                    <div class="col-lg-3 col-sm-6 my-3">
                                    <form action="../controller/cart.php" method="post">
                                        <div class="col-12 bg-white text-center h-100 product-item">
                                            <div class="row h-100">
                                                <div class="col-12 p-0 mb-3">
                                                    
                                <input type='hidden' name='code' value="<?php echo $row["id"]; ?>" />
                                 <img src="../controller/imageView.php?id=<?php echo $row["id"]; ?>" style="max-height: 200px; w"/>

                                                </div>
                                                <div class="col-12 mb-3">
                                    <?php echo $title; ?>
                                 </div>
                                                
                                                    
                                                    
                                 <div class="col-12 mb-3">
                                      <span class="product-price">
                                          <?php echo $price ?>
                                      </span>
                                 </div>
                               <div class="col-12 mb-3 align-self-end">
                               <button class="btn btn-outline-dark" type="submit" name="cart"><i class="fas fa-cart-plus me-2"></i>Add to cart</button>
                              </div>
                          </div>
                        </div>
                        </form>
                      </div>

                     <?php }
                    mysqli_close($conn);
                    ?> 
    <?php
}

?>

