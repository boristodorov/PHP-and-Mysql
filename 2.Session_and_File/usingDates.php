<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 * Racunari imaju dva nacina za koriscenje datuma, prvi format je humanreadable imamo godina,mesec,dan,sat,minuta 
 * prednost ovog formata je sto covek moze lako da ga razume.
 * 
 */
echo date('Y m d H:i:s T'); //2016 03 25 1:23:34 CET

/*
 *  drugi format je unixtimestamp, to je broj sekunde koje su prosle od 
 *   1.januar. 1970 godine, i to je jednostavan intiger
 */
echo time();//1458908863


$format = 'Y m d H:i:s T ';
$ts = time();
$ts -= 3600;

echo date($format, $ts);