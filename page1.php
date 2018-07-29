<?php
/*
 * @Author: Miguel Santisteban
 * @WebSite: mysqliphp.blogspot.com
 * @File:page1.php
 * @Project: Course PHP: Using session_start in PHP 7
 * */
//Starting Session with session_start
session_start();
//Show in Screen 'Welcome to page #1'
echo "Welcome to page #1";
//Using the superglobal $_SESSION to save data
$_SESSION['favcolor'] = 'blue';
$_SESSION['animal'] = 'fish';
$_SESSION['time'] = time();

