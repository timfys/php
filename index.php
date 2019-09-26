<?php
    class Good{
        public $name;
        public $price;
        public $number;
        public function displayInfo(){
            echo('товар '.$this->name.' стоит '.$this->price.' рублей.<br/>');
        }
    }
//Количество: '.$this->number.' шт.'
    class NumberOfGood extends Good{
        public function displayInfo(){
            echo('количество: '.$this->number.' шт.');
        }
    }
    $good = new Good();
    $numberOfGood = new NumberOfGood();
    $good->name='молоко';
    $good->price=80;
    $good->number=3;
    $good->displayInfo();
    $numberOfGood->displayInfo();
?>