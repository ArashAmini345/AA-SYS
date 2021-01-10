<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) and isset($_POST['password'])) {
        if (!empty($_POST['username']) and !empty($_POST['password'])) {
            if (isset($_POST['register'])) {
                # Register User
            } elseif (isset($_POST['login'])) {
                # Login User
            }
        }
    }
}