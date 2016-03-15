<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$var1 = 1.23;
$var2 = $var1;
var_dump($var2); // float(1.23)

$var2 = (int) $var1;
var_dump($var2); // int(1)

$var2 = (string) $var1;
var_dump($var2); // string(4)"1.23"

$var2 = (bool) $var1;
var_dump($var2); // bool(true)

$var1 = 0;

$var2 = (bool)$var1; 
var_dump($var2) // bool(false)

?>