<?php require_once("math.php"); ?>
<?php
//Random Watchmen
//d12 The watch’s colors are...
$colorsD12 = [
  "Black",
  "Scarlet",
  "Gold",
  "Forest green",
  "Royal blue",
  "Silver",
  "Brown",
  "White",
  "Maroon",
  "Sky blue",
  "Navy blue",
  "Chocolate"
  ];
   $colors = Roller($colorsD12);

//d12 The watch’s symbol is...
$symbolD12 = [
  "flame",
  "gauntlet",
  "shield",
  "sword",
  "sun",
  "eye",
  "eagle",
  "owl",
  "dragon",
  "lion",
  "raven",
  "wolf"
  ];
   $symbol = Roller($symbolD12);

//d12 The watch’s captain is...
$captainD12 = [
  "a religious zealot",
  "a scion from a prominent family",
  "an outcast from a prominent family",
  "a dashing swashbuckler",
  "a brutish thug",
  "a celebrated war hero",
  "an anointed knight",
  "a career soldier",
  "a grizzled veteran",
  "an adept investigator",
  "an erudite detective",
  "a devoted public servant",
  "a "
  ];
   $captain = Roller($captainD12);
   $roll = rand(1,100);
   if ($roll == 99 && $captain == "a ") {
     $captain = "a demi-god";
   } elseif ($roll == 69 && $captain == "a ") {
     $captain = "a dragon polymophed";
   } elseif ($roll == 2 && $captain == "a ") {
     $captain = "a very famous hero in disguise";
   }
   $captain .= "";
//d6 The watch’s attitude toward their captain is...
$attitudeD6 = [
  "friendly and loyal",
  "respectful and business-like",
  "completely indifferent",
  "cautious and uncertain",
  "terrified and tight-lipped",
  "disappointed and disrespectful"
  ];
   $attitude = Roller($attitudeD6);

//d10 The watch has a reputation for...
$reputationD10 = [
  "high morals",
  "efficiency",
  "reliability",
  "brutality",
  "taking bribes",
  "shaking down shopkeepers and artisans",
  "frequenting brothels",
  "cowardice",
  "incompetence",
  "intoxication"
  ];
   $reputation = Roller($reputationD10);
   $roll = rand(1,100);
   if ($roll == 100) {
     $extD0 = ["drake","gigant","werebear","young dragon"];
     $reputation = "killing a ".Roller($extD0);
   }
   $reputation .= "";
//d6 Most members of the watch are outfitted with...
$outfitD6 = [
  "rough-spun wool cloaks",
  "whatever armor they can find",
  "leather armor marked with the symbol of the watch",
  "leather armor marked with the symbol of their city or lord",
  "helms and breastplates emblazoned with the symbol of their city or lord",
  "well-maintained chainmail"
  ];
   $outfit = Roller($outfitD6);
//d10 Most members of the watch are equipped with...
$weaponD10 = [
  "longsword",
  "scimitar",
  "handaxe",
  "shortsword",
  "light hammer",
  "sickle",
  "mace",
  "pike",
  "halberd",
  "warhammer",
  "greataxe",
  "greatsword",
  "dagger"
  ];
$weaponExt = [
  "longsword",
  "scimitar",
  "handaxe",
  "shortsword",
  "light hammer",
  "warhammer",
  "shortbow",
  "crossbow",
  "shield",
  "longbow",
  "dagger"
  ];
   $weapon = "a ".Roller($weaponD10)." and ".Roller($weaponExt);
  //  if ($weapon == ) {
  //    # code...
  //  }

//INDIVIDUAL INVESTIGATORS
//d10 The constable is...
$constableD10 = [
  "a priest",
  "a monk",
  "a stoic monk",
  "a former soldier",
  "a mysterious foreigner",
  "a pompous windbag",
  "an accomplished scholar",
  "a violent drunk",
  "a criminal lackey",
  "a popular tavern patron",
  "ruggedly handsome"
  ];
   $constable = Roller($constableD10);
//d6 The constable works for...
$worksD6 = [
  "the steady pay",
  "a chance to bring evil-doers to justice",
  "gold to repay debts",
  "gold to support his addiction",
  "the joy of solving mysteries",
  "a chance for vengeance"
  ];
   $works = Roller($worksD6);
   if ($works == "gold to support his addiction") {
     $extD0 = ["drinking","gambling","harlots","smoking"];
     $works .= " to ".(Roller($extD0));
   }
   $works .= "";
//d12 On the constable’s face is...
$faceD12 = [
  "a scar from a burn",
  "a jagged scar",
  "a hard-set jaw",
  "a friendly grin",
  "a faraway look",
  "a furrowed brow",
  "a pair of piercing eyes",
  "a broken nose",
  "bushy eyebrows",
  "unshaven stubble",
  "a neatly-trimmed beard",
  "an intimidating mustache"
  ];
   $face = Roller($faceD12);
