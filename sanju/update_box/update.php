<?php 
include "dbaction/user_add.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
	<script type="text/javascript">
	function sure(){
		if (confirm("Are you sure you want to delete this user?")){
			return true;
		}else{
			return false;
		}
	}
</script>
  </head>

  <body>
    <div class="container">
      <p>Entry of Members</p>
	
<?php
		echo "<pre>";
		print_r($users);
		echo "</pre>";
	?>		  
	
	<?php
		//step 1 (connection)
		$con=mysql_connect("localhost", "root", "");
  
		//step 2 (database)
		mysql_select_db("update_box");
  
		//step 3 SQL/get result
		$sql="SELECT * from `users`";
		$result = mysql_query($sql);						
		
    ?>

		
	<table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
				<th></th>
				<th>firstname</th>
				<th>midname</th>
				<th>lastname</th>
				<th>Username</th>
				<th>email</th>
				<th>address</th>
				<th>phone</th>
				<th>date_of_birth</th>
				<th>about</th>
				<th>Usertype</th>
				<th>created_at</th>
				<th>Action</th>
            </tr>
        </thead>
        <tbody>
		<?php 
			//step 4 (grab/process result of query)
			$i=0;
			while($row = mysql_fetch_assoc($result)){
		    $i++;
			echo "</pre>";
			
		?>
            <tr>
                <td><?php echo $i; ?></td>
				<td><?php echo $id; ?></td>
				<td><?php echo $row['first_name'];?></td>
				<td><?php echo $row['mid_name'];?></td>
				<td><?php echo $row['last_name'];?></td>
				<td><?php echo $row['username'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['phone'];?></td>
				<td><?php echo $row['dob'];?></td>
                <td><?php echo $row['about'];?></td>
				<td><?php echo $row['user_type'];?></td>
				<td><?php echo $row['created_at'];?></td>
				
				<td>
				    <a href="">view</a>
					<a onclick="# "href="dbaction/edit.php?id=<?php echo $row['id'];?>">edit</a>
					<a onclick="return sure()" href="dbaction/user_delete.php?id=<?php echo  $row['id'];?>">delete</a>
				</td>
				
				
             </tr>
			 <?php } ?>
		</tbody>
    </table>
	
<h3>ADD NEW USER </h3>
<form class="form-horizontal" action="" method="POST">
	<div class="control-group <?php if($first_name_error ){echo 'error';}?> ">
        <label class="control-label" for="firstname">firstname</label>
        <div class="controls">
            <input type="text" name="firstname" value="<?php if(isset($first_name)) echo $first_name; ?>" id="inputtext" >
				
			<?php if ($firstname_error) {?>
				<span class="help_inline"><?php echo $first_name_error ;?></span>
			<?php }?> 
				
        </div>
	</div>
	<div class="control-group <?php if($mid_name_error ){echo 'error';}?> ">
        <label class="control-label" for="mid_name">mid_name</label>
        <div class="controls">
            <input type="text" name="midname" value="<?php if(isset($mid_name)) echo $mid_name; ?>" id="inputtext" >
				
			<?php if ($mid_name_error) {?>
				<span class="help_inline"><?php echo $mid_name_error ;?></span>
			<?php }?> 
				
        </div>
	</div>
	<div class="control-group <?php if($last_name_error ){echo 'error';}?> ">
        <label class="control-label" for="last_name">last_name</label>
        <div class="controls">
            <input type="text" name="lastname" value="<?php if(isset($last_name)) echo $last_name; ?>" id="inputtext" >
				
			<?php if ($last_name_error) {?>
				<span class="help_inline"><?php echo $last_name_error ;?></span>
			<?php }?> 
				
        </div>
	</div>
	<div class="control-group <?php if($username_error ){echo 'error';}?> ">
        <label class="control-label" for="username">Username</label>
        <div class="controls">
            <input type="text" name="username" value="<?php if(isset($username)) echo $username; ?>" id="inputtext" >
				
			<?php if ($username_error) {?>
				<span class="help_inline"><?php echo $username_error ;?></span>
			<?php }?> 
				
        </div>
	</div>
	<div class="control-group <?php if($email_error ){echo 'error';}?> ">
              <label class="control-label " for="email">Email</label>
              <div class="controls">
                <input type="text" name="email" value="<?php if(isset($email)) echo $email; ?> " id="inputtext" >
				
				<?php if ($email_error) {?>
					<span class="help_inline"><?php echo $email_error ;?></span>
				<?php }?> 
              </div>
            </div>
			<div class="control-group <?php if($password_error ){echo 'error';}?> ">
				  <label class="control-label" for="password">password</label>
				  <div class="controls">
					<input type="password" name="password" value="" id="inputPassword" >
					
					<?php if ($password_error) {?>
					<span class="help_inline"><?php echo $password_error ;?></span>
				<?php }?> 
				
				  </div>
			</div>
	<div class="control-group <?php if($address_error ){echo 'error';}?> ">
        <label class="control-label" for="address">address</label>
        <div class="controls">
            <input type="text" name="address" value="<?php if(isset($address)) echo $address; ?>" id="inputtext" >
				
			<?php if ($address_error) {?>
				<span class="help_inline"><?php echo $address_error ;?></span>
			<?php }?> 
				
        </div>
	</div>
	<div class="control-group <?php if($phone_error ){echo 'error';}?> ">
        <label class="control-label" for="phone">phone</label>
        <div class="controls">
            <input type="text" name="phone" value="<?php if(isset($phone)) echo $phone; ?>" id="inputtext" >
				
			<?php if ($phone_error) {?>
				<span class="help_inline"><?php echo $phone_error ;?></span>
			<?php }?> 
				
        </div>
	</div>
	<div class="control-group <?php if($dob_error ){echo 'error';}?> ">
        <label class="control-label" for="dob">date_of_birth</label>
        <div class="controls">
            <input type="text" name="dob" value="<?php if(isset($dob)) echo $dob; ?>" id="inputtext" >
				
			<?php if ($dobe_error) {?>
				<span class="help_inline"><?php echo $dob_error ;?></span>
			<?php }?> 
				
        </div>
	</div>
	<div class="control-group">
              <label class="control-label" for="about">about</label>
              <div class="controls">
                <input type="text" name="username" value="<?php if(isset($about)) echo $about; ?>" id="inputtext" >
			<?php if ($about_error) {?>
				<span class="help_inline"><?php echo $about_error ;?></span>
			<?php }?> 	
              </div>
			</div>
			
		</div>
			<div class="control-group">
              <div class="controls">
           
                <input name="submit" type="submit" value="Add user" class="btn" />
              </div>
		</div>
</form>
	<?php
	//step 5 (close connection)
		mysql_close($con);
     ?>
  </body>
</html>
