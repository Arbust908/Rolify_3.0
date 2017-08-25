<?php require_once("math.php"); ?>
<?php
$first = [
  "Deep",  "Bleak",  "Cold",  "Shriek",  "Wind",  "Dragon's ",  "Dark",  "Honey",  "Stone",  "Old",  "Grey",  "Dead",  "Silver",  "High",  "Gold",  "Sky",  "East",  "Winter",  "North",  "Frost",  "Under",  "Blizzard"
  ];
  $a = Roller($first);

$second = [
  "Stone", "Water", "Winter", "Rock", "Dragon", "Grave", "Moor", "Spine", "Wind", "Shade", "Glow", "Helm", "Point", "Arch", "Bridge", "Shadow", "Haven", "Leap", "Steed", "Gate"
  ];
  $b = Roller($second);

$third = [
  "Hall", "Farm", "Redoubt", "Temple", "Grotto", "Barrow", "Shrine", "Overlook", "Cave", "Hollow", "Vale", "Cavern", "Valley"
  ];
  $c = Roller($third);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> PLace Name | TE </title>
  </head>
  <body>
    <h3>The place is : <b> <?=$a." ".$b." ".$c?> </b>.</h3>
  </body>
</html>
