<?php
abstract class Good{
        private $name;
        function showName($name){
            echo 'Товар '.$name.'<br/>';
        }
        abstract function viewInfo();
}
class WeightGood extends Good{ //товар на вес
        public $weight; //вес в кг
        public $priceForKg; //цена за кг
        function getResult(){
            return ($this->weight)*($this->priceForKg);
        }
        function viewInfo(){
            echo 'Масса: '.$this->weight.' кг. , цена за кг: '.$this->priceForKg.' р. , стоимость: '.$this->getResult().' р.<br/>';
        }
}    
class PieceGood extends Good{ //штучный товар
    public $countPieces;//количество товара в штуках
    public $priceForPiece;//цена за 1 шт.
    function getResult(){
        return ($this->countPieces)*($this->priceForPiece);
    }
    function viewInfo(){
        echo $this->countPieces.'шт., '.$this->priceForPiece.' р. итого: '.$this->getResult().' рублей.<br/>';
    }
}
class DigitalGood extends PieceGood{ //цифровой товар
    public $price;
    function viewInfo(){
       echo 'стоимость - '.$this->price.' р.<br/>';
    }
}
$weightgood = new WeightGood;
$weightgood->weight=2;
$weightgood->priceForKg=60;
$weightgood->showName('яблоко');
$weightgood->viewInfo();
$piecegood = new PieceGood;
$piecegood->showName('конфеты');
$piecegood->countPieces=4;
$piecegood->priceForPiece=80;
$piecegood->viewInfo();
$digitalgood = new DigitalGood;
$digitalgood->showName('аудиокнига');
$digitalgood->price=$piecegood->getResult()*0.5;
$digitalgood->viewInfo();
?>