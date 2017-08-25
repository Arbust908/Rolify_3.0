<?php require_once("math.php"); ?>
<?php
//The summon is...
$modD10 = [
  "tiny",
  "small",
  "medium",
  "large",
  "huge",
  "skeletal",
  "two-headed"
  ];
   $mod = Roller($modD10);
   $roll = rand(0,100);
   if ($roll == 99) {
     $opD0 = [
       "godly",
       "astral",
       "legendary"
     ];
     $mod = Roller($opD0);
   } elseif ($roll == 100) {
     $opD0 = [
       "godly",
       "astral",
       "legendary"
     ];
     $mod = (Roller($opD0))." ".(Roller($modD10));
   }
   $mod .= "";
//d6 ...is adapted to survive...
$adaptedD6 = [
  "sub-zero temperatures",
  "subterranean underground living",
  "living inside a volcano",
  "scorching heat in a desert",
  "thick forest",
  "barren marshland",
  "dense jungle",
  "barren wasteland",
  "the astral plane",
  "underwater living"
  ];
   $adapted = Roller($adaptedD6);
//d6 ...it is ...
$statD6 = [
  "uncommonly strong",
  "extremely intelligent",
  "exoticly witty",
  "powerfuly nimble",
  "hardy as a rock",
  "suave and attractive"
  ];
   $statGood = Roller($statD6);
//... and...
$statD0 = [
  "of poor musculature",
  "not that smart",
  "straight minded",
  "kind of clumbsy",
  "suseptible to almost anything",
  "socially awkward"
  ];
   $statBad = Roller($statD0);
   $stat = $statGood." and ".$statBad;
   if ($statGood == "uncommonly strong" && $statBad == "of poor musculature") {
     $stat = "visible muscular";
   } elseif ($statGood == "extremely intelligent" && $statBad == "not that smart") {
     $stat = "smarter than it looks";
   } elseif ($statGood == "exocticly witty" && $statBad == "straight minded") {
     $stat = "quick thinking";
   } elseif ($statGood == "powerfuly nimble" && $statBad == "kind of clumbsy") {
     $stat = "light in its feet";
   } elseif ($statGood == "hardy as a rock" && $statBad == "suseptible to almost anything") {
     $stat = "resiliant";
   } elseif ($statGood == "suave and attractive" && $statBad == "socially awkward") {
     $stat = "good with others";
   }
   $stat .= "";
//physical modification...
$physicalD10 = [
  "a large set of wings",
  "a third eye",
  "an extra set of arms",
  "sharp claws",
  "oversized mouths and a dangerous bite",
  "venomous fangs",
  "thicker skin",
  "webbed feet and hands",
  "a pair of tentacles",
  "runic tatoos",
  "rocky scales",
  "a fu*k ton of scars",
  "couple of large fangs",
  "an extra pair of legs"
  ];
   $physical = Roller($physicalD10);
   $abiliti = "";
   if ($physical == "a large set of wings") {
     $abiliti = "a flyby attack";
   } elseif ($physical == "a third eye") {
     $extD0 = ["truesight","blindsight","a psionic blast"];
     $abiliti = Roller($extD0);
   } elseif ($physical == "an extra set of arms") {
     $abiliti = "multiple attacks at once";
   } elseif ($physical == "sharp claws") {
     $extD0 = ["burrowing","a poisonous slash","penetrating cuts" ];
     $abiliti = Roller($extD0);
   } elseif ($physical == "oversized mouths and a dangerous bite") {
     $extD0 = ["swallowing prey whole","blood-sucking life drain"];
     $abiliti = Roller($extD0);
   } elseif ($physical == "venomous fangs") {
     $abiliti = "a poisonous sting";
   } elseif ($physical == "thicker skin") {
     $abiliti = "resisting alot of hits";
   } elseif ($physical == "webbed feet and hands") {
     $abiliti = "faster movement underwater";
   } elseif ($physical == "a pair of tentacles") {
     $extD0 = ["a tentacle grab","multiple attacks at once"];
     $abiliti = Roller($extD0);
   } elseif ($physical == "runic tatoos") {
     $extD0 = ["teleportation","regenerating","truesight"];
     $abiliti = Roller($extD0);
   } elseif ($physical == "rocky scales") {
     $extD0 = ["camuflage","resisting alot of hits"];
     $abiliti = Roller($extD0);
   } elseif ($physical == "a fu*k ton of scars") {
     $abiliti = "regenerating";
   } elseif ($physical == "couple of large fangs") {
     $extD0 = ["blood-sucking life drain","burrowing","a poisonous sting"];
     $abiliti = Roller($extD0);
   } elseif ($physical == "an extra pair of legs") {
     $extD0 = ["faster movement speed","multiple attacks at once"];
     $abiliti = Roller($extD0);
   }
   $abiliti .= "";
//It is part...
$partD00 = [
  "wyvern",
  "giant spider",
  "blink dog",
  "giant ape",
  "naga",
  "displacer beast",
  "panther",
  "dire rat",
  "ape",
  "bat",
  "boar",
  "bull",
  "crocodile",
  "goat",
  "lion",
  "serpent",
  "wolf",
  "chiken",
  "fire beetle",
  "nightmare",
  "ooze",
  "rust monster",
  "stirge",
  "bat",
  "centipede",
  "monkey",
  "owl",
  "panther",
  "rat",
  "raven",
  "serpent",
  "basilisk",
  "elemental",
  "vulture",
  "dragon"
  ];
  $mix = rand(2,6);
  $parts = "";
  for ($i=0; $i < $mix; $i++) {
    $parts .= " part ".(Roller($partD00));
  }
//d10 ...and it exudes an aura of...
$auraD10 = [
  "lightning",
  "darkness",
  "decay",
  "flames",
  "holy light",
  "freezing cold",
  "madness",
  "mists",
  "sleepiness",
  "terror",
  "non-gravity",
  "fey dust",
  "rage"
  ];
  $aura = Roller($auraD10);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Summoning Beast </title>
  </head>
  <body>
    This Eidolon is a <b><?=$mod?></b> beast, <b><?=$parts?></b>, adapted to survive     <b><?=$adapted?></b>. This beast is <b><?=$stat?></b>, that has <b><?=$physical?></b> which abilities include <b><?=$abiliti?></b> and exudes an aura of <b><?=$aura?></b>.
  </body>
</html>
