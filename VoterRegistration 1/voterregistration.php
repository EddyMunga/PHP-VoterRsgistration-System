
<?php include('voterregistration-connect.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Voter Registration System</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register to Vote</h2>
  </div>
  <form method="post" action="voterregistration.php">
  	<div class="input-group">
  	  <label>username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>emailaddress</label>
  	  <input type="email" name="emailaddress" value="<?php echo $emailaddress; ?>">
  	</div>
  	<div class="input-group">
  	  <label>userid</label>
  	  <input type="text" name="userid" value="<?php echo $userid; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Idserialnumber</label>
  	  <input type="text" name="Idserialnumber" value="<?php echo $Idserialnumber; ?>">
  	</div>
     <div class="input-group">
  	  <label>constituency</label>
  	  <input type="text" name="constituency" value="<?php echo $constituency; ?>">
  	</div>
     <div class="input-group">
  	  <label>county</label>
  	  <input type="text" name="county" value="<?php echo $county; ?>">
  	</div>
     <div class="input-group">
  	  <label>country</label>
  	  <input type="text" name="country" value="<?php echo $country; ?>">
  	</div>
     <div class="input-group">
  	  <label>ward</label>
  	  <input type="text" name="ward" value="<?php echo $ward; ?>">
  	</div>
     <div class="input-group">
  	  <label>address</label>
  	  <input type="text" name="address" value="<?php echo $address; ?>">
  	</div>
     <div class="input-group">
  	  <label>birthdate</label>
  	  <input type="text" name="birthdate" value="<?php echo $birthdate; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="voterscard.html">Voters card</a>
  	</p>
  </form>
</body>
</html>