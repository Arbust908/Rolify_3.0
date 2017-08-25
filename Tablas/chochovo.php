<?php require_once("math.php"); ?>
<?php
//Random Chochovo!
//There are six different color variations, each with its own abilities that can also be harnessed by the Chocobo Knight:
$roll = rand(0,99);
$chocoColor = "";
if ($roll == 99) {
  $chocoColor = "black";
} elseif ($roll <= 98) {
  $chocoColor = "white";
} elseif ($roll <= 88) {
  $chocoColor = "red";
} elseif ($roll <= 78) {
  $chocoColor = "blue";
} elseif ($roll <= 68) {
  $chocoColor = "brown";
} elseif ($roll <= 58) {
  $chocoColor = "green";
} elseif ($roll <= 48) {
  $chocoColor = "yellow";
} elseif ($roll == 0) {
  $chocoColor = "golden";
}
$descripcion = "";
$black = "Can use Choco Flame to attack from a distance, also has a shorter movement stat in exchange for the ability to fly. Black chocobos can fly over water and forests, but cannot fly over mountains, and may only land in forests. Once a black chocobo is landed and boarded again, it will automatically return home, but the player may find another."
$white = "Can use Choco Recharge to restore MP to one unit. Also resistant to Holy damage."
$red = "Can use Choco Meteor to do damage. The red chocobo is a type of chocobo, possessing high stats and the Choco Meteor attack to deal heavy damage to enemies. If tamed, they can be ridden by player characters. Many red chocobo appearing in a flock is considered one of the toughest battles in the game.Referred to as the Mountain Chocobo, he can ride over hills and mountains."
$blue = "Can use Choco Recharge to restore MP to one unit. Also resistant to Holy damage.There are two types of blue chocobo: the light blue River Chocobo is Choco's first upgrade, found at the Healing Shore chocograph from the Chocobo Hot and Cold minigame. This allows Choco to traverse shallow waters and reefs from beaches, but he cannot traverse the open ocean. The dark blue Sea Chocobo can cross all water and is the penultimate upgrade for Choco, found at the Green Plains chocograph."
$brown = "Can use Choco Guard to boost Defense, Magic Defense, and cast Regen on surrounding units."
$green = "Can use Choco Esuna to remove negative status effects from surrounding units."
$yellow = "The standard Choco Cure to heal surrounding units, Choco Beak to attack, and Choco Barrier to cast Shell and Protect on surrounding units."
$golden = ""
if ($chocoColor == "black") {
  $descripcion = $yellow . " " . $black;
} elseif ($chocoColor == "white") {
  $descripcion = $yellow . " " . $white;
} elseif ($chocoColor == "red") {
  $descripcion = $yellow . " " . $red;
} elseif ($chocoColor == "blue") {
  $descripcion = $yellow . " " . $blue;
} elseif ($chocoColor == "brown") {
  $descripcion = $yellow . " " . $brown;
} elseif ($chocoColor == "green") {
  $descripcion = $yellow . " " . $green;
} elseif ($chocoColor == "yellow") {
  $descripcion = $yellow;
} elseif ($chocoColor == "golden") {
  $descripcion = $yellow . " " . $black . " " . $white . " " . $red . " " . $blue . " " . $brown . " " . $green. ". Gold chocobos have the highest stats of all types, and are unaffected by all course hazards.";
}
$name = Chochovo
$size = Large
$type = beast
$alignment = unaligned
$ac = 11
$hp = 19 (3d10 + 3)
$speed = 50ft
$str = 14 (+2)
$dex = 12 (+1)
$int = 2 (-2)
$wis = 10 (+0)
$cha = 5 (-3)
$senses = passive Perception 10
$lenguages = -
$cr = 1/4 (50xp)
$action1 = beak. Melee Weapon Attack: +4 to hit, reach 5ft, one target. to Hit 6(1d8+2) slashing damage.

Chocobo Dash: allows the party to escape battle.
Chocobo Kick: deals damage based on the difference in level between target and caster.

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chocobo | Tables</title>
  </head>
  <body>
    <h2>  </h2>
    <p>

    </p><br>
  </body>
</html>
