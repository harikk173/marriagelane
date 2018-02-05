<?php

/**
 * @file
 * This is index.php.
 */

session_start();

// Load autoloader file.
//require_once 'autoloader.php';
require 'database.class.php';
require 'controller.class.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$Controller = new AdminController;
if ('/' == $uri && isset($_SESSION['id'])) {
  
  //show home page or login page
  $Controller->homepage();
} 

elseif ('/' == $uri) {
  
  //show home page or login page
  require 'login.tpl.php';
} 

elseif ('/admin/' == $uri) {
  //show home page or login page
  $a = $_POST['password'];
  $Controller->login();
}
elseif ('/showprofile' == $uri && isset($_SESSION['admin'])) {
  //show home page or login page
  $Controller->profile();
}
elseif ('/add' == $uri && isset($_SESSION['id'])) {
  //show home page or login page
  require_once 'addpeople.tpl.php';
}
elseif ('/new_registration' == $uri && isset($_SESSION['id'])) {
  //show home page or login page
  $Controller->insert();
}
elseif('/filter' == $uri && isset($_SESSION['admin'])){
  $Controller->filter();
}
elseif('/filtered' == $uri && isset($_SESSION['admin'])){
  $Controller->filtered();
}
elseif ('/logout' == $uri) {
  $Controller->logout();
}
else {
  
  //TODO: page not found message with proper http header.
  require_once 'pagenotfound.tpl.php';
}