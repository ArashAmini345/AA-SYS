<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['V'] == '1.0.0') {
        echo('<p><br>شما از آخرین نسخه استفاده می کنید.</p>');
		header('refresh: 4; url=dashboard.php');
    } else {
        echo('لطفا ورژن جدید را الان دانلود کنید.');
		header('refresh: 4; url=dashboard.php');
    }
}
?>
<html>
<head>
    <style>
        *{
            direction: rtl;
        }
    </style>
    <title>نتیجه</title>
</head>
<body>
    <p><b>نتیجه : </b></p>
    <p>لطفا کمی صبر کنید(ری دایرکت به صفحه پیشخوان)</p><br>
    <img src="Asstes\load.gif">
</body>
</html>