
<form action="register.php" method="POST">
<?php include('/AA sys/FA/errors.php'); ?>
  	<div class="input-group">
  	  <label>نام کاربری</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>ایمیل</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>رمز عبور</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>تکرار رمز</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
	  <input name="role" value="member" type="hidden">
  	  <button type="submit" class="Update" name="reg_user">ساخت حساب و ادامه</button>
  	</div>
  </form>