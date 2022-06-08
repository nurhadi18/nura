<?php
switch ($_GET['act']) {
default:
include "page/home.php";
break;	
case 'home':
include 'page/home.php';
break;	
case 'kelas':
include 'page/kelas/kelas.php';
break;
case 'user':
include 'page/user/user.php';
break;

}    
?>