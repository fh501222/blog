<?php 

class admin_edit_Controller
{
    public static function edit()
    {
       if (!isset($_SESSION['admin'])) {
           header('location:index.php?page=login');
       }
    
        // View
        require_once './View/Templates/header.php';
        require_once './View/Templates/edit.php';
        require_once './View/Templates/footer.php';
    }

}