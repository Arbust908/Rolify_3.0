<?php require_once("math.php"); ?>
<?php
//Random Cultists
//d6 The cultist...
$culturistD6 = [
  "is an outspoken true believer",
  "is a raving lunatic",
  "is a quiet, fervent believer",
  "has doubts, but is devoted to the cult's leader",
  "has doubts, but is too afraid to voice them",
  "doesn't care about the religious stuff; the cult meets other needs"
  ];
   $culturist = "The cultist ".Roller($culturistD6);
//d10 The cultist wears...
$wearsD10 = [
  "a bandage on the thumb",
  "a face tattoo of a holy symbol",
  "a tattoo depicting an evil icon",
  "a string of garlic around the neck",
  "a robe with a tear at the knee",
  "a fine silk robe",
  "a large gold ring on one hand",
  "a hooded robe",
  "a robe emblazoned with a holy symbol",
  "a lush, full beard"
  ];
   $wears = "that wears ".Roller($wearsD10);
//d10 The cultist has...
$hasD10 = [
  "a ceremonial dagger in hand",
  "a book protruding from his or her pocket",
  "a large scar on the throat",
  "scraggly matted hair",
  "a shaved head",
  "scars on the wrists",
  "a protruding chin",
  "a maniacal grin",
  "a surly curl of the lip",
  "a gap between the front teeth"
  ];
   $has = "and has ".Roller($hasD10);
//d10 The cultist is...
$isD10 = [
  "humming an eerie incantation",
  "sweating profusely",
  "breathing heavily",
  "twitching nervously",
  "laughing hysterically",
  "muttering under his/her breath",
  "coughing up a lung",
  "whispering a prayer",
  "moving with a limp",
  "stinking of wine"
  ];
   $is = "The culturist is ".Roller($isD10);
//d10 The cultist is looking for...
$lookingD10 = [
  "ways to impress the cult’s leader",
  "tips for seducing the cult’s leader",
  "methods to assassinate the cult’s leader",
  "something that will impress his/her god",
  "something to eat",
  "something to kill",
  "ways to advance the cult’s goals",
  "new recruits",
  "religious scholars to debate",
  "a bottle of wine"
  ];
   $looking = "and is looking for ".Roller($lookingD10);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Culturist | Tables</title>
  </head>
  <body>
    <h2> Culturist </h2>
    <p>
    <b><?=$culturist?></b> <b><?=$wears?></b> <b><?=$has?></b>. <b><?=$is?></b> <b><?=$looking?></b>. <br>
    </p><br>
  </body>
</html>
