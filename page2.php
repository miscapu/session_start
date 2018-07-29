<?php
/**
 * @Author: Miguel Santisteban
 * @WebSite: mysqliphp.blogspot.com
 * @File:page2.php
 * @Project: Course PHP: Using session_start in PHP 7
 * */
//Starting session with session_start
session_start();
//Show in display "Welcome to page #2"
echo 'Welcome to Page #2';
//show on the screen the data entered in the superglobal session from page1.php
echo $_SESSION['favcolor'];
echo $_SESSION['animal'];
echo date('Y m d H:i:s', $_SESSION['time']);
//You may want to use SID here, like we did in page1.php
echo '<br /><a href="page1.php">Page 1</a>';

