<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 * 
 * specificno za php je to da su 0 i false isto
 */

$number1 = '0';
var_dump((bool)$number1); // false 

$number1= '-1';
var_dump((bool)$number1); // true 

$number1 = 'hello';
var_dump((int)$number1); // int(0)
/*
 * Kada konvertujemo string u integer i ako string ne pocinje sa negom cifrom, 
 * kada se konvertuje u intiger dobijamo rezultat 0.
 */
$number1 = '1234hello';
var_dump((int)$number1); // int(1234)
/*
 * Kada konvertujemo string koji ima pocetne znakove kada se kovertuje u intiger
 * php ce uzeti samo one simbole koje koji su brojevi i konvertovati u integer
 */
echo '123'+'244'; // 367
echo 'hello' + 'world';// 0
/*
 * Echo funkcija prvo konvertuje stringove a zatim izvrsava aritmeticku operaciju
 */