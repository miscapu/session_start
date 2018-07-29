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
//Works if session cookie was accepted
echo '<br /> <a href="page2.php">Page 2</a>';
//Or maybe pass along the session id, if needed
echo '<br /> <a href="page2.php?' . session_name() . ' =' . session_id() . '">Page 2</a>';