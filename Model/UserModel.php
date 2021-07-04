<?php

class UserModel extends connectionDb
{

    public function insert($fname,$lname,$email,$password,$country,$tel,$profession,$user_code,$img)
    {
        $admin = null;
        $sql = "INSERT INTO admin(fname,lname,email,password,country,tel,profession,user_code,img)VALUE(:fname,:lname,:email,:password,:country,:tel,:profession,:user_code,:img)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(':fname',$fname);
        $stmt->bindValue(':lname',$lname);
        $stmt->bindValue(':email',$email);
        $stmt->bindValue(':password',$password);
        $stmt->bindValue(':country',$country);
        $stmt->bindValue(':tel',$tel);
        $stmt->bindValue(':profession',$profession);
        $stmt->bindValue(':user_code',$user_code);
        $stmt->bindValue(':img',$img); 

        if($insert = $stmt->execute())
        {
           $admin = new AdminClass($insert['fname'], $insert['lname'], $insert['email'], $insert['password'],$insert['country'],$insert['tel'],$insert['profession'],$insert['user_code'],$insert['img']);
            return $admin;
        }
    }

    public function login($email, $password,$user_code)
    {
        $admin = null;
        $sql = "SELECT id, email, password, lname, fname, country, tel, profession, user_code,img FROM admin WHERE email = ?";
        $query = $this->connect()->prepare($sql);
        $query->execute(array($email));

        if ($result = $query->fetch()) {
            if(count($result) > 0 && password_verify($password,$result['password']) && $user_code == $result['user_code']){
                $admin = new AdminClass($result['fname'], $result['lname'], $result['email'], $result['password'], $result['country'],$result['tel'],$result['profession'], $result['user_code'],$result['img']);
                return $admin;
            }
            
        }
    }

    // fetch_all_admin
    function get_all_admin()
    {
        $sth = $this->connect()->prepare("SELECT email, password, lname, fname, country, tel, profession, user_code,img FROM admin");
        $sth->execute();
        $result = $sth->fetchAll(\PDO::FETCH_ASSOC);
        
         return $result;
        // var_dump($result);
    }
}
