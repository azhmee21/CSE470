<?php
session_start();
    require_once "../controller/db.php";
    
    $sql = "SELECT * FROM products ORDER BY id  DESC"; 
    $result = mysqli_query($conn, $sql);
?>
<HTML>
<HEAD>
<TITLE>List BLOB Images</TITLE>
<link href="css/imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>

 
<?php
	while($row = mysqli_fetch_array($result)) {
        $title=$row['title'];
        $content=$row['content'];
       
	?>
		<img src="../controller/imageView.php?id=<?php echo $row["id"]; ?>" /><br/>
	
<?php	
     echo $title."<br/>";
     echo $content;	
	}
    mysqli_close($conn);
?>
</BODY>
</HTML>