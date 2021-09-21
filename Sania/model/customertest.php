<?php 
include('customer.php');
$customer=new customer();
$customer->set_name('Arnob Rahee');
echo $customer->get_name()."<br />";
$customer->productsbought(2,"Indonesian Pearl");
echo $customer->getproducts();
?>