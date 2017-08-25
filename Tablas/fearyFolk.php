<?php require_once("math.php"); ?>
<?php
//Random Faeriefolk
//d12 The faerie is...
$isD12 = [
  "A capricious nymph",
  "An apprehensive nymph",
  "A playful nymph",
  "A nervous pixie",
  "A cheerful pixie",
  "A carefree pixie",
  "A wrathful sprite",
  "A curious sprite",
  "A surly sprite",
  "A drunken satyr",
  "A satyr bully",
  "A sharp-witted satyr",
  ];
   $is = Roller($isD12);
//d20 Hair: The faerie has...
$hairD20 = [
  "Black hair",
  "Copper hair",
  "Golden blonde hair",
  "Platinum blonde hair",
  "Silver-white hair",
  "Dark brown hair",
  "Reddish-brown",
  "Fiery red hair",
  "Light brown hair",
  "Auburn hair",
  "Black hair with a brown streak",
  "Dark brown hair with an auburn streak",
  "Brown hair with a blonde streak",
  "Bright white hair",
  "Silver-blonde hair",
  "Whitish blonde hair",
  "Golden hair with a pink streak",
  "Golden hair with a green streak",
  "Black hair with a blue streak",
  "Black hair with a white streak",
  ];
   $hair = Roller($hairD20);
//d20 Eyes: The faerie has...
$eyesD20 = [
  "Pale golden eyes",
  "Bright golden eyes",
  "Dark green eyes",
  "Brilliant green eyes",
  "Bright blue eyes",
  "Dark blue eyes",
  "Blue eyes with golden flecks",
  "Green eyes with golden flecks",
  "Pale green eyes",
  "Golden brown eyes",
  "Dark brown eyes",
  "Hazel eyes",
  "Whitish blue eyes",
  "Pale blue eyes",
  "Lilac eyes",
  "Pale violet eyes",
  "Bright violet eyes",
  "Deep red eyes",
  "Pale pink eyes",
  "Silver eyes",
  ];
   $eyes = Roller($eyesD20);
//d12 Mannerisms: The faerie has...
$mannerismsD12 = [
  "A likable grin",
  "A delicate laugh",
  "A playful laugh",
  "A laugh that goes on too long",
  "An amused smirk",
  "A humorless visage",
  "A habit of sighing",
  "A touch of sorrow in his voice",
  "A touch of sorrow in her voice",
  "A habit of pacing",
  "A habit of scratching the back of the neck",
  "A habit of winking",
  "A seductive sway of the hips",
  ];
   $mannerisms = Roller($mannerismsD12);
//d12 The faerie is looking for...
$lookingD12 = [
  "An unnatural creature that has taken up residence in the forest",
  "Ways to cause mischief for travelers",
  "Worthy visitors of a secret grove",
  "Amusement in frightening travelers",
  "Someone to listen to a new song",
  "A heart to break",
  "Love and war",
  "Love and mischief",
  "Mischief and mayhem",
  "The answer to a riddle",
  "A dance partner",
  "A drinking partner",
  ];
   $looking = Roller($lookingD12);
//d12 The faerie carries...
$carriesD12 = [
  "An delicate wreath of flowers",
  "A gem glowing with moonlight",
  "A finely-crafted bow",
  "A vial containing a potent potion",
  "Several magical mushrooms",
  "A variety of herbs commonly used in potionmaking",
  "A message from a faerie king",
  "A token from a past love",
  "A string instrument",
  "A wind instrument",
  "A piece of sweet cake",
  "A jug of wine",
  "A gem glowing with starlight",
  "A finely-crafted knife",
  "A message from a faerie queen",
  ];
   $carries = Roller($carriesD12);
  if ($carries == "A string instrument") {
    $extD0 = ["fiddle","harp","lute","lyre",];
    $carries = "a ".Roller($extD0);
  } elseif ($carries == "A wind instrument") {
    $extD0 = ["flute","horn","ocarina","panpipes",];
    $carries = "a ".Roller($extD0);
  }
   $carries .= "";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fearie | Tables</title>
  </head>
  <body>
    <h2> Fearie Catcher </h2>
    <p>
      The faerie is <b style="text-transform:lowercase"><?=$is?></b> that has <b style="text-transform:lowercase"><?=$hair?></b> and <b style="text-transform:lowercase"><?=$eyes?></b>.<br>
      The faerie has <b style="text-transform:lowercase"><?=$mannerisms?></b>, is looking for <b style="text-transform:lowercase"><?=$looking?></b> and carries <b style="text-transform:lowercase"><?=$carries?></b>.<br>
    </p><br>
  </body>
</html>
