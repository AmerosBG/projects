<?php 
	include("header.php"); 
?>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="css/productsStyle.css">
	<ul class="listing">
<?php	
	$result = mysql_query("select * from products where name like '%$keyword%' or author like '%$keyword%' or price like '%$keyword%'", $db);

	while ($row = mysql_fetch_assoc($result)) {
		$pid = $row['pid'];
		$name = $row['name'];
		$image = $row['image'];
		$price = $row['price'];
?>

    <li class="product" style="margin-left:10px;">
      <a class="img-wrapper"  href="productsDetails.php?catid=<?php echo $catid;?>&id=<?php echo $pid;?>">
        <img src="<?php echo $image;?>" width="250"><br/>
      </a>
      
      <div class="info" >
        <div class="title"><?php echo $name;?></div>
        <div class="price"><?php echo "$".$price;?></div>
      </div>
      
      <div class="actions-wrapper" >
        <a href="#" class="add-btn wishlist">Wishlist</a>
        <a href="#" class="add-btn cart">Cart</a>
      </div>
    <br/><br/>
</li>
<?php
	}
?>

                </ul>
				</table>
				</body>
				</html>