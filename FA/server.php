<?php
session_start();
// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$surc = array();

//if you wante to change address and localhost or more , this is. you can change this to:
//$db = mysqli_connect('server','username','password','tabel name')
//do not forget, this is a very request. do not delete this , if you delete this, you are delete your site.
//thanks, Arash Amini,
//creator
$db = mysqli_connect('localhost', 'root', '', 'AA');
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $role = mysqli_real_escape_string($db, $_POST['role']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "رمز دوم با رمز اول یکی نیست.");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "یوزر از قبل وجود دارد.");
    }

    if ($user['email'] === $email) {
      array_push($errors, "این ایمیل از قبل وجود دارد.");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
    $_SESSION['success'] = "اکانت شما ساخته شد.";
    array_push($surc, "اکانت ساخته شد.");
    if ($role == 'admin') {
      header('refresh: 4; url="dashboard.php"');
    } else {
      header('refresh: 4; url="udash.php"');
    }
  }
}

// login
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "یوزرنیم را وارد کنید.");
    }
    if (empty($password)) {
        array_push($errors, "رمز عبور را وارد کنید.");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "وارد شدید.";
          array_push($surc, "وارد شدید.");
          if ($role == 'admin') {
            header('refresh: 4; url="dashboard.php"');
          } else {
            header('refresh: 4; url="udash.php"');
          }
        }else {
            array_push($errors, "مشکلی پیش آمده");
        }
    }
  }
  