<?php
$cities=[
  "Московская область"=>["Москва","Долгопрудный","Королёв","Подольск"],
    "Ленинградская область"=>["Санкт-Петербург","Выборг","Кронштадт"]
];
foreach($cities as $key=>$item){
    echo "$key:<br/>";
    $numberOfElements=count($item);
    for($i=0;$i<$numberOfElements;$i++){echo($i!=$numberOfElements-1)?"$item[$i], ":"$item[$i]<br/>";}
}
?>
