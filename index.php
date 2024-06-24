<?php
  // Define the base path
  $base_path = 'Digital_Asset_Land';

  // Get the requested URL path
  $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

  // Remove the base path from the URL, if present
  $path = str_replace('/' . $base_path . '/', '', $path);

  // Remove leading and trailing slashes
  $path = trim($path, '/');

  // Route the request to the appropriate file
  switch ($path) {
    case '':
      $page_title = 'Home';
      require 'templates/home.php';
      break;
    case 'about':
      $page_title = 'About';
      require 'templates/about.php';
      break;
    case 'auth/login':
      $page_title = 'Login';
      require 'auth/login.php';
      break;
    case 'auth/register':
      $page_title = 'Register';
      require 'auth/register.php';
      break;
    case 'user/profile':
      require 'user/profile.php';
      break;
    case 'user/dashboard':
      require 'user/dashboard.php';
      break;
    case 'admin/dashboard':
      require 'admin/dashboard.php';
      break;
    case 'admin/crm':
      require 'admin/crm.php';
      break;
    default:
      http_response_code(404);
      echo 'Page not found!';
      break;
  }
?>