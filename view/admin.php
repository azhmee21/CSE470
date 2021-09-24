<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pearl";
$conn = new mysqli($servername, $username, $password, $dbname);
?>
<HTML>
<HEAD>
<TITLE>Upload Image to MySQL BLOB</TITLE>
<link href="css/imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
<form name="frmImage" enctype="multipart/form-data" action="../controller/upload.php" method="post" class="frmImageUpload">
<label>Title of your post</label><br/>
<textarea name="title" style="resize: none; width:600px; height:50px;"></textarea></br>
<label>Content of your post</label><br/>
<textarea name="content" style="resize: none; width:750px; height:150px;"></textarea></br>
<label>Price of your content</label>
<input type="number" name="price"><br /><br />
<label>Is it latest? Write Yes/No"</label>
<input name="Latest" typr="file"  class="inputFile" /><br /><br />
<span>Select Type of Your product</span><br>
<span class="label">Necklace</span>
<input type="radio" name="type" value="necklace"><br />
<span class="label">Bracelet</span>
<input type="radio" name="type" value="bracelet"><br />
<span class="label">Ear ring</span>
<input type="radio" name="type" value="earring"><br />
<label>Write the color of your product</label>
<input name="color" typr="file"  class="inputFile" /><br /><br />
<br />
<label >Upload Image File:</label><br/>

<input name="userImage" type="file" class="inputFile" />

<input type="submit" value="Submit" class="btnSubmit" />
</form>
</div>
<table style="width:100%">
  <tr>
    <th>Email</th>
    <th>Product</th>
    <th>Quantity</th>
  </tr>
<?php 
$select="SELECT * FROM but";
$result=mysqli_query($conn, $select);
while ($row = mysqli_fetch_array($result)){


?>

  <tr>
    <td><?php  echo $row['userEmail'];?></td>
    <td><?php  echo $row['producttitle'];?></td>
    <td><?php  echo $row['quantity'];?></td>
  </tr>
  

<?php }?>
</table>
</BODY>
</HTML>