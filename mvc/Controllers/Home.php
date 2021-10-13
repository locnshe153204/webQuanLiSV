<?php
class Home extends controller{

  public $Student;

  public function __construct() {
    //Model
    $this->Student = $this->model("StudentModel");
  }
  public function sayhi() {
      //Views
      $this->view("MasterLayout1",["Page"=>"DetailsLayout1","Student"=>$this->Student->GetStudent()]);
  }
  function ABC($num1,$num2) {
    echo $num1." - ".$num2;
  }
}
 ?>
