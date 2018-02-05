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
if ('/' == $uri) {
  
  //show home page or login page
  $Controller->homepage();
} 
elseif ('/admin/' == $uri) {
  //show home page or login page
  $Controller->login();
}
elseif ('/showprofile' == $uri) {
  //show home page or login page
  $Controller->profile();
}
elseif ('/add' == $uri) {
  //show home page or login page
  require_once 'addpeople.tpl.php';
}
elseif ('/new_registration' == $uri) {
  //show home page or login page
  $Controller->insert();
}
elseif ('/logout') {
  $Controller->profile();
}
else {
  
  //TODO: page not found message with proper http header.
  require_once 'pagenotfound.tpl.php';
}