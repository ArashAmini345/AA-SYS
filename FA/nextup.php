<?php
include('servers.php');
?>
<html>
    <head>
    <style>
    </style>
        <title>راه اندازی - سیستم AA</title>
        <link rel="stylesheet" href="Asstes\Update.css">
    </head>
    <body>
		لطفا توجه داشته باشید که <br>
		فایل sql.sql را در mysql خود آپلود کنید. <br>
		هماننده اطلاعات صفحه ی قبلی <br>
    <form method="post" action="nextup.php">
  	<?php include('errors.php'); ?>
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
		  <input name="role" value="admin" type="hidden">
  	  <button type="submit" class="Update" name="reg_user">ساخت حساب و ادامه</button>
  	</div>
  </form>
    </body>
</html>