<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['AA'] == '1') {
        header('refresh: 4; url=home2.php');
    } else {
        header('location: 404.php');
    }
} else {
    header('location: 404.php');
}
?>