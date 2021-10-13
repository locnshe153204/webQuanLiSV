<?php
class StudentModel extends db{
  public function GetStudent() {
    $sql = "SELECT * FROM Student";
    return mysqli_query($this->con,$sql);
  }
  public function AddStudent() {

  }
  public function deleteStudent() {

  }
}
 ?>
