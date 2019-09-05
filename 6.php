<?php
$myArray=[
  "Зима"=>[1=>"Декабрь",2=>"Январь",3=>"Февраль"],
    "Весна"=>[1=>"Март",2=>"Апрель",3=>"Май"],
    "Лето"=>[1=>"Июнь",2=>"Июль",3=>"Август"],
    "Осень"=>[1=>"Сентябрь",2=>"Октябрь",3=>"Ноябрь"]
];
?>
<!DOCTYPE html>
<html>
 <head>
   <title>!DOCTYPE</title>
   <meta charset="utf-8">
 </head>
 <body>
    <ul class="nav nav-tabs">
    <?php foreach ($myArray as $season=>$months):?>
     <li class="nav-item dropdown">
     <a class=""nav-link dropdownn-toggle" data-toggle="dropdown" href="#"
     role="button" aria-haspopup="true"
     aria-expanded="false"><?= $season?></a>
     <div class="dropdown-menu">
      <?php foreach ($months as $number => $month): ?>
      <a class="dropdown-item" href="#"><?=$month?></a>
      <?php endforeach; ?>
      </div>
      </li>
      <?php endforeach; ?>
 </body>
</html>


