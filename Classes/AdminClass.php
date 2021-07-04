<?php 

class AdminClass
{
  //private
  private $lname = '';
  private $fname = '';
  private $email = '';
  private $password = '';
  private $country = '';
  private $tel = '';
  private $profession = '' ;
  private $user_code = '';
  private $img = '';


   //Construct
   public function __construct($_lname,$_fname,$_email,$_password,$_country,$_tel,$_profession,$_user_code,$_img)
   {
      $this->lname = $_lname;
      $this->fname = $_fname;
      $this->email = $_email;
      $this->password = $_password;
      $this->country = $_country;
      $this->tel = $_tel;
      $this->profession = $_profession;
      $this->user_code = $_user_code;
      $this->img = $_img;
   }
  
   
      
   // getter
   public function getEmail()
   {
      return $this->email;
   }

   public function getLname()
   {
      return $this->lname;
   }

   public function getFname()
   {
      return $this->fname;
   }

   public function getPassword()
   {
      return $this->password;
   }

   public function getCountry()
   {
      return $this->country;
   }

   public function getTel()
   {
      return $this->tel;
   }

    public function getProfession()
   {
      return $this->profession;
   }

   public function getUser_code()
   {
      return $this->user_code;
   }

   public function getImg()
   {
      return $this->img;
   }
  
  
   // setter
  
   public function setEmail($_email){
      $this->email = $_email;
   }

   public function setLname($_lname){
      $this->lname = $_lname;
   }

   public function setFname($_fname){
      $this->fname = $_fname;
   }

   public function setPassword($_password){
      $this->password = $_password;
   }

   public function setCountry($_country){
      $this->country = $_country;
   }

   public function setTel($_tel){
      $this->tel = $_tel;
   }

   public function setProfession($_profession){
      $this->profession = $_profession;
   }

   public function setUser_code($_user_code){
      $this->user_code = $_user_code;
   }

    public function setImg($_img){
      $this->img = $_img;
   }

}