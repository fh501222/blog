<?php 

class registerController
{
    public static function register()
    {
         if(!isset($_SESSION['admin'])){
            header('location:index.php?page=login');
         }

        // $register = $_SESSION['admin'];

         if (isset($_POST['action']) && $_POST['action'] == 'register') {
             $fname = $_POST['fname'];
             $lname = $_POST['lname'];
             $email = $_POST['email'];
             $password = $_POST['password'];
             $country = $_POST['country'];
             $tel = $_POST['tel'];
             $pro = $_POST['profession'];
             $user_code = $_POST['user_code'];
             $img = $_POST['img'];
             $hash_pass = password_hash($password,PASSWORD_DEFAULT);

              // object
             $admin_register = new UserModel();
             $register = $admin_register->insert($fname,$lname,$email,$hash_pass,$country,$tel,$pro,$user_code,$img);

            if($register == true)
            {
                header('location:index.php?page=login');
            }
         }
    
        // View
        require_once './View/Templates/header.php';
        require_once './View/Templates/register.php';
        require_once './View/Templates/footer.php';
    }

}