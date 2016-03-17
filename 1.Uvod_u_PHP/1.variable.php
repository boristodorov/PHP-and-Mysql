<?php
//Funkcija echo
 echo 'Boris Todorov <br>';  // Boris Todorov
 echo 'I\'m PHP <br>';// I'm PHP
 echo 'Hello ' . 'World <br>'; // Hello World
 echo 40/2 . '<br>'; // 20
 echo 4+7*2 . '<br>'; // 18
 echo (4+7)*2 . '<br>';// 22
 
 // Promenljive 
 
 $myVarr = 10 .'<br>';
 echo $myVarr ; // 10
 echo $myVarr ;
 echo $myVarr ;
 
 //Mozemo promeniti vrednost promenljive
 $myVarr='Hello<br>';
 echo $myVarr ; // Hello
 $myVarr='PHP <br>';
 echo $myVarr ; // PHP
 echo $myVarr ;
 
 $myVarr2 = 1;
 $myVarr3 = 10;
 echo $MyVarr2 + $MyVarr3; // 11
   
?>
<?php
//Konvencija za deklarisanje promenljive 
    $username = 'Boris';
   // $123 = 123; false
    $_123 = 123;
    $hereisthevaluesofusernamefromform = 'text'; //false
    //$#$%^% = 123; false
    
//PHP nije strogo tipiziran kao JAVA ili C#, sto znaci da promenljiva moze menjati tip podataka koji sadrzi
    
    $myVarr4 = 12; //12
    
    $myVarr4 = 'Text'; // Text
    echo $myVarr4;
    

 