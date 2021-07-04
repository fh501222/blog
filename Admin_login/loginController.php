<?php

 class loginController
 {
     public static function login()
     {
         if (isset($_POST['action']) && $_POST['action'] == 'login') {
             $email = $_POST['Email'];
             $password = $_POST['Password'];
             $user_code = $_POST['user_code'];

             $u_m = new UserModel();
             $admin = $u_m->login($email, $password,$user_code);
             
             if ($admin) {
              // $_SESSION
               $_SESSION['admin'] = $admin;

               // var_dump($_SESSION['admin']);
         }
            if ($admin == true) {
                 header('location:index.php?page=admin/Welcome');
             } else {
                 header('location:index.php?page=login&err=Email_or_Password_incorrect');
            }
        }
       // View
         require_once './View/Templates/header.php';
         require_once './View/Templates/login.php';
         require_once './View/Templates/footer.php';
     }


    public static function logout()
     {
         session_destroy();
         header('location:index.php?page=login&err=disconnected');
     }
}
