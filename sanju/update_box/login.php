<?php
	session_start();
	
	$username = $_POST['username'];	$password = $_POST['password'];		
	if ($_POST['submit'] && ($username !="" && $password !="" )) {	
	
		$password = md5($_POST['password']);		
		$con = mysql_connect("localhost", "root", "");        
		mysql_select_db("update_box");        		
		$sql = "select * from `users` where `username` = '$username' and `password` = '$password'";
		$result = mysql_query($sql);				
		$count_result = mysql_num_rows($result);
			if ($count_result == 1 ) {
				
				//echo "Login Success!";			
				//set session	
				$_SESSION['login'] = 1;
				$_SESSION['username'] = $username;
				
				//redirect to database
				header ("location: update.php");
				
				
			}else {
			
				echo "Login failed!";
			}
	} else {
			echo "Please provide username & password!";
	}
?>

<!DOCTYPE html PUBLIC>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Your Site</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
	
</head>

<body>
  
  <div id="wrapper">
    
    <div id="header">
      <h1>Your Site</h1>
    </div>
    
    <div id="body">
      
      <div id="nav">
        <div id="nav-bot">
          <ul>
            <li><a href="#">About</a></li>
          </ul>
        </div>
      </div>
      
      <div id="content">
       <div id="treasure_box">
          <h2>Treasure Box</h2>
         <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        Username: <input name="username" value="" type="text" class="input-block-level" >
        Password: <input name="password" value="" type="password" class="input-block-level" >
        <label class="checkbox">
			<input type="checkbox" value="remember-me"> Remember me
			</label>
				<button class="btn btn-large btn-primary" name="submit" type="submit">Sign in</button>
			</form> 
		</div>
		<div class="main">
			  <h2>Haven't got the account Yet???</h2>
		</div>
		<div class="main2">
			<h2>Your treasure box is waiting for u.... </h2>
			<a href="#">Click here to create your account.</a> 
        </div>
   
        <div class="clear"> </div>
    </div>

  </div>
  

</body>
</html>
