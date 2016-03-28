<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$hendle = fopen('data2.txt', 'r');

$content = fread($handle, 200);
fclose($handle);