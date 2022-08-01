<?php include("header.php"); ?>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <link href="css/DetailsStyle.css" rel="stylesheet">
	
<?php
   	if(!isset($_SESSION["username"])){
		header("Location:index.php?e=1");
	}

	
		$result = mysql_query("select * from category where cid=$catid", $db);
		$row = mysql_fetch_assoc($result);
		$catname = $row['name'];
	
	
	$result = mysql_query("select * from products where pid=$id", $db);
	$row = mysql_fetch_assoc($result);
	$pid = $row['pid'];
	$name = $row['name'];
	$image = $row['image'];
	$price = $row['price'];
	$language = $row['language'];
	$date = $row['date'];
	$author = $row['author'];
	

?>

    <main class="container">
      <div class="left-column">
        <img src="<?php echo $image;?>" >
      </div>
      <div class="right-column">
        <div class="product-description">
          
          <h1><?php echo $name;?></h1>
          <p>Author:<?php echo $author;?>
		  <br/>Language: <?php echo $language;?>
          <br/>Publication Date:<?php echo $date;?>	 </p>
        </div>
        
        <div class="product-price">
          <span><?php echo "$".$price;?></span>
          <a href="#" class="cart-btn">Add to cart</a>
        </div>
      </div>
    </main>
    

	
  </body>
</html>
