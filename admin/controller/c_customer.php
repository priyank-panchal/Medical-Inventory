<?php
include 'model/model.php';
$obj=new models();
$mtable=$obj->leftjoin2($v,"customer","area","customer.area_id=area.area_id");
?>