<?php 

class admin_viewController
{
    public static function view()
    {
       
      $u_m = new UserModel();
      $admins = $u_m->get_all_admin();

     
        // View
        require_once './View/Templates/header.php';
        require_once './View/Templates/admin_view.php';
        require_once './View/Templates/footer.php';
    }

}

