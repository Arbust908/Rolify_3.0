<?php require_once("math.php"); ?>
<?php
//Random Restless Undead
//d20 The person was...
$wasD20 = [
  "a farmer",
  "a miner",
  "a slave",
  "a laborer",
  "a beggar",
  "a noble",
  "an artist",
  "a merchant",
  "a barkeep",
  "a barbarian",
  "a minstrel",
  "a priest",
  "an herbalist",
  "a soldier",
  "a cultist",
  "a hunter",
  "a thief",
  "a smuggler",
  "a sailor",
  "an alchemist",
  "a herder",
  "a fisher",
  "a servant",
  "an unskilled worker",
  "a urchin",
  "a knight",
  "a craftsman",
  "a shopkeeper",
  "a barmaid",
  "a gladiator",
  "a singer",
  "a monk",
  "a healer",
  "a sellsword",
  "a preacher",
  "an assassin",
  "a bandit",
  "a con artist",
  "a pirate",
  "a seer"
  ];
//d20 The person died from...
$deathD20 = [
  "hanging",
  "beheading",
  "a stab wound",
  "blunt trauma",
  "drowning",
  "a plague",
  "a gastrointestinal illness",
  "a respiratory illness",
  "an infected wound",
  "poisoning",
  "falling from a great height",
  "a horse accident",
  "a venereal disease",
  "an allergic reaction",
  "shock",
  "a heart attack",
  "liver failure",
  "old age",
  "natural causes",
  "unknown causes",
  "strangulation",
  "beating",
  "being crushed",
  "wagon accident",
  "stroke",
  "under mysterious circumstances"
  ];
//d12 The person's spirit lingers...
$lingersD12 = [
  "to seek vengeance",
  "to pine for lost love",
  "to bemoan lost treasure",
  "out of pure hatred of the living",
  "out of jealousy of the living",
  "to covet the belongings of a specific individual",
  "to provide protection to a specific someone",
  "to warn a specific someone against danger",
  "to warn everyone against a specific danger",
  "to torment a specific someone",
  "to torment members of a specific group",
  "to torment anyone who crosses its path"
  ];
//d12 The person's spirit can move on if...
$moveOnD12 = [
  "someone helps it achieve it's goal",
  "it saves the life of at least one other person",
  "it achieves its goal on its own",
  "it is destroyed",
  "it is driven from its current location",
  "it is given evidence of events that happened after the person's death",
  "it is made aware of the circumstances of the person's death",
  "it is forced to visit the location of the person's death",
  "it is given the opportunity to speak to a loved one",
  "it sufficiently satisfies its lust for blood",
  "it sufficiently satisfies its lust for human touch",
  "the Hells freeze over"
  ];
//d6 The spirit’s initial reaction when it encounters living creatures is...
$encounterD6 = [
  "hostile and aggressive",
  "hostile and suspicious",
  "nervous and frightened",
  "mostly indifferent",
  "completely indifferent",
  "curious but suspicious",
  "curious and playful",
  "desperate and aggressive"
  ];
//CORPOREAL UNDEAD
//d10 The person's spirit is...
$isD10 = [
  "occupying its original body, showing no signs of decay",
  "occupying its original body, showing some signs of decay",
  "occupying its original body, badly decomposed",
  "occupying its original body, only bare bones remain",
  "occupying the corpse of someone else",
  "occupying the living body of a stranger",
  "occupying the living body of someone the person new",
  "occupying the living body of a beast",
  "occupying its original bodys skull",
  "occupying someone else’s corpse skull",
  "occupying its original bodys hand",
  "occupying someone else’s corpse hand"
  ];
   $is = Roller($isD10);
//d6 The creature moves...
$movesD6 = [
  "with a shambling gait",
  "with an awkward limp",
  "lurching unpredictably",
  "with more of shimmy than a walk",
  "taking slow, steady steps",
  "with surprising quickness and agility"
  ];
   $move = Roller($movesD6);
