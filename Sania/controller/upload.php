<?php
session_start();
if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
    require_once "db.php";
    $imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
	$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
	$title=$_POST['title'];
    $content=$_POST['content'];
    $price=$_POST['price'];
	$latest=$_POST['Latest'];
	$type=$_POST['type'];
	$color=$_POST['color'];
	$color=strtolower($color);
	$sql = "INSERT INTO products (imageData, imageType, title, content, price, Latest,type,color)
	VALUES('{$imgData}','{$imageProperties['mime']}','$title','$content', '$price', '$latest','$type','$color')";
	$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
	if(isset($current_id)) {
		header("Location:../view/listImages.php");
	}
}
}
?>