<?php
require 'vendor/autoload.php';

session_start();

if ((!isset($_SESSION['login'])==true) && (!isset($_SESSION['password'])==true)) {
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    header('location:login.php');
}

$logado = $_SESSION['login'];

use Ravel\Treinamento\Sessao\User;

$user = new User();