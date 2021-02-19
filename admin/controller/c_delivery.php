<?php
include './model/model.php';
$obj=new models();

$pd=$obj->select($v,"invoice_details");
$emptble=$obj->select($v,"employee");
?>