<?php
?>
<html>
    <head>
        <title>خوش آمدید - سیستم AA</title>
        <link rel="stylesheet" href="Asstes\index.css">
    </head>
    <body>
        <h1>سلام و خوش آمدید!</h1><br>
        <br>
        <a class="FARSICLASS" href="Updater.php">آپدیت کردن</a><br>
        <form action="Builder\index.php" method="POST">
        <input type="hidden" value="1" name="B">
        <input class="FARSICLASS" type="submit" value="آموزش ها"><br></form>
        <form action="Deletedata.php" method="POST">
            <input class="FARSICLASS" type="submit" value="پاک کردن دیتاها">
</form><br><a class="FARSICLASS" href="setting.php">تنظیمات</a><br>
<a href="index.php" class="FARSICLASS">خارج از اکانت</a>
    </body>
</html>