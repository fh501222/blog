<?php

class adminController
{
    public static function admin()
    {
        if(!isset($_SESSION['admin'])){
            header('location:index.php?page=login');
        }

        $admin = $_SESSION['admin'];
          // var_dump($admin->getImg());
        
        
        // View
        require_once './View/Templates/header.php';
        require_once './View/Templates/admin.php';
        require_once './View/Templates/footer.php';
    }
}