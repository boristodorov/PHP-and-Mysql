<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
for($i=0; $i<10; $i++) {
    echo $i. '<br>';
}



$i=3;
for (;;){
    echo $i. '<br>';
    
    if($i>10){
        break;
    }
    $i++;
}

$myAr= array('Boris', 'Dragan', 'Ivan');
for($i=0; $i<count($myAr); $i++){
    echo $myAr[$i].'<br>';
}


for ($i=0; $i<100; $i++){
    if ($i%2){
        continue;
    }
    echo $i. '<br>';
    
}

