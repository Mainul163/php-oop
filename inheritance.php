<?php 

class Teacher{
public $name ,$salary;

function __construct($n,$s){

$this->name=$n;
$this->salary=$s;

}

function info(){

 echo "<h3> Teacher Info </h3>";
 echo "Name :".$this->name."<br/>";
 echo "Salary :".$this->salary."<br/>";
}

}

class Headmaster extends Teacher{

    public $extra=1000;

    function info(){

        echo "<h3> Headmaster Info </h3>";
        echo "Name :".$this->name."<br/>";
        echo "Salary :".$this->extra+$this->salary."<br/>";
       }


}



$obj=new Teacher("Rakib",35000);
$obj1=new Headmaster("Mainul",35000);
$obj->info();
$obj1->info();











?>