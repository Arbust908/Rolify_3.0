<?php require_once("math.php"); ?>
<?php
//Random Legendary Beast
//d20 The legendary beast is...
$isD20 = [
  "basilisk",
  "bear",
  "chimera",
  "drake",
  "eagle",
  "griffon",
  "hound",
  "kraken",
  "lion",
  "manticore",
  "owlbear",
  "serpent",
  "shark",
  "spider",
  "stag",
  "tiger",
  "unicorn",
  "whale",
  "wolf",
  "wyvern"
  ];
   $is = Roller($isD20);
   $ext = "a";
   if ($is == "eagle" || $is == "owlbear") {
     $ext = "an";
   }
   $ext .= "";
//d10 The beast has...
$hasD10 = [
  "unnatural intelligence",
  "the power of speech",
  "an especially savage manner",
  "a frightening howl",
  "a mournful howl",
  "an immense size",
  "unusual coloration",
  "unusual markings",
  "a terrible scar on its face",
  "a terrible scar on its body",
  "a missing eye"
  ];
   $has = Roller($hasD10);

//d10 The beast is known for...
$fameD10 = [
  "slaying a well-known hero",
  "slaying a notorious villain",
  "laying ruin to a city",
  "sinking a ship",
  "scattering a caravan",
  "leaving a trail of destruction in its wake",
  "lairing in a dangerous place",
  "lairing in a holy place",
  "hunting along a well-traveled road",
  "toying with its prey before the kill",
  "protecting the people who live near it"
  ];
   $fame = Roller($fameD10);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Legendary Beast </title>
  </head>
  <body>
    <h2> The legendary <b><?=$is?></b> </h2>
    <main>
      The legendary beast is <b><?=$ext?></b> <b><?=$is?></b> that has <b><?=$has?></b> and is known for <b><?=$fame?></b>.<br>
    </main>
  </body>
</html>
