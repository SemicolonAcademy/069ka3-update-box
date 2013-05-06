<?php
		//step 1 (connection)
		$con=mysql_connect("localhost", "root", "");
  
		//step 2 (database)
		mysql_select_db("test");
  
		//step 3 SQL/get result
		
		$id=$_GET['id'];
		
		$sql="delete from `users` where `id` =$id ";
		mysql_query($sql);
		
		//echo "User id ".$_GET['id']." deleted";
		
		 header("location: ../array_database.php");
?>		
		