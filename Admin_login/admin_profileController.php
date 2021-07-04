<?php 

class admin_profileController
{
    public static function profile()
    {
       if (!isset($_SESSION['admin'])) {
           header('location:index.php?page=login');
       }

       $profile = $_SESSION['admin'];
    
        // View
        require_once './View/Templates/header.php';
        require_once './View/Templates/admin_profile.php';
        require_once './View/Templates/footer.php';
    }

}