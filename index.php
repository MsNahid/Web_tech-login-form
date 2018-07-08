<!DOCTYPE html>
<html>
<head>
<style>
    .error {color: #FF0000;}
</style>
   <h1> Sign Up</h1>
   <h4>It's free and always will be.</h4>
</head>
<body>
    
	
	<form name="aiub" action="log_in.php" method="post">

		
		<input type="text" name="ft" placeholder="first name">
		<input type="text" name="lt" placeholder="last name">
		<br>
		<input type="text" name="mail" placeholder="Enter Email">
		<br>
		<input type="text" name="rmail" placeholder="Re-enter Email">
		<br>
		<input type="password" name="pw" placeholder="Enter your password">
		<br>
		<h1>Birthday</h1>
		
		<select>
		      <option value="">Month</option>
			 <?php
			    $months=array("jan", "feb", "mar", "april", "may", "jun", "jul","aug", "sep", "oct", "nov", "dec");
				for($i=0; $i < 12; $i++)
					echo '<option>'. $months[$i] .'</option>';
			 ?>
		</select>
		
		<select>
			<option>Day</option>
			<?php
				for ($i = 1; $i<=31;$i++)
					echo '<option>'. $i .'</option>';
			?>
		</select>
		<select>
		    <option>Year</option>
			<?php
			    for($i = 1990; $i <= 2018; $i++)
					echo '<option>'.$i.'</option>';
			?>
		</select>
		<br>
		<br>
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="male">Female
		
		<br>
		<br>
		<input type="submit" value="Sign up">
			
	</form>

	
</body>
</html>
