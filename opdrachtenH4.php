<?php

    // auteur: wissam hatat
    // functie: opdrachten  H4


//    opdracht 4.1
 $date = date("G");
 if( $date >=6 && $date < 12  ){
    echo "Het is ochtend <br>";
}else if ($date >= 12 && $date < 18 ) {
    echo " Het is middag <br>";
} else if ($date >= 18 && $date <24 ){
    echo " Het is avond <br>";
} else {
      echo " Het is nacht <br>";
} 
    //opdracht 4.2
 $date = date("G");
$result = match(true) {
    $date >=6 && $date < 12  => "Het is ochtend <br>",
    $date >= 12 && $date < 18  =>  " Het is middag <br>",
    $date >= 18 && $date <24  => "Het is avond <br>",
    default => "Het is nacht <br>", 
     }; 
     echo $result;
    
         //opdracht 4.3
     $getal1 =10;
     $getal2 = 20;
     
      $result1 = $getal2 * 2 + $getal1;

      $result2 = $getal1 * 2 + $getal2;

     if ($getal1 < $getal2){
        echo " Uitkomst: "  . $result1 ;
     } else  {
        echo " Uitkomst: "  .  $result2;
     }

        // opdracht 4.4 
        $oudeprijs = 69.95;
       
   if( $oudeprijs > 150){
    $nieuwprijs = $oudeprijs * 1.19 ;
    echo " oude prijs: € " . $oudeprijs . " Na verhouging van 19% is de prijs: €" . $nieuwprijs;
   } else if ( $oudeprijs < 55) {
    $nieuwprijs = $oudeprijs * 1.11 ;
    echo " oude prijs: € " . $oudeprijs . " Na verhouging van 11% is de prijs: €" . $nieuwprijs;
   } else {
    $nieuwprijs = $oudeprijs * 1.16 ;
    echo " oude prijs: € " . $oudeprijs . " Na verhouging van 16% is de prijs: €" . $nieuwprijs;
   }

?>