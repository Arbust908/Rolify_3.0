<?php require_once("math.php"); ?>

<?php
//Random Storm Giant
//d6 Hair color: The storm giant’s hair is...
$hairD6 = [
  "blue black",
  "pale purple",
  "steely grey",
  "blue grey",
  "purple grey",
  "electric purple"
  ];
   $hair = Roller($hairD6);

//d6 Eye color: The storm giant’s eyes are...
$eyesD6 = [
  "seafoam green",
  "emerald green",
  "greenish gold",
  "blue green",
  "silvery grey",
  "bright purple"
  ];
   $eyes = Roller($eyesD6);

//d6 Skin color: The storm giant’s skin is…
$skinD6 = [
  "pale grey",
  "dark grey",
  "purple gray",
  "brilliant purple",
  "golden brown",
  "burnt orange"
  ];
   $skin = Roller($skinD6);

//d6 Distinguishing feature: The storm giant has…
$featureD6 = [
  "long, shaggy hair",
  "many tattoos",
  "a jagged scar on its face",
  "thick chest hair",
  "a missing eye",
  "thick mustaches"
  ];
   $feature = Roller($featureD6);

//d6 Home: The storm giant dwells in …
$homeD6 = [
  "an undersea palace of coral and stone",
  "a fortress hidden in a dark ocean trench",
  "a mountaintop tower",
  "a castle on a cloud",
  "a hidden mountain cave",
  "a secluded coastal cave"
  ];
   $home = Roller($homeD6);

//d6 Training: The storm giant is a/an...
$trainD6 = [
  "an astrologer",
  "a hammerer",
  "a mystic sage",
  "an oneiromancer",
  "a stormcaller",
  "a swordfighter"
  ];
   $train = Roller($trainD6);

//d6 Skill: Even among storm giants, the storm giant is particularly good at...
$uniqueD6 = [
  "long-term strategy",
  "reading omens",
  "extorting lesser beings",
  "calling down lightning",
  "solving riddles",
  "swordplay"
  ];
   $unique = Roller($uniqueD6);

//d6 Quirk/flaw: The storm giant frequently...
$quirkD6 = [
  "tries to carry more plunder than it should",
  "grinds its teeth",
  "snores especially loud",
  "picks fights with his/her allies",
  "eats too much",
  "picks his/her teeth"
  ];
   $quirk = Roller($quirkD6);

//d6 Possessions: The storm giant is carrying a/an...
$itemD6 = [
  "a huge greataxe",
  "a flashy sword and shining shield",
  "an enormous steel warhammer",
  "a crystal of swirling mists",
  "a wide, jeweled belt",
  "a fine, silk robe embroidered with gold thread"
  ];
   $item = Roller($itemD6);

//d6 Immediate goal: The storm giant is looking for a/an...
$goalD6 = [
  "an enchanted weapon to add to its collection",
  "a fine gem to add to its collection",
  "a quiet place to sit and think",
  "a report of the goings-on in a far away land",
  "a skilled debater to help it solve a riddle",
  "a guest to join it for dinner"
  ];
   $goal = Roller($goalD6);

//d6 Accomplishment: The storm giant is especially proud of…
$proudD6 = [
  "his/her stable full of oversized horses",
  "predicting, to the minute, the fall of a great empire",
  "saving a village from a religious crusader’s wrath",
  "raising a dragon from egg to young adulthood",
  "making peace between a dwarvish fiefdom and a goblin kingdom",
  "translating an ancient text written in a lost fiendish tongue"
  ];
   $proud = Roller($proudD6);

//GIANT PERSONALITY TRAITS
$personalityTraitD8 = [
  "The brutality of my peers is a relic of a bygone era that should be stamped out. I seek a more enlightened path",
  "As the most powerful beings in creation, we have a duty to use our strength for the benefit of all",
  "I take what I want. I don't care who gets hurt",
  "A giant lives for a few centuries, but giantkind is eternal. Everything I do is to glorify my ancestors and make my descendants proud",
  "Dragons are my mortal enemies. Everything I do is to ensure their destruction",
  "I measure a creature's worth by its size. The small folk are beneath my concern",
  "The small folk are vermin. I enjoy torturing and killing them",
  "Good or bad, Annam's sons represent the ideals that we, as giants, must strive to uphold",
  ];
   $personalityTrait = Roller($personalityTraitD8);

//GIANT IDEALS
$idealD6 = [
  "<i>The Ordning</i>. Annam created the ordning for the good of all giants, and it's our duty to uphold his vision. (Lawful)",
  "<i>Skill</i>. What sets my clan apart is its mastery of our traditional crafts. (Good)",
  "<i>Strength</i>. No other race can match the strength of giants, and none should dare to try. (Evil)",
  "<i>Lordship</i>. Giants are the rightful rulers of the world. All will be well when our empire is restored. (Neutral)",
  "<i>Tribute</i>. The lesser races owe giants not just respect but payment of tribute, and what they don't pay willingly, we will take by force. (Chaotic)",
  "<i>Religion</i>. Of Annam's many sons, none is greater than my patron deity. (Any)",
  ];
   $ideal = Roller($idealD6);

//GIANT BONDS
$bondD6 = [
  "My clan is the most important influence on my life; our collective place in the ordning depends on our devotion to one another",
  "My clan mates who serve in our deity's temples are the closest companions I'll ever know",
  "My place in the ordning is ordained by our patron deity, and it would be blasphemous to aspire to anything higher or lower",
  "Though I can never rise above my clan's position in the ordning, I can be a leader among my clan",
  "My own kind have turned their backs on me, so I make my way among the lesser creatures of the world",
  "Humans have proven their worth in the world and earned a measure of respect from giantkind",
  ];
   $bond = Roller($bondD6);

//GIANT FLAWS
$flawD6 = [
  "The ordning is too restrictive for the likes of me",
  "The lesser creatures of the world have no souls; they exist only to be fodder for the ambitions and appetites of giants",
  "Unity among giants is a myth; anyone not of my clan is a fair target for my weapons",
  "I care nothing for what others expect, to the point where I cannot help but contradict what others ask ofme",
  "I am terrified of arcane magic and can be cowed by overt displays of it",
  "Ancient dragons fill me with dread. My knees grow weak in their presence",
  ];
   $flaw = Roller($flawD6);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TE | Tables</title>
  </head>
  <body>
    <h2> </h2>
    <p>
      The storm giant’s hair is <b><?=$hair?></b>, its eyes are <b><?=$eyes?></b> and its skin is <b><?=$skin?></b>.<br>
      The storm giant has <b><?=$feature?></b>, dwells in <b><?=$home?></b> and is <b><?=$train?></b>.<br>
      Even among storm giants, the storm giant is particularly good at <b><?=$unique?></b> who frequently <b><?=$quirk?></b> and is looking for <b><?=$goal?></b>.<br>
      The storm giant is carrying <b><?=$item?></b> and is especially proud of <b><?=$proud?></b>.<br>
      <hr>
      Personality <b><?=$personalityTrait?></b><br>
      Ideal <b><?=$ideal?></b><br>
      Bond <b><?=$bond?></b><br>
      Flaw <b><?=$flaw?></b><br>
    </p><br>
  </body>
</html>
