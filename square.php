<?php
  function  count_squares($start, $end)
  {
       $cnt =0;
       for($i= $start; $i<=$end; $i++)
       {
            for($j =1; $j*$j <= $i; $j++)
            {
                if($j*$j == $i)
                {
                    $cnt++;
                }
            }
       }

       return $cnt;
  }

  $ans = count_squares(9,25);
  echo $ans;

?>