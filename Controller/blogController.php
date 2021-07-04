<?php 

class blogController
{
    public static function blog()
    {
       
    
        // View
        require_once './View/Templates/header.php';
        require_once './View/Templates/blog.php';
        require_once './View/Templates/footer.php';
    }

}