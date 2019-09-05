<?php
$cities=[
    "Московская область"=>["Москва","Долгопрудный","Королёв","Подольск"],
    "Ленинградская область"=>["Санкт-Петербург","Выборг","Кронштадт"]
];
foreach($cities as $key=>$item){
    echo "$key:<br/>";
    $numberOfElements=count($item);
    for($i=0;$i<$numberOfElements;$i++){
        $str=$item[$i];
        echo (mb_substr($str, 0, 1,"utf-8") == 'К')?"$item[$i]<br/>":null;
    }
}
?>