//d12 The creature has...
$hasD12 = [
  "a tattered shirt",
  "a missing fingers",
  "a missing arm",
  "a missing leg",
  "only one eye",
  "a club foot",
  "long-scraggly hair",
  "chattering teeth",
  "large crude stitches in its side",
  "an awful hunchback",
  "incredibly long fingernails",
  "drool on its chin",
  "buck teeth",
  "a creepy mustache",
  ];
   $has = Roller($hasD12);
//INCORPOREAL UNDEAD
//d10 The spirit is...
$isSpiritD10 = [
  "incorporeal, invisible, and incapable of affecting its material surroundings",
  "incorporeal, invisible, and capable of moving small objects",
  "incorporeal, invisible, but capable of making itself seen",
  "incorporeal, invisible, and hidden within a ",
  "incorporeal, visible, but incapable of affecting it's material surroundings",
  "incorporeal, visible, and capable of significant mischief and harm",
  "incorporeal, extraordinarily beautiful, and capable of mischief and harm",
  "incorporeal, wretched and slimy, and capable of mischief and harm",
  "incorporeal, glowing blue or green, and capable of mischief and harm",
  "incorporeal, visible, but in an unrecognizable form of "
  ];
  $isSpirit = Roller($isSpiritD10);
  if ($isSpirit == "incorporeal, invisible, and hidden within a") {
    $extD0 = ["chest","drawer","kettle","wardrobe"];
    $isSpirit .= Roller($extD0);
  } elseif ($isSpirit == "incorporeal, visible, but in an unrecognizable form of ") {
    $extD0 = ["mist","an animal","a floating skull","a faint glow","pool of shadows","a spectral hand"];
    $isSpirit .= Roller($extD0);
  }
  $isSpirit .= "";
//d6 The spirit moves...
$moveSpiritD6 = [
  "by creeping, oozelike, across the ground",
  "smoothly, gliding above the grond",
  "taking slow, fluid steps",
  "lightly, rarely touching the ground",
  "much quicker than you expect it to",
  "by teleporting in a swirl of shadows"
  ];
  $moveSpirit = Roller($moveSpiritD6);
//d10 The spirit appears to be...
$appearsD10 = [
  "severely bloated",
  "moaning in anguish",
  "snarling at you",
  "breathing heavily",
  "cowering in fear",
  "poised to strike",
  "gently bobbing up and down",
  "wind-blown and haggard",
  "fidgeting nervously",
  "oozing ectoplasm"
  ];
   $appears = Roller($appearsD10);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Restless Undead | TE</title>
  </head>
  <body>
    <h2> Restless Undead </h2>
    <p>
      <h3>CORPOREAL UNDEAD</h3>
      The person's spirit is <b><?=$is?></b>, has <b><?=$has?></b> and moves <b><?=$move?></b>.<br>
      The person was <b><?=(Roller($wasD20))?></b> that died from <b><?=(Roller($deathD20))?></b>.<br>
      The person's spirit lingers <b><?=(Roller($lingersD12))?></b>, could move on if <b><?=(Roller($moveOnD12))?></b>.<br>
      The spirit’s initial reaction when it encounters living creatures is <b><?=(Roller($encounterD6))?></b>.<br>
      <hr>
      <h3>INCORPOREAL UNDEAD</h3>
      The spirit is <b><?=$isSpirit?></b> that appears to be <b><?=$appears?></b> and moves <b><?=$moveSpirit?></b>.<br>
      The person was <b><?=(Roller($wasD20))?></b> that died from <b><?=(Roller($deathD20))?></b>.<br>
      The person's spirit lingers <b><?=(Roller($lingersD12))?></b>, could move on if <b><?=(Roller($moveOnD12))?></b>.<br>
      The spirit’s initial reaction when it encounters living creatures is <b><?=(Roller($encounterD6))?></b>.<br>
    </p><br>
  </body>
</html>
