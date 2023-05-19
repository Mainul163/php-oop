<?php
    
    abstract class A{
      
        protected $name;

        abstract protected function show($n);

    }

    class B extends A{

    public function show($n){

        echo $n;
    }

    }

    $obj=new B();
    
    $obj->show("rakib");






?>