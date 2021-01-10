<html>
    <head>
        <title>راه اندازی - سیستم AA</title>
        <link rel="stylesheet" href="Asstes\Update.css">
        <style>
            *{
                direction: rtl;
            }
            </style>
    </head>
    <body>
            <p>راه اندازی سیستم AA</p>
            <input type="hidden" value="1.0.0" name="V">
            <br>
            <p>لطفا توجه کنید که : </p><br>
            <form action="sqlcreator.php" method="POST">
            هاست : localhost <br>
            یوزر : root<br>
            رمز عبور : <br>
            دیتا نیم : AA <br>
            برای تغییر ، فایل server.php ، homes.php ، servers.php و dash,php را برای ویرایش باز کنید و به این شکل توجه کنید : <br>
            $db = mysqli_connect('هاست', 'نام کاربری', 'رمز عبور', 'نام جدول');<br>
            پیش فرض : <br>
            $db = mysqli_connect('localhost', 'root', '', 'AA'); <br>
            لطفا فایل را در sql خود که نام آنرا AA گذاشتید آپلود کنید.<br>
            <a href="sql.sql" class="Update">دانلود sql(قبل زدن روی دکمه زیر، این فایل را دانلود کنید.)<a><br>
            <input class="Update" type="submit" value="ادامه" name="install"></form>
    </body>
</html>