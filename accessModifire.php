<?php
    class Teacher{
        
     protected $name;


     public function __construct($n){

        $this->name=$n;
      
        
        }

     protected function info(){
         
        echo "Name : ".$this->name;

     }

    }

      
    class Headmaster extends Teacher {

    public function show(){
        echo "Name : ".$this->name;
    }

    }

    $obj=new Headmaster("Rakib");
    $obj->show();
 

?>