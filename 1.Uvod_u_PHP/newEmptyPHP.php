<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$newArray ['username'] = 'boris';
$newArray['password'] = 'querty';
$newArray[1]   = 'espana';
//sintaksa sa kojom uzimamo kljuc i vrednost array-a
foreach ($newArray as $key=>$values) {
    echo  $key.'--'.$values .'<br>';
    
}