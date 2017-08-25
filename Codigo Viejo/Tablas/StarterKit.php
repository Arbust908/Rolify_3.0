<?php
  //Random Player Character (5E)
  require_once ("diceRoll.php");
  //d12 Race: The character is...
  $specieD12 = [
    "a dragonborn",
    "a dwarf",
    "a dwarf",
    "a dark elf",
    "a high elf",
    "a wood elf",
    "a gnome",
    "a half-elf",
    "a half-orc",
    "a halfling",
    "a human",
    "a high elf",
    "a wood elf",
    "a gnome",
    "a half-elf",
    "a half-orc",
    "a halfling",
    "a human",
    "a human",
    "a tiefling",
    "a "
    ];
   $d12 = Roll($specieD12);
   $specie = $specieD12[$d12];
   $extraSP = "";
    if ($d12 == 11) {
      $extraSPD20 = [
        "centaur",
        "dryad",
        "duergar",
        "kobold",
        "genasi",
        "goblin",
        "hobgoblin",
        "medusa",
        "minotaur",
        "lizardfolk",
        "ogre",
        "pixie",
        "revenant",
        "satyr",
        "shadar-kai",
        "troll",
        "vampire",
        "werebear",
        "wererat",
        "werewolf"
      ];
      $d20 = Roll($extraSPD20);
      $extraSP = $extraSPD20[$d20];
    };
    $specie .= $extraSP;

  //d12 Class: The character is...
  $classD12 = [
    "berserker",
    "totem warrior",
    "bard of lore",
    "bard of valor",
    "cleric of death",
    "cleric of life",
    "cleric of light",
    "cleric of knowledge",
    "cleric of nature",
    "cleric of tempest",
    "cleric of trickery",
    "cleric of war",
    "druid of the land",
    "druid of the moon",
    "battle master",
    "champion",
    "eldritch knight",
    "monk of the four elements",
    "monk of the open hand",
    "monk of shadow",
    "paladin of the ancients",
    "paladin of devotion",
    "paladin of vengeance",
    "oathbreaker",
    "hunter",
    "beastmaster",
    "arcane trickster",
    "assassin",
    "thief",
    "sorcerer of draconic bloodline",
    "sorcerer of wild magic",
    "archfey warlock",
    "fiend warlock",
    "great old one warlock",
    "abjurer",
    "conjurer",
    "diviner",
    "enchanter",
    "evocer",
    "illusionist",
    "necromancer",
    "transmuter"
    ];
   $d12 = Roll($classD12);
   $class = $classD12[$d12];

  //d20 Background: The character is or was...
  $bgD20 = [
    "an acolyte",
    "a charlatan",
    "a criminal",
    "an entertainer",
    "a folk hero",
    "a gladiator",
    "a guild artisan",
    "a guild merchant",
    "a hermit",
    "a knight",
    "a noble",
    "an outlander",
    "a pirate",
    "a sage",
    "a sailor",
    "a soldier",
    "a spy",
    "an urchin",
    "an acolyte",
    "a charlatan",
    "a criminal",
    "an entertainer",
    "a folk hero",
    "a gladiator",
    "a guild artisan",
    "a guild merchant",
    "a hermit",
    "a knight",
    "a noble",
    "an outlander",
    "a pirate",
    "a sage",
    "a sailor",
    "a soldier",
    "a spy",
    "an urchin",
    "an acolyte",
    "a charlatan",
    "a criminal",
    "an entertainer",
    "a folk hero",
    "a gladiator",
    "a guild artisan",
    "a guild merchant",
    "a hermit",
    "a knight",
    "a noble",
    "an outlander",
    "a pirate",
    "a sage",
    "a sailor",
    "a soldier",
    "a spy",
    "an urchin",
    "an amnesiac who has faint memories of a past life as ",
    "an amnesiac who has faint memories of a past life as ",
    "an amnesiac who has faint memories of a past life as ",
    "named in a prophecy and took up the hero's journey leaving behind his life as "
    ];
   $d20 = Roll($bgD20);
   $backG = $bgD20[$d20];
   $bgEXT = "";
    if ($d20 >= (count($bgD20)-4) && $d20 <= (count($bgD20)-1)) {
      $extBGD12 = [
        "an acolyte",
        "a charlatan",
        "a criminal",
        "an entertainer",
        "a folk hero",
        "a gladiator",
        "a guild artisan",
        "a guild merchant",
        "a hermit",
        "a knight",
        "a noble",
        "an outlander",
        "a pirate",
        "a sage",
        "a sailor",
        "a soldier",
        "a spy",
        "an urchin"
       ];
       $d12 = Roll($extBGD12);
       $bgEXT = $extBGD12[$d12];
    } elseif ($d20 >= (count($bgD20)-1)) {
      $extBGD12 = [
        "an acolyte",
        "a charlatan",
        "a criminal",
        "an entertainer",
        "a folk hero",
        "a gladiator",
        "a guild artisan",
        "a guild merchant",
        "a hermit",
        "a knight",
        "a noble",
        "an outlander",
        "a pirate",
        "a sage",
        "a sailor",
        "a soldier",
        "a spy",
        "an urchin"
       ];
       $d12 = Roll($extBGD12);
       $bgEXT = $extBGD12[$d12];
    }
    $backG .= $bgEXT;

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Starter Kit | D&D</title>
  </head>
  <body>
    <p><b>
      Your adventurer is <?=$specie.' '.$class?> that is also <?=$backG?>
    </b></p>
  </body>
</html>
