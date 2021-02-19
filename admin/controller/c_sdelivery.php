<?php
include 'model/model.php';
$obj=new models();
$m_tble=$obj->join3($v,"delivery","invoice_details","employee","delivery.In_id=invoice_details.In_id","delivery.e_id=employee.e_id");

?>