<?php
/**
 * Created by PhpStorm.
 * User: avanger
 * Date: 12/8/15
 * Time: 10:20 PM
 */

session_start();

$login = $_POST['email'];
$password = $_POST['password'];

if ($login==="ravelmello3@icloud.com" && $password==="123") {
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    header("Location:../index.php");
} else {

    unset($_SESSION['login']);
    unset($_SESSION['password']);
    header('location:../login.php');

}
