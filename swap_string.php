<?php 

  $str1 = "abdur";
  $str2 = "rahman";
  $str1 = $str1.$str2;
  $str2 = substr($str1,0,strlen($str1)- strlen($str2));
  $str1 = substr($str1,strlen($str2));

  echo $str1." ".$str2;
  
  
?>