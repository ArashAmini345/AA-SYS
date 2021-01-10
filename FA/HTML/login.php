<h2>وارد شدن</h2>
	 
  <form method="post" action="login.php">
  	<?php include('/AA sys/FA/errors.php'); ?>
  	<div class="input-group">
  		<label>نام کاربری</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>رم عبور</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="Update" name="login_user">وارد شدن</button>
  	</div>
  	<p>
  		اکانت نداری؟ <a href="register.php"> یکی بساز</a>
	  </p>
</form>