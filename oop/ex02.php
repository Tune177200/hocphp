<?php 
class Calc{
    public $result = 0;
    public $a = 0, $b = 0;

    public function makeTotal(){
        $total = $this->a + $this->b;
        $this->result = $total;
    }
    public function getResult(){
        return $this->result;

    }

    public function setA($value){
        $this->a = $value;
    }

    public function setB($value){
        $this->b = $value;
    }
}

$calc = new Calc();
$calc->setA(10);
$calc->setB(20);
$calc->makeTotal(); //Tính tổng và gán thuộc tính result
// echo $calc->result.'</br>';
echo $calc->getResult().'</br>';