<?php
$JakubPokorny1 = 1;
$JakubPokorny2 = 5;
if($JakubPokorny1 <=  $JakubPokorny2){
    echo "Jakub Pokorný";
        }
if($JakubPokorny1 > $JakubPokorny2){
    echo"Jakub";
        }
else{
    echo"Pokorný";
        }
if ($JakubPokorny1 > $JakubPokorny2){
    echo"Jakub";
            
if($JakubPokorny1 == $JakubPokorny2){
   echo"Pokorný";    
           }
        }
switch ($JakubPokorny1) {
    case 1:
        echo "3";
        break;
    case 2:
        echo "4";
        break;
    case 3:
        echo "5";
        break;
    case 4:
        echo "6";
        break;
    case 5:
        echo "7";
        break;
    case 6:
        echo "8";
        break;
    default:    
        echo "Velký špatný";
        }                              
 
$produkty =  array(1 =>"op",2 =>"op1", 3 => "op2",4 =>"op3",5 =>"op4",6 =>"op5",7 =>"op6",8 =>"op7",9 =>"op8",10 =>"op9");                 
$produkty1["op"] = array( );
$produkty1["up"] = array( );
$produkty1["ip"] = array(
array('Výrobce' => 'APPLE', 
        'Model' => 'iPhone SE 2020', 
        'Baterie' => '1821', 
        'Cena' => '13000Kč', 
        'Počet fot.' => 1 ),    
array('Výrobce' => 'APPLE', 
         'typ' => 'iPhone 11 Pro', 
         'Baterie' => '3046', 
         'Cena' => '30000Kč', 
         'Počet fot.' => 3 ),   
array('Výrobce' => 'Samsung',
        'Model' => 'Galaxy S20', 
        'Baterie' => '4000', 
        'Cena' => '23000Kč', 
        'Počet fot.' => 3 ),   
array('Výrobce' => 'Google', 
        'Model' => 'Pixel 4 XL', 
        'Baterie' => '3700', 
        'Cena' => '30000Kč', 
        'Počet fot.' => 2 ),    
array('Název' => 'Google',
        'Model' => 'Pixel 4',
        'Baterie' => '2900',
        'Cena' => '20000Kč',
        'Počet fot.' => 2 ),   
array('Výrobce' => 'Samsung', 
        'typ' => 'Galaxy s10', 
        'Baterie' => '3400', 
        'Cena' => '18000Kč', 
        'Počet fot.' => 3 ),   
array('Výrobce' => 'APPLE',
        'Model' => 'iPhone Xr',
        'Baterie' => '2942', 
        'Cena' => '17000Kč',
        'Počet fot.' => 1),  
array('Výrobce' => 'Samsung',
         'Model' => 'Galaxy A40', 
         'Baterie' => '3100',
         'Cena' => '5200Kč', 
         'Počet fot.' => 2 ),     
array('Výrobce' => 'Motorola', 
        'Model' => 'One Action',
        'Baterie' => '3500', 
        'Cena' => '4600Kč', 
        'Počet fot.' => 3 ),
array('Výrobce' => 'Motorola',
        'Model' => 'One Zoom', 
        'Baterie' => '4000',
        'Cena' => '7600Kč', 
        'Počet fot.' => 4 ),
      );
var_dump($produkty);     
var_dump($produkty1); 
 ?>