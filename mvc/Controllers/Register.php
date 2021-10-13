<?php
class Register extends controller {
  public $User;

  public function __construct() {
    //Model
    $this->User = $this->model("UserModel");
  }

  public function sayhi() {
      //Views
      $this->view("MasterLayout1",["Page"=>"RegisterLayout"]);
  }

  public function Process() {
    $this->view("MasterLayout1",["Page"=>"RegisterLayout"]);
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = $POST['password'];
      $confirmPassword = $POST['confirmPassword'];
      $Fullname = $POST['Fullname'];
      $phoneNumber = $POST['phoneNumber'];
      $email = $POST['email'];

      $this->view("MasterLayout1",["Page"=>"RegisterLayout","User"=>$this->User->AddUser($username,$password,$confirmPassword,$Fullname,$phoneNumber,$email)]);
    }
  }
}
 ?>
