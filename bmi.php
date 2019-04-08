<?php
    $gewicht = $_GET["gewicht"];
    $lengte = $_GET["lengte"];
    $help = 0;
    BMIcalc($gewicht, $lengte, $help);
    function BMIcalc($gewicht, $lengte, $help) {
      if ($lengte && $gewicht > $help) {
      $meter =  $lengte / 100;
      $resultaat = $gewicht / ($meter * $meter);
      $resultaat = round($resultaat, 1);
      echo "uw BMI is: " . $resultaat;
         if ($resultaat < 18.5) {
           echo "<br> <span style='color: #99ccff;'>Ondergewicht</span>";
         } else if ($resultaat < 25) {
           echo "<br> <span style='color: #88ff4d;'>Normaal/Gezond</span>";
         }else if ($resultaat < 27) {
          echo "<br> <span style='color: #ffff80;'>Licht overgewicht</span>";
        }else if ($resultaat < 30) {
          echo "<br> <span style='color: #ffcc00;'>overgewicht</span>";
        }else if ($resultaat < 40) {
          echo "<br> <span style='color: #ff751a;'>Obesitas</span>";
        }else if ($resultaat >= 40) {
          echo "<br> <span style='color: #ff1a1a;'>Extreme obesitas</span>";
        }
      } else {
        echo "Niks ingevuld.";
      }
    }
?>
