<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['theme_dark'])) {
        $installed = fopen("themeDark.txt", "w") or die("امکان ساخت فایل نبود.");
        $txt = "John Doe\n";
        fwrite($installed, $txt);
        $txt = "Jane Doe\n";
        fwrite($installed, $txt);
        fclose($installed);
        unlink('themeLight.txt');
        echo('تنظیمات انجام شد.');
        header("Refresh: 5;url=dashboard.php"); 
    } else {
        $ASD = fopen("themeLight.txt", "w") or die("امکان ساخت فایل نبود.");
        $txt = "John Doe\n";
        fwrite($ASD, $txt);
        $txt = "Jane Doe\n";
        fwrite($ASD, $txt);
        fclose($ASD);
        unlink('themeDark.txt');
        echo('تنظیمات انجام شد.');
        header("Refresh: 5;url=dashboard.php"); 
    }
}
?>