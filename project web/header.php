<?php 
	session_start();
	extract($_POST);
	extract($_GET);
	include("dbconnect.php");
	
	if(isset($x)){
		session_destroy();
		header("Location:index.php");
	}
	if(isset($username) && isset($pass)){
		$query = "SELECT pass from users WHERE username='" . mysql_real_escape_string($username) . "'"; 
		$result = mysql_query($query, $db) or die(mysql_error()); 
		$row = mysql_fetch_assoc($result); 
		if ($pass == $row["pass"]) { 
			$_SESSION["username"] = $username; 
		} else { 

			echo "Invalid username or password <br />"; 
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title> Book Shop </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/searchform.css">
<head>
<body>


<table width="100%">
  <tr>
  <td>    
      <img src="images/logo.jpg"  style="width:50%;float:left;height: 180px;" alt="Logo" />
<?php
	if(isset($_SESSION["username"])){
		echo "Welcome ".$_SESSION["username"];
		echo "<br/><a href='index.php?x=1'>Logout</a>";
	}else{
?>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <table class="loginform" id="home" style="margin-left: 150px;">
	  

	  <tr>
	  <td><b>Username</b></td>
	  <td><input type="name" name="username" placeholder="username">  </td>
	  </tr>
	  
	  <tr>
	  <td><b>Password</b></td>
	  <td><input  type="password" name="pass" placeholder=" password">  </td>
	  </tr>
	  
	  <tr>
	  <td><input type="submit" value="Log in"></td>
	  <td><a href="register.php"><strong>Register!</strong></a></td>
	  </tr>
	  
	 </table>
	</form>
<?php
	}
?>
     </table>
	  

		<div class="navbar" style=" height: 47px;">
		  <a href="index.php#home">Home</a>
		  <a href="#contact.php">Contact Us</a>
		  		  <div class="dropdown" >
			<button class="dropbtn">Products</button>
			<div class="dropdown-content">
<?php	
	$result = mysql_query("select * from category", $db);

	while ($row = mysql_fetch_assoc($result)) {
		$cid = $row['cid'];
		$name = $row['name'];
		
?>	
			<a href="products.php?catid=<?php echo $cid;?>">
			<?php echo $name;?></a>
			  <?php
	}
?>
			</div>
		  </div> 
		<form method="post" action="search.php">  
	  <div class="input-container" Style="margin-left:680px;width:50%;">
		<i class="fa fa-search icon"></i>
		<input class="input-field" type="text" name="keyword" placeholder="Search.." >
	  </div>
	  </form>
	</div>
		
</table>

