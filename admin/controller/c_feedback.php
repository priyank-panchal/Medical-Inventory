<?php
include 'model/model.php';
$obj=new models();

$mtble=$obj->leftjoin($v,"feedback","product","customer","feedback.p_id=product.p_id","feedback.c_id=customer.c_id");

?>