<?php
function chetNechet($arg1,$arg2)
{
    $a = $arg1;
    do {
        $info = ($a == 0) ? 'ноль.' : (($a % 2 == 0 and $a != 0) ? 'чётное число.' : 'нечётное число.');
        echo $a, ' - ', $info, '<br/>';
        $a++;
    } while ($a <= $arg2);
    }
chetNechet(0,10);
?>