//d10 The constable carries...
$carriesD10 = [
  "a magnifying lens",
  "a blade with a carved hilt",
  "a blade with beasts sculpted into the steel of the guard",
  "a blade made of blackened steel",
  "an unusual hat",
  "a clue from an unsolved crime",
  "a token from a lost love",
  "props for several disguises",
  "alchemical reference manual",
  "a pocket-sized almanac"
  ];
   $carries = Roller($carriesD10);
   $ext = "";
   if ($carries == "a blade with a carved hilt") {
     $extD0 = ["ivory","jade","soapstone","ebony","mahogany","oak"];
     $ext = " made of " . Roller($extD0);
   } elseif ($carries == "a blade with beasts sculpted into the steel of the guard") {
     $extD0 = ["dragons","lions","scorpions","snakes","spiders","wolves"];
     $carries = "a blade with a " . Roller($extD0) . "sculpted into guard";
   }
   $carries .= $ext;
//INDIVIDUAL GUARDS
//d10 The guard is...
$guardD10 = [
  "a farm boy",
  "the son of a miner",
  "the son of a fisherman",
  "the son of a whore",
  "a veteran of warfare",
  "a foreigner",
  "the son of a poor man",
  "a drunk",
  "a reformed criminal",
  "a thug",
  "a failed craftsman",
  "a favorite among the ladies",
  "a "
  ];
   $guard = Roller($guardD10);
   $roll = rand(1,100);
   if ($roll == 99 && $guard == "a ") {
     $guard = "a demi-god";
   } elseif ($roll == 69 && $guard == "a ") {
     $guard = "a dragon polymophed";
   } elseif ($roll == 2 && $guard == "a ") {
     $guard = "a very famous hero in disguise";
   }
   $guard .= "";
//d6 The guard works for...
$reasonD6 = [
  "the steady pay",
  "a chance to deal out sadistic punishment",
  "gold to repay debts",
  "gold to aid a family member",
  "a chance to escape from life imprisonment",
  "patriotic devotion"
  ];
   $reason = Roller($reasonD6);
//d12 On the guard’s face is...
$gFaceD12 = [
  "a large wart",
  "an unsightly scar",
  "a look of determination",
  "a foolish grin",
  "a stupid stare",
  "a look of confusion",
  "a bulbous nose",
  "bushy eyebrows",
  "fearsome sideburns",
  "an unruly beard",
  "a neatly-trimmed mustache",
  "a waxed mustache"
  ];
   $gFace = Roller($gFaceD12);
//d10 The guard carries...
$gCarriesD10 = [
  "a blade with soft leather tassels dangling from the pommel",
  "a blade with an inscription",
  "a highly polished blade",
  "a token from a favorite harlot",
  "a trophy from a criminal",
  "a ribbon from a noble maiden",
  "a silk handkerchief",
  "a flask of wine",
  "a lucky charm",
  "a grocery list"
  ];
   $gCarries = Roller($gCarriesD10);
   if ($gCarries == "a lucky charm") {
     $extD0 = ["rabbit’s foot","old coin","shiny coin","four-leaf clover"];
     $gCarries = "a lucky ".Roller($extD0);
   }
   $gCarries .= "";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Watchmen </title>
  </head>
  <body>
    <h2>The <b><?=$colors?></b> <b><?=$symbol?></b>s</h2>
    <main>
      The watch’s colors are <b><?=$colors?></b>.<br>
      The watch’s symbol is <b><?=$symbol?></b>.<br>
      The watch’s captain is <b><?=$captain?></b>.<br>
      The watch’s attitude toward their captain is <b><?=$attitude?></b>.<br>
      The watch has a reputation for <b><?=$reputation?></b>.<br>
      Most members of the watch are outfitted with <b><?=$outfit?></b>.<br>
      Most members of the watch are equipped with <b><?=$weapon?></b>.<br>

      <h4>INDIVIDUAL INVESTIGATORS</h4><br>
      The constable is <b><?=$constable?></b>.<br>
      The constable works for <b><?=$works?></b>.<br>
      On the constable’s face is <b><?=$face?></b>.<br>
      The constable carries <b><?=$carries?></b>.<br>

      <h4>INDIVIDUAL GUARDS</h4><br>
      The guard is <b><?=$guard?></b>.<br>
      The guard works for <b><?=$reason?></b>.<br>
      On the guard’s face is <b><?=$gFace?></b>.<br>
      The guard carries <b><?=$gCarries?></b>.<br>
    </main>
  </body>
</html>
