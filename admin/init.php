<?php
 include 'connect.php';
// my directories

$tpl = 'includes/templates/';
$css = 'layout/css/';
$js = 'layout/js/';
$LANG = 'includes/languages/';
 
 //include the important file
include $LANG . 'en.php';
include $tpl . 'header.inc';
#include nav  bar in all pages Except the one with $noNavbar Variable
if (!isset($noNavbar)) {include $tpl . 'navbar.php';}


