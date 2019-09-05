<?php
  function underScore($arg){
      $space=[" "=>"_"];
      return strtr($arg, $space);
  }
  $string="Проверяем, есть ли нижние подчеркивания";
  echo underScore($string);
?>
