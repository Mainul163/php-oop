<?php 

echo "first data"."<br/>"."second data"."<br/>";
class Calculation{

    public $a,$b,$c;
    
    function sum(){

        $this->c=$this->a + $this->b;
        return $this->c;
    }
}

$obj=new Calculation();
$obj->a=10;
$obj->b=20;
echo $obj->sum();
?>