<?php


function find_fibonacci($a, $b, $n)
{

    for($i=0; $i<$n-2; $i++ )
    {
       $c = $a+$b;
       $a = $b;
       $b = $c;
    }

    return $c;
}

$ans = find_fibonacci(1,1,7);
echo $ans;

?>