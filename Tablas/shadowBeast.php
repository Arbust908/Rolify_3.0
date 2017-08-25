<?php require_once("math.php"); ?>

<?php
//Random Shadow Beast

//d12 The shadow beast is...
$typeD12 = [
  " bat",
  " centipede",
  " monkey",
  "n owl",
  " panther",
  " rat",
  " raven",
  " serpent",
  " spider",
  " vulture",
  " wolf",
  " wyvern"
  ];
  $type = Roller($typeD12);

//d8 The beast has...
$hasD8 = [
  "dark, sinister eyes",
  "pale, glowing eyes",
  "dark stripes",
  "dark markings",
  "eerie grey coloration",
  "venomous fangs",
  "blackened teeth",
  "an aura of gloom",
  "an odor of death"
  ];
  $has = Roller($hasD8);


//d6 ...and...
$hasD6 = [
  "can disappear into shadows",
  "can teleport in a swirl of shadows",
  "moves without a sound",
  "speaks in rhymes and riddles",
  "gives you an uneasy feeling",
  "a mournful howl"
  ];
  $has .= " and ".(Roller($hasD6));

//d8 The beast is looking for...
$preyD8 = [
  "a soul to devour",
  "dead flesh to eat",
  "something to kill",
  "a place to lair among ghosts",
  "the location of an ancient lich's tomb",
  "a dark hole in which to wait for prey",
  "someone to listen to its tale of terror and death",
  "the loathsome mage who summoned it"
  ];
  $prey = Roller($preyD8);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Random Shadow Beast | Tables</title>
  </head>
  <body>
    <h2> Random Shadow Beast </h2>
    <p>
    A <?=$type?> is salking you, it has <?=$has?> and is looking for <?=$prey?>. <br>
    </p><br>
  </body>
</html>
