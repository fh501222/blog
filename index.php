<?php
require_once 'autoload.php';

if (!empty($_GET['page'])) {

    $page = $_GET['page'];

    if ($page == 'home') {
        homeController::home();
    }

    if ($page == 'about') {
        aboutController::about();
    }

    if ($page == 'contact') {
        contactController::contact();
    }

    if ($page == 'services') {
        servicesController::services();
    }

    if ($page == 'portfolio') {
        portfolioController::portfolio();
    }

    if ($page == 'blog') {
        blogController::blog();
    }

    if ($page == 'login') {
        loginController::login();
    }

    if ($page == 'disconnected'){ 
        loginController::logout();
     }

    if ($page == 'admin/Welcome') {
        adminController::admin();
    }

    if ($page == 'register'){ 
        registerController::register();
     }

    if ($page == 'profile'){ 
        admin_profileController::profile();
     }

    if ($page == 'view'){ 
        admin_viewController::view();
     }

       if ($page == 'edit'){ 
        admin_edit_Controller::edit();
     }
} else {
    homeController::home();
}

// find if page exists

$pages = array('home','about','contact','services','portfolio','blog','login','disconnected','admin/Welcome','register','profile','view','edit');

if (!in_array($page, $pages))
  {
  echo "<img src='https://alauddinali.com/wp-content/uploads/2020/07/podcast-banner-1060x561.jpg'>";
  }