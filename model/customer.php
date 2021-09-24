<?php
class customer{
public $name;
public $email;
public $productid;
public $productTitle;
function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function productsbought($id,$title){
      $this->productid=$id;
      $this->productTitle=$title;
  }
  function getproducts(){
    return $this->productTitle;
}
}
?>