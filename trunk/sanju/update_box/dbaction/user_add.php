<?php

		 if(isset($_POST['submit'])){
			 $first_name = trim($_POST["first_name"]);
			 $mid_name = trim($_POST["mid_name"]);
			 $last_name = trim($_POST["last_name"]);
			 $username = trim($_POST["username"]);
			 $password = trim($_POST["password"]);
			 $email = trim($_POST["email"]);
			 $address = trim($_POST["address"]);
			 $phone = trim($_POST["phone"]);
			 $dob = trim($_POST["dob"]);
			 $about = trim($_POST["about"]);
			 if ($first_name==''){
				$error=true;
				 $first_name_error="please provide firstname";
			}
			if ($last_name==''){
				$error=true;
				 $last_name_error="please provide lastname";
			}
			 if ($username==''){
				$error=true;
				 $username_error="please provide username";
			}
			 if ($password=='' ){
				$error=true;
				$password_error="please provide password"; 
			}else{
				$password = md5($_POST["password"]);
			}
				
			if ($email==''){
				$error=true;
				$email_error="please provide email"; 
			}
			if ($address==''){
				$error=true;
				 $address_error="please provide address";
			}
			if ($phone==''){
				$error=true;
				 $username_error="please provide phone number";
			}
			if ($dob==''){
				$error=true;
				 $dob_error="please provide date of birth";
			}
			if ($about==''){
				$error=true;
				 $username_error="please provide somthing about you";
			}
			//if ($username!="" && $password!="" && $email!=""){
			if (!isset($error)){
				 $con=mysql_connect("localhost", "root", "");
				 mysql_select_db("update_box");
				 $sql = INSERT INTO `update_box`.`users` (`id`, `first_name`, `mid_name`, `last_name`, `username`, `password`, `email`, `address`, `phone`, `dob`, `about`, `created_at`) 
				 VALUES ('$id', '$first_name', '$mid_name', '$last_name', '$username', '$password', '$email', '$address', '$phone', DATE('$dob'), '$about', CURDATE('$created_at'));
				 mysql_query($sql);
				 header("location: update.php");
			 }
		}
		 
		 
		 
?>
		 
		
		