<?php include("header.php"); 

	if(isset($a)){
		$name = mysql_real_escape_string($n);
		$gender = mysql_real_escape_string($gender);
		$email = mysql_real_escape_string($email);
		$dob = mysql_real_escape_string($dob);
		$nat = mysql_real_escape_string($nationalities);
		$username = mysql_real_escape_string($username);
		$pass = mysql_real_escape_string($pass);
		$query = "INSERT INTO users (name,gender,email,dob,nationality,username,pass) VALUES ('$name','$gender','$email','$dob','$nat','$username', '$pass')";
		mysql_query($query, $db) or die(mysql_error());
		header("Location:index.php");
		
	}
?>

<br><br>
 <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"  onsubmit="return validate()">
  <input type="hidden" name="a" value="1"/>
    <table style="margin: 0 auto;background-color:dodgerblue;width:50%;padding:10px;">
	
  <tr>
  <th > Create your Account  </th>
  </tr>
  
  
  <tr>
  <td>Name</td>
  </tr>
  <tr>
  <td><input type="name" name="n" placeholder="enter your name" required> </td>
  </tr>
  
  <tr>
  <td> <br>Gender</td>
  </tr>
  <tr>
  <td><input type="radio" name="gender" value="female">Female
      <input type="radio" name="gender" value="Male">Male
  </td>
  </tr>
  
  <tr>
  <td><br>Email</td>
  </tr>
  <tr>
  <td><input type="email" name="email" placeholder="email@site.com" required> </td>
  </tr>
  
  <tr>
  <td>Date Of Birth</td>
  </tr>
  <tr>
  <td><input type="date" name="dob" required> </td>
  </tr>
  			<tr>
			<td> Nationality</td>
			</tr>
			<tr>
			<td> <input list="nationalities" name="nationalities" >
              <datalist id="nationalities">
              <option value="Lebanese">
              <option value="Austrian">
              <option value="Australian">
              <option value="German">
			  <option value="Russian">
			  <option value="Syrian">
              </datalist></td>
			</tr>
  <tr>
  <td>Username</td>
  </tr>
  <tr>
  <td><input type="name" name="username" placeholder="username" required> </td>
  </tr>
  
   <tr>
  <td>Password</td>
  </tr>
  <tr>
  <td><input type="password" id="pass" name="pass" placeholder="enter your password" required> </td>
  </tr>
  
  <tr>
  <td>Confirm password</td>
  </tr>
  <tr>
  <td><input type="password" id="cpass" placeholder="confirm your password" required> </td>
  </tr>
  
  <tr>
  <td> <input type="checkbox" name="accept" value="accept">I accept all rules of registration </td>
   </tr>
   
   	  <tr>
	  <td><input type="submit" value="Register" style="width: 35%;background-color: midnightblue;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;cursor: pointer;"><div id="submit"></div></td>
	  </tr>
	  
	 <tr>
     <td><input type="reset" value="Reset" style="width: 35%;background-color: midnightblue;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;cursor: pointer;"></td>
     </tr>
  </table>
  <script src="script/script.js"></script>
  </body>
  </html>