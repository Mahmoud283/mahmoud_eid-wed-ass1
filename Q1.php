<?php

 $arr=[2,4,1,99,5,9,1000,7];
 $max=$arr[0];
 $min=$arr[0];
 foreach($arr as $num)
 {    
    if($max <= $num)
    {
        $max=$num;
    }
    elseif($min >=$num)
    {
       $min=$num;
    }
 }
 echo "the max is number = $max <br>";
 echo "the min is number = $min <br>";

 //anothor solution
 $arr=[2,4,1,99,5,9,7];
 $max=$arr[0];
 $min=$arr[0];
 for($i=0 ;$i<count($arr);$i++)
 {    
    
    if($max < $arr[$i])
    {
        $max=$arr[$i];
    }
    elseif($min > $arr[$i])
    {
       $min=$arr[$i];
    }
 }
 echo "the max is number = $max <br>";
 echo "the max is number = $min <br>";
 ?>