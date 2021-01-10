<?php
include('server.php');
?>
<html>
    <head>
        <title>سایت - سیستم AA</title>
        <link rel="stylesheet" href="Asstes/Upate.css">
        <link rel="stylesheet" herf="Asstes/site.css">
    </head>
    <body>
<?php echo file_get_contents("html/header.html");?>
<?php echo file_get_contents("html/body.html");?>
<?php echo file_get_contents("html/login.php");?>
<?php echo file_get_contents("html/register.php");?>
<?php echo file_get_contents("html/footer.php");?>
    </body>
</html>