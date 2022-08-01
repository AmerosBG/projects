<?php include("header.php"); ?>


<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="css/productsStyle.css">
<?php	
	$result = mysql_query("select * from category where cid=$catid", $db);
	$row = mysql_fetch_assoc($result);
	$catname = $row['name'];
?>
	<h1><?php echo $catname;?></h1>
	
<?php	
	$result = mysql_query("select * from products where catid=$catid", $db);
?>
<ul class="listing">
<?php
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

</body>
</html>