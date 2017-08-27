<?php require_once("math.php"); ?>
<?php
//Legendary Sword Name
$aD00 = [
  "king",
  "kingdom",
  "power",
  "throne",
  "war",
  "blood",
  "noble",
  "wealth",
  "lord",
  "dragon",
  "trust",
  "heart",
  "night",
  "undead",
  "protection",
  "oath",
  "betrayal",
  "dark",
  "light",
  "death",
  "beast",
  "queen",
  "castle",
  "peace",
  "lineage",
  ];
   $a = Roller($aD00);
$bD00 = [
  "killer",
  "slayer",
  "protector",
  "destroyer",
  "halter",
  "giver",
  "dealer",
  "provider",
  "stinger",
  "bringer",
  "taker",
  "striker",
  "shatterer",
  "finisher",
  "torturer",
  "waster",
  "defender",
  "guarder",
  "watcher",
  "keeper",
  "abolisher",
  "wilder",
  "gainer",
  "slasher",
  "breaker",
  "piecer",
  "crusher",
  "defeater",
  "divider",
  "dispatcher",
  "punisher",
  ];
   $b = Roller($bD00);
?>
<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Legendary Name | Tables</title>
 </head>
 <body>
   <h2> <b style="text-transform:capitalize"><?=$a?> <?=$b?></b> </h2>
   otros <br>
   <ul>
     <li><b style="text-transform:capitalize"><?=Roller($aD00)." ".Roller($bD00)?></b></li>
     <li><b style="text-transform:capitalize"><?=Roller($aD00)." ".Roller($bD00)?></b></li>
     <li><b style="text-transform:capitalize"><?=Roller($aD00)." ".Roller($bD00)?></b></li>
     <li><b style="text-transform:capitalize"><?=Roller($aD00)." ".Roller($bD00)?></b></li>
     <li><b style="text-transform:capitalize"><?=Roller($aD00)." ".Roller($bD00)?></b></li>
   </ul>

 </body>
</html>
