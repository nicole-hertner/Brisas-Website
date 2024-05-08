<?php

$title = "Kurs";

require_once __DIR__."/inc/header.php";
require_once __DIR__."/view/mainnav.php";
?>



<table border="1">
  <?php
        for($i=1; $i <= 10; $i++)
           {
            echo "<tr>";
            for($j=1; $j <= 10; $j++)
               {
                echo "<td>".$i*$j."</td>";
               }
          echo "</tr>";
        }
   ?>
</table>




<style>
        td {
            width: 40px;
            height: 40px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>


<table>
        <?php
        for ($i = 1; $i <= 8; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 8; $j++) {
                $class = ($i + $j) % 2 == 0 ? 'white' : 'black';
                echo "<td class='$class'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

   

    <table>
        <?php
        for ($i = 1; $i >= 7; $i++) {
            echo "<tr>";
            for($j = 1; $j <= 7; $j++)
               {
                echo "<td>".$i+$j."</td>";
               }
          echo "</tr>";
        }
   ?>
</table>


<?php
echo "<table>";

for ($i = 1; $i <= 7; $i++) {
    echo "$i + $j";
}
?>




