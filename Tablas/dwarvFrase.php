<?php require_once("math.php"); ?>
<?php
//Random Dwarvish Phrases
//INSULTS
//d6 Insult: You...
$insultAD6 = [
  "beardless",
  "hairless",
  "scrawny",
  "spineless",
  "whiskerless",
  "witless"
  ];
   $insultA = Roller($insultAD6);
//d6 ...
$insultBD6 = [
  "knock-kneed",
  "little",
  "rat-faced",
  "perfumed",
  "wee",
  "yellow"
  ];
   $insultB = Roller($insultBD6);
//d6 ...
$insultCD6 = [
  "coward!",
  "elf-lover!",
  "goblin dropping!",
  "troll-bogey!",
  "weakling!",
  "wine-drinker!"
  ];
   $insultC = Roller($insultCD6);
//TOASTS
//d6 Toasts: May your beard...
$toastAD6 = [
  "grow long",
  "never tangle",
  "braid beautifully",
  "drip with mead",
  "smell filthy",
  "grow wide"
  ];
   $toastA = Roller($toastAD6);
//d6 ...and your belly...
$toastBD6 = [
  "never know a knife",
  "be always strong",
  "grow round",
  "be always full of meat",
  "ache only slightly",
  "be well-armored"
  ];
  $toastB = Roller($toastBD6);
//BATTLE CRIES
//d6 Battle cry: For/by...
$whyD2 = ["For","By"];
  $why = Roller($whyD2);
$cryAD6 = [
  "the blood",
  "the beards",
  "the strength",
  "the hammers",
  "the faith",
  "the axes"
  ];
   $cryA = Roller($cryAD6);
//d6 ...of our...
$cryBD6 = [
  "Kings!",
  "Ancestors!",
  "Grandfathers!",
  "Fathers!",
  "Fallen friends!",
  "Great Smith!"
  ];
   $cryB = Roller($cryBD6);
//OATHS
//d6 Oath: ...
$oathAD6 = [
  "All-knowing",
  "Ever-lasting",
  "Ever-loving",
  "Great",
  "Mighty",
  "Wise"
  ];
   $oathA = Roller($oathAD6);
//d6 ...
$oathBD6 = [
  "forge father's",
  "earth mother's",
  "grandfather's",
  "grandmother's",
  "master smith's",
  "winter warrior's"
  ];
   $oathB = Roller($oathBD6);
//d6 ...
$oathCD6 = [
  "bloody",
  "fiery",
  "glittering",
  "shining",
  "stony",
  "wagging"
  ];
   $oathC = Roller($oathCD6);
//d6 ...
$oathDD6 = [
  "beard!",
  "chin!",
  "dist!",
  "hammer!",
  "mug of mead!",
  "whiskers!"
  ];
   $oathD = Roller($oathDD6);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TE | Tables</title>
  </head>
  <body>
    <h2> Dwarven Phrases </h2>
    <h4>Insult</h4>
    <p>You <b><?=$insultA?></b> <b><?=$insultB?></b> <b><?=$insultC?></b></p><br>
    <h4>Toasts</h4>
    <p>May your beard <b><?=$toastA?></b> and your belly <b><?=$toastB?></b>.</p><br>
    <h4>Battle Cry</h4>
    <p><b><?=$why?></b> <b><?=$cryA?></b> of our <b><?=$cryB?></b></p><br>
    <h4>Oath</h4>
    <p><b><?=$oathA?></b> <b><?=$oathB?></b> <b><?=$oathC?></b> <b><?=$oathD?></b></p><br>
  </body>
</html>
