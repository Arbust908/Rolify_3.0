<?php require_once("math.php"); ?>
<?php
//Random Mutant Creatures
//d10 The mutant creature is a...
$modD10 = [
  "tiny",
  "small",
  "medium",
  "large",
  "huge",
  "bloated",
  "skeletal",
  "sickly",
  "two-headed",
  "regenerating"
  ];
  $mod = Roller($modD10);
//d10 ...
$typeD10 = [
  "ape",
  "bat",
  "boar",
  "bull",
  "crocodile",
  "goat",
  "lion",
  "serpent",
  "spider",
  "wolf"
  ];
  $type = Roller($typeD10);
//d10 ...crossed with a/an...
$crossD10 = [
  "a displacer beast",
  "a dragon",
  "an ethereal marauder",
  "a fire beetle",
  "a griffon",
  "a nightmare",
  "an ooze",
  "an owlbear",
  "a rust monster",
  "a stirge"
  ];
  $cross = Roller($crossD10);
//d10 The creature's special abilities include...
$abilitiD10 = [
  "blindsight",
  "blood-sucking life drain",
  "burrowing",
  "a flyby attack",
  "a poisonous sting",
  "a psionic blast",
  "swallowing prey whole",
  "a tentacle grab",
  "teleportation",
  "tremorsense"
  ];
  $abiliti = Roller($abilitiD10);
//d10 ...and it exudes an aura of...
$auraD10 = [
  "befuddlement",
  "crackling lightning",
  "darkness",
  "decay",
  "flames",
  "freezing cold",
  "madness",
  "mists",
  "sleepiness",
  "terror",
  ];
  $aura = Roller($auraD10);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TE | Tables</title>
  </head>
  <body>
    <h2> Mutant <?=$type?> </h2>
    <p>
      This a <?=$mod?> <?=$type?> crossed with <?=$cross?> which abilities include <?=$abiliti?> and it exudes an aura of <?=$aura?>.
    </p><br>
  </body>
</html>
