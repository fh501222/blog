<?php

class homeController
{
    public static function home()
    {
        
        // View
        require_once './View/Templates/header.php';
        require_once './View/Templates/home.php';
        require_once './View/Templates/footer.php';
    }
}
