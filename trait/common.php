<?php
    require "bank.php";

    class Common{

          use Bank;

    }
  
$obj=new Common();

$obj->abc();
echo "<br/>";
$obj->efc();



?>