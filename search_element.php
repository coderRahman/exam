<?php
    function search($input=array(), $item)
    {
        $len_input = count($input);

        for($i=0; $i<$len_input; $i++)
        {
            if($item == $input[$i])
            {
                 return $i;
            }
        } 

        return -1;
    }

    $main_array =  array("fruit","mango","banana","juice");
    $check_input = "mang";
    echo search($main_array, $check_input);

?>