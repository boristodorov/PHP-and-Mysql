<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$isLogged = true;
/*
 * If statements, 
 */
if ($isLogged) {
    echo 'Logged <br>'; // Logged
}
else{
    echo 'Not Logged';
}
//
$varable1 = 1;

if ($varable1 < 0) {
    echo 'less';
    
}
elseif ($varable1 == 1) {
    echo 'equal <br>'; // equal
}
 else {
    echo 'more'; 
}

//Logicki operator && i ||

$username1= 'boris';
$password = 'espana';
$isAdmin = true;
if (($username1 == 'boris' || $password == 'espana') && $isAdmin==true){
    
    echo 'Correct<br>';//Correct
}
 else {
    echo 'Wrong';
}

//Uporedjivanje tipa podataka

$var4 = 1;
$var5 = '1';

if ($var4 == $var5){
    echo 'Ok';
}
/* Kod PHP tri znaka === znaci da uporedjuje vrednost promenljive i njen tip, 
 * dok dva znaka == uporedjuju samo vrednost promenljive, 
 * a jedan znak daje vrednost promenljive
*/
if ($var4 === $var5 ){
    echo 'OK';
}
 else {
    echo 'False';
}
