<?php require_once("math.php"); ?>
<?php
//Random Infernal Dungeon
//d6 This place is a/an...
$isD6 = [
  "an icy cave",
  "a stone labyrinth",
  "a series of dark, steamy tunnels",
  "an iron-walled storage vault",
  "an evil temple",
  "an inescapable prison",
  "an ancient monastery"
  ];
   $is = Roller($isD6);
//d6 This place is located…
$locatedD6 = [
  "near an infernal gate",
  "beneath an infernal palace",
  "at the edge of an infernal realm",
  "deep within an infernal realm",
  "beneath a city in the mortal world",
  "in a remote location in the mortal world"
  ];
   $located = Roller($locatedD6);
//d6 Major feature: You see a/an...
$majorD6 = [
  "evil altar",
  "magically-crafted colonnade",
  "large relief depicting twisted humanoids",
  "mural depicting skeletons and flames",
  "nest belonging to some sort of beast",
  "set of double doors carved to resemble the mouth of a great beast"
  ];
   $major = Roller($majorD6);
//d6 Minor feature: You see a...
$minorD6 = [
  "icon to an evil god",
  "small statue of an imp",
  "statue of a gargoyle",
  "pile of twisted bones",
  "row of chains and shackles",
  "rack of implements of torture",
  "creepy chandelier",
  "wall sconce"
  ];
   $minor = Roller($minorD6);
//d6 NPC: You meet a/an…
$npcD6 = [
  "hapless prisoner",
  "enslaved soul",
  "fast-talking imp",
  "patrolling spined devil",
  "enterprising warlock",
  "sycophantic cultist"
  ];
   $npc = Roller($npcD6);
//d6 Beast: You meet a/an…
$beastD6 = [
  "bat",
  "raven",
  "scorpion",
  "serpent",
  "stirge",
  "wolf",
  ];
   $beast = Roller($beastD6);
//d6 Secondary Monster: You come upon a/an…
$redHD6 = [
  "bearded devil",
  "chain devil",
  "horned devil",
  "erinyes",
  "hell hound",
  "nightmare"
  ];
   $redH = Roller($redHD6);
//d6 Primary monster: This place is currently ruled by a/an…
$bossD6 = [
  "half-fiend vampire lord",
  "ascendant dark sorceress",
  "especially clever ice devil",
  "particularly ambitious pit fiend",
  "fiendish dragon",
  "infernal prince"
  ];
   $boss = Roller($bossD6);
//d6 Traps/hazard: You must survive the…
$challD6 = [
  "scything blades",
  "poisonous gas",
  "nauseating fumes",
  "erupting spouts of fire",
  "rivers of flame",
  "spiked portcullis traps"
  ];
   $chall = Roller($challD6);
//d6 Reward/treasure: If you survive, you may find a/an...
$rewardD6 = [
  "a flaming longsword",
  "an unbreakable helm",
  "a tome of infernal summoning",
  "a rod of shadow and death",
  "a vast collection of soul gems",
  "an imprisoned ancient hero"
  ];
   $reward = Roller($rewardD6);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TE | Infernal Dungeon</title>
  </head>
  <body>
    <h2> Infernal Dungeon </h2>
    <p>
      You find <b><?=$is?></b> <b><?=$located?></b> where you find a <b><?=$major?></b> and a <b><?=$minor?></b>.<br>
      You'll find a <b><?=$npc?></b> that can help you because <b><?=$beast?></b>s and  <b><?=$redH?></b>s are tring to hunt you.<br>
      On top of that you have to survive <b><?=$chall?></b> and kill the <b><?=$boss?></b> that is the owner of this place. If you do you'll get   <b><?=$reward?></b>.<br>
    </p><br>
  </body>
</html>
