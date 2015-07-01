<?php
session_start();

function is_login()
{
    return (isset($_SESSION['login']) && $_SESSION['login'] == true);
}

function is_admin()
{
    return (isset($_SESSION['status_user']) && $_SESSION['status_user'] == 'admin');
}

function redirect($url = 'index.php')
{
    header('Location:'.$url);
    die();
}