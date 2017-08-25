<?php require_once("math.php"); ?>
<?php
//Random Monks
//d20 The monk is...
$monkD20 = [
  "a devoted acolyte",
  "a dogmatic teacher",
  "a wandering mystic",
  "a grim warrior",
  "an adept healer",
  "a road-weary pilgrim",
  "a charismatic preacher",
  "an eccentric sage",
  "a disillusioned scholar",
  "a battle-tested martial artist",
  "a sharp-witted beggar-in-disguise",
  "an outspoken zealot",
  "an inscrutable foreigner",
  "a world-weary philosopher",
  "a brash martial artist",
  "a reformed criminal",
  "a warrior in exile",
  "a cautious refugee",
  "a bare-knuckled brawler",
  "an unapologetic drunk"
  ];
   $monk = Roller($monkD20);
//d12 At the monastery, the monk serves or served as...
$dutyD12 = [
  "a brewer",
  "a baker",
  "a carpenter",
  "a farmer",
  "a farrier",
  "a guard",
  "a librarian",
  "a leatherworker",
  "a scribe",
  "a steward",
  "a stable hand",
  "a tailor",
  "a vintner",
  "a cook",
  "a stonemason",
  "a gardener",
  "a blacksmith",
  "a soldier",
  "a instructor",
  "a ropemaker",
  "a bookkeeper",
  "a quartermaster",
  "a herder",
  "a weaver",
  "a butcher",
  "a sex servant"
  ];
   $duty = Roller($dutyD12);
//d12 The monk has...
$hasD12 = [
  "a likable grin",
  "a hearty laugh",
  "an unreadable face",
  "a sulky grimace",
  "a humorless visage",
  "a habit of sighing",
  "a sad look",
  "a kind look",
  "a habit of pacing",
  "a habit of scratching his or her chin",
  "a habit of licking his or her lips",
  "a habit of muttering under his or her breath"
  ];
   $has = Roller($hasD12);
//d12 The monk is particularly knowledgeable regarding...
$knowledgeD12 = [
  "Alchemical preparations of ",
  "The power of the mind",
  "Realms beyond the material world",
  "Demonology",
  "Healing arts",
  "The journey of the soul",
  "The laws of the gods",
  "Sacred rites",
  "Sacred texts",
  "Saints, martyrs, and heroes of legend",
  "The monastic order's hierarchy and bureaucracy",
  "The body's strengths and weaknesses",
  ];
   $knowledge = Roller($knowledgeD12);
   $ext = "";
   if ($knowledge == "Alchemical preparations of ") {
     $extD00 = [
       "curatives",
       "explosives",
       "poisons",
       "sedatives"
      ];
       $ext = Roller($extD00);
   }
   $knowledge .= $ext;
//d12 The monk has recently been contemplating...
$contemplingD12 = [
  "the mysteries of death and life",
  "the meaning of a recurring dream",
  "the meaning of several dark omens",
  "the perfection of the mind",
  "the perfection of the body",
  "the perfection of the soul",
  "the wisdom of an ancient philosopher",
  "the beauty and power of nature",
  "the path to inner peace",
  "forgiveness for past sins",
  "the balance of good and evil",
  "the balance of order and chaos"
  ];
   $contempling = Roller($contemplingD12);
//d8 The monk prefers to meditate...
$meditatesD8 = [
  "in a large temple",
  "in a shrine at the monastery",
  "in his or her personal cell at the monastery",
  "in a garden",
  "deep in the wilderness",
  "in an isolated cave",
  "on the site of an ancient ruin",
  "while walking the roads of the world",
  ];
   $meditates = Roller($meditatesD8);
//d6 The monk wears...
$wearsD6 = [
  "a threadbare robe",
  "a sturdy wool cloak",
  "a comfortable linen robe",
  "a cotton robe with the symbol of a god embroidered on the lapel",
  "a clean silk robe with simple embroidery",
  "an expensive silk robe with elaborate gold embroidery",
  "an ancient war-worned plate armour"
  ];
   $wears = Roller($wearsD6);
//d12 The monk's martial arts style includes...
$styleD12 = [
  "landing many rapid, open-hand slaps",
  "landing many rapid, close-fist punches",
  "acrobatic flips and quick maneuvers",
  "lightning sprints and flying leaps",
  "a stumbling gait to keep foes off balance",
  "methodical footwork",
  "the mistic technique of elemental fists",
  "landing many of rapid, spinning kicks",
  "landing a few powerful punches",
  "landing a few powerful kicks",
  "leg sweeps to trip foes",
  "striking pressure points to debilitate foes",
  "using explosive powders and alchemical smoke to distract foes",
  "using one single, powersurged finger poke",
  "landing a single powerful punch in a weak point"
  ];
   $style = Roller($styleD12);
//d12 The monk carries...
$carriesD12 = [
  "a polished wooden staff",
  "a well-used walking staff",
  "several razor-sharp daggers",
  "a blunted ceremonial sword",
  "a blunted ceremonial dagger",
  "an uncommon ",
  "a ",
  "a purse of silver to distribute to the poor",
  "a notebook of hand-written prayers and devotions",
  "a variety of healing potions and salves",
  "a set of prayer beads",
  "a heavy ring of keys",
  "a wineskin",
  "a flask"
  ];
   $carries = Roller($carriesD12);
   $ext = "";
   if ($carries == "an uncommon ") {
     $extD00 = [
     "kukri",
     "kusari-gama",
     "nunchaku",
     "scythe",
     "shuriken",
     "sickle"
      ];
      $ext = Roller($extD00);
   } elseif ($carries ==   "a ") {
     $extD00 = [
     "bejeweled",
     "gilded",
     "iron",
     "silver",
     "steel",
     "wooden"
     ];
     $ext = (Roller($extD00))." holy symbol";
   }
   $carries .= $ext;
//d12 The monk prefers to drink...
$drinkD12 = [
  "ale",
  "dwarven beer",
  "coffee",
  "fermented ",
  "firewhisky",
  "mead",
  "porter",
  "Burgsman's 'xxxxx' ale",
  "black tea",
  "green tea",
  "herbal tea",
  "water",
  "wine",
  "god-touched wine",
  "rice wine"
  ];
   $drink = Roller($drinkD12);
   $ext = "";
   if ($drink == "fermented ") {
     $extD00 = [
     "cow",
     "goat",
     "mare",
     "yak",
     "griffin",
     "cow",
     "goat",
     "mare",
     "yak",
     "griffin",
     "cow",
     "goat",
     "mare",
     "yak",
     "griffin",
     "dragon"
     ];
     $ext = (Roller($extD00))."s milk";
   }
   $drink .= $ext;
//d8 The monk is looking for...
$lookingD8 = [
  "new students",
  "the translation of an ancient manuscript",
  "heretics and enemies of the order",
  "relics and rare lore",
  "proof of a god’s existence",
  "the location of a ruined monastery",
  "the location of a ruined temple",
  "an opportunity to tell a fable",
  "the bottom of a goblet",
  "the ultimate technique"
  ];
   $looking = Roller($lookingD8);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Monk | Tables</title>
  </head>
  <body>
    <h2> Random Monk </h2>
    <p>
      The monk is <?= $monk ?> that used to serve as <?= $duty ?> at the monastery where he trained <?= $style?>.<br>
      He has <?= $has?>, particular knowladge of <?= $knowledge?> and has been contempling <?= $contempling?>.<br>
      The monk prefers to meditate <?= $meditates?> wearing <?= $wears?> and carring <?= $carries?>. Now he is looking for <?= $looking?> while he drinks his favorite <?= $drink?>.
    </p><br>
  </body>
</html>
