<?php

// Working with SERVER super global variable.

echo '<pre>';
print_r($_SERVER);
echo '<pre>';

// Working with GET and POST super global variable.

if(isset($_GET['username']) && isset($_GET['password'])){
    $username = $_GET['username'];
    $password = $_GET['password'];
}
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
}

// Working with SESSION and COOKIES super global variable.
session_start();
$_SESSION['login'] = true;

if($_SESSION['login']){
    echo "Logged In.";
}

setcookie(
    'username',
    'amzad786',
    time()+10 // The cookie is expire after 10 seconds.
);

// echo $_COOKIE['username'];

// Working with FILE super global variable.


echo <<< FORM
<form method="post" enctype="multipart/form-data">
    <input type="file", name="file">
    <input type="submit", name="submit" value="Submit">
</form>
FORM;

if(isset($_POST['submit'])){
    echo '<pre>';
    print_r($_FILES['file']);
    echo '<pre>';
}