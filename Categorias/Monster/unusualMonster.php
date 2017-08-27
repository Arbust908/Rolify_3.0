<?php require_once("math.php"); ?>

<?php
//Reskinning Monster Generator (Humanoids)
//d8 These monsters use the base template of
$baseD8 = [
  "goblins",
  "hobgoblins",
  "kobolds",
  "orcs",
  "lizardfolk",
  "ogres",
  "bugbears",
  "gnolls"
  ];
   $base = Roller($baseD8);

//d6 They have an increased ability attribute
$modD6 = [
  "uncommonly strong (STR +4)",
  "extremely intelligent (INT +4)",
  "exocticly witty (WIS +4)",
  "powerfuly nimble (DEX +4)",
  "hardy as a rock (CON +4)",
  "suave and attractive (CHA +4)"
  ];
   $mod = Roller($modD6);

//d6 They have adapted physically to the following environment
$adaptedD6 = [
  "sub-zero temperatures",
  "subterranean underground living",
  "living inside a volcano",
  "scorching heat in a desert",
  "thick forest",
  "barren marshland",
  "dense jungle",
  "barren wasteland"
  ];
   $adapted = Roller($adaptedD6);

//d6 They are different from the base monster because of their
$diffD6 = [
  "organisation and discipline",
  "aggression and shock tactics",
  "stealth and guerrilla tactics",
  "skirmishing tactics",
  "supreme intellect",
  "knowledge of their environment"
  ];
   $diff = Roller($diffD6);

//d10 They have the following physical anomaly
$physicalD10 = [
  "a large set of wings",
  "a third eye",
  "blindsight",
  "an extra set of arms",
  "sharp claws",
  "oversized mouths and a dangerous bite",
  "venomous fangs",
  "faster movement speed",
  "thicker skin",
  "webbed feet and hands",
  "darkvision",
  "tremorsense",
  "truesight"
  ];
   $physical = Roller($physicalD10);

//d12 Their weapon of choice is the
$weaponD12 = [
  "javelin",
  "sling",
  "greataxe",
  "flail",
  "mace",
  "greatsword",
  "whip",
  "crossbow",
  "scythe",
  "trident",
  "pike",
  "shuriken"
  ];
   $weapon = Roller($weaponD12);

//d6 In battles, these clans are usually lead by a
$leaderD6 = [
  "elected chieftain",
  "powerful warlord",
  "crafty tactician",
  "skilled tracker",
  "skilled bounty hunter",
  "mentally-insane priest",
  "a powerful spellcaster"
  ];
   $leader = Roller($leaderD6);
   $n = rand(1,100);
   if ($n == 100) {
     $leader = "a demi-God";
   } elseif ($n > 80) {
     $leader = "an elder dragon polymorphed";
   }

//d12 They domesticate the following beasts to hunt with them
$petD12 = [
  "dire wolves",
  "drakes",
  "wyverns",
  "giant spiders",
  "blink dogs",
  "gibbering mouthers",
  "giant apes",
  "nagas",
  "displacer beasts",
  "gricks",
  "panthers",
  "dire rats"
  ];
   $pet = Roller($petD12);
   $d = rand(1,100);
   if ($d == 100) {
     $pet = "an astral dragon";
   } elseif ($d > 80) {
     $pet = "young dragons";
   }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TE | Exotic Clan</title>
  </head>
  <body>
    <h2> Exotic Clan </h2>
    <p>
      This exotic clan of <b><?=$base?></b> are <b><?=$mod?></b>, adapted to <b><?=$adapted?></b> and fight with <b><?=$diff?></b>.<br>
      They are abnormal because they have <b><?=$physical?></b>, they all use <b><?=$weapon?></b> and they charge into battle lead by <b><?=$leader?></b> on their domestic <b><?=$pet?></b>.<br>
    </p><br>
  </body>
</html>
