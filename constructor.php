<?php 

class employee{

 public $name,$salary;


 function __construct($n,$s){

    $this->name=$n;
    $this->salary=$s;
 }

 function info(){

   echo $this->name ." = " . $this->salary."<br/>"; 

 } 

}

$obj=new employee("mainul",5000);
$obj1=new employee("rupok",6000);

$obj->info();
$obj1->info();

?>