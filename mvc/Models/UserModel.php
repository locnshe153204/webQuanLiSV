<?php
class UserModel extends db{
  public function AddUser($username,$password,$confirmPassword,$Fullname,$phoneNumber,$email) {
    $sql = "INSERT INTO User (username,password,confirmPassword,Fullname,phoneNumber,email) VALUES (?,?,?,?,?,?)";
    return mysqli_query($this->con,$sql);
  }
}
 ?>
