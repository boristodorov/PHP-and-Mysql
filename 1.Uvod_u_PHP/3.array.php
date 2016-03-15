<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$myArray = array('Boris', 'Todorov', 'Dimitrovgrad');
echo $myArray[0]; //Boris
echo $myArray[1]; //Todorov
echo $myArray[2]; //Dimitrovgrad

$myArray2 = array ('Boris' , 123 , true);
$myArray2[2] = FALSE;
var_dump($myArray2[2]); // false

$myArray3 [] = 'Boris';
$myArray3 [] = 12;
$myArray3 [] = true;
        
var_dump($myArray3); // array(3) {[0]string=>"Boris" [1]int(12) [2]bool=>true}

$myArray4 [4] = 12;
$myArray4 [3] = 'Boris';
$myArray4 [8] = true;
var_dump($myArray4); // array(3) [ [4]int(12) [3]string(5)"Boris" [8]bool=> true}

$myArray5 ['username'] = 'Boris';
$myArray5 [2] = 23;
$myArray5 [8] = true;

echo $myArray5['username']; // Boris


$myArray6 [3] = 234;
$myArray6 ['username'] = 'Boris';
$myArray6 ['a'] = array(2 , 3 , 5);

print_r($myArray6); 
/*Array
(
    [3] => 234
    [username] => Boris
    [a] => Array
        (
            [0] => 2
            [1] => 3
            [2] => 5
        )

)*/

echo $myArray6['a'][1]; // 3 



