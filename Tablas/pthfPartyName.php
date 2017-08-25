<?php require_once("math.php"); ?>

<?php
//Table 4–8: Random Adventuring Party Name Generator
//Roll on the first and third columns to create a suitable name, making additional rolls on any combination of other columns as desired.

//d% Column 1
$col1D00 = [
  "Mighty",
  "Quiet",
  "Valorous",
  "Undaunted",
  "Questioning",
  "Selfish",
  "Foolhardy",
  "Brave",
  "Noble",
  "Questing",
  "Great",
  "Ignoble",
  "Pious",
  "Strong",
  "Studious",
  "Incredible",
  "Stout",
  "Sturdy",
  "Unbreakable",
  "Fearless",
  "Blinded",
  "Fearsome",
  "Potent",
  "Commanding",
  "Superior",
  "Impressive",
  "Meddling",
  "Lucky",
  "Contagious",
  "Loud",
  "Holy",
  "Unholy",
  "Ascendant",
  "Gripping",
  "Fascinating",
  "Infectious",
  "Eminent",
  "Grave",
  "Compelling",
  "Hypnotic",
  "Persuasive",
  "Irresistible",
  "Alluring",
  "Fascinating",
  "Magnetic",
  "Predominant",
  "Magic",
  "Reputable",
  "Famous",
  "Beautiful"
  ];
   $col1 = Roller($col1D00);


//Column 2
$col2D00 = [
  "Ebon",
  "Black",
  "Green",
  "Blue",
  "Violet",
  "Shade",
  "Shadow",
  "Pearly",
  "Blood-red",
  "Crimson",
  "Brown",
  "Ochre",
  "Bright",
  "Moonlight",
  "Shadowy",
  "Dusky",
  "Rainbow",
  "Pitch",
  "Tar",
  "Coal",
  "Nadir",
  "Mold",
  "Jade",
  "Sage",
  "Amethyst",
  "Coral",
  "Tiger",
  "Obsidian",
  "Mithral",
  "Gold",
  "Silver",
  "Platinum",
  "Copper",
  "Adamantine",
  "Steel",
  "Iron",
  "Forged",
  "Snow",
  "Dark",
  "Light",
  "Day",
  "Night",
  "Deep",
  "High",
  "Long",
  "Gray",
  "Stone",
  "Ultramarine",
  "Mauve",
  "White"
  ];
   $col2 = Roller($col2D00);


//Column 3
$col3D00 = [
  "Lions",
  "Dragons",
  "Giants",
  "Angels",
  "Tigers",
  "Wolves",
  "Wolverines",
  "Warriors",
  "Fools",
  "Monsters",
  "Aberrations",
  "Outsiders",
  "Revenants",
  "Snakes",
  "Rats",
  "Mad Dogs",
  "Demons",
  "Devils",
  "Beasts",
  "Savages",
  "Griffins",
  "Banshees",
  "Wyverns",
  "Carnivores",
  "Vultures",
  "Sharks",
  "Eye Panthers",
  "Vipers",
  "Spiders",
  "Trolls",
  "Ogres",
  "Crows",
  "Ravens",
  "Eagles",
  "Dogs",
  "Scorpions",
  "Octopuses",
  "Krakens",
  "Apes",
  "Bears",
  "Boars",
  "Crocodiles",
  "Cats",
  "Lizards",
  "Hyenas",
  "Hornets",
  "Raptors",
  "Toads",
  "Weasels",
  "Wasps"
  ];
   $col3 = Roller($col3D00);

//Column 4
$col4D00 = [
  "Swords",
  "Spears",
  "Weapons",
  "Scythes",
  "Halberds",
  "Daggers",
  "Blades",
  "Scimitars",
  "Lancers",
  "Archers",
  "Swordsmiths",
  "Crossbowmen",
  "Monster-Slayers",
  "Invincibles",
  "Thrusters",
  "Stars",
  "Gorgers",
  "Puddings",
  "Bows",
  "Flails",
  "Axes",
  "Gauntlets",
  "Oozes",
  "Spines",
  "Sticks",
  "Biters",
  "Fists",
  "Staves",
  "Pikes",
  "Iron Maidens",
  "Racks",
  "Burning Torches",
  "Hunters",
  "Tramplers",
  "Wounders",
  "Smashers",
  "Breakers",
  "Fire ",
  "Smoke",
  "Flames",
  "Clubs",
  "Guisarmes",
  "Whips",
  "Tridents",
  "Javelins",
  "Warhammers",
  "Slings",
  "Saps",
  "Falchions",
  "Nets"
  ];
   $col4 = Roller($col4D00);


//Column 5
$col5D00 = [
  "and Slayers",
  "and Merciless Inquisitors",
  "and Vanquishers",
  "and Slaughterers",
  "and Talkers",
  "and Avengers",
  "of Justice",
  "and Revengers",
  "for the Victims",
  "of the Vendetta",
  "of the Endless Feud",
  "and Vindicators",
  "and Payers",
  "and Punishers",
  "and Torturers",
  "and Gloaters",
  "and Sinners",
  "of Unspeakable Terror",
  "with the Witch-Hunters",
  "for the Pilgrims",
  "for the Glorious Masses",
  "of Murderers",
  "and Gibbeters",
  "and Merciless Questioners",
  "the Tools of the Gods",
  "the Speakers of Truth",
  "the Wayfinders",
  "of the Path",
  "of the Way",
  "of the Faith",
  "of the Spirit",
  "of the Day",
  "of the Night",
  "of Gods",
  "in the Dark",
  "in the Sunlight",
  "in the Shadow of Angels",
  "from Outside Reality",
  "with the Right",
  "with Righteousness",
  "with the Gods",
  "with the Moon",
  "with the Angels",
  "by the Side of Heaven",
  "by the Hand of the Gods",
  "as Whispered to by Things from Beyond",
  "as Commanded",
  "by Faith",
  "for Glory",
  "in Sureness"
  ];
   $col5 = Roller($col5D00);

// $rpNameD00 = [
//   $col1." ".$col3."<br>",
//   $col1." ".$col3."<br>",
//   $col1." ".$col3."<br>",
//   $col1." ".$col3."<br>",
//   $col1." ".$col3."<br>",
//   $col1." ".$col3."<br>",
//   $col1." ".$col2." ".$col3."<br>",
//   $col1." ".$col3." ".$col4."<br>",
//   $col1." ".$col3." ".$col5."<br>",
//   $col1." ".$col2." ".$col3." ".$col5."<br>",
//   $col1." ".$col3." ".$col4." ".$col5."<br>",
//   $col1." ".$col2." ".$col3." ".$col4."<br>",
//   $col1." ".$col2." ".$col3." ".$col4." ".$col5."<br>",
//
//   ];
//    $rpName = Roller($rpNameD00);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Random Party Names | Pathfinder | Tablas</title>
  </head>
  <body>
    <h2> Random Party Names </h2>
    <p>
      <?php
      echo (Roller($col1D00))." ".(Roller($col3D00))."<br>";
      echo (Roller($col1D00))." ".(Roller($col3D00))."<br>";
      echo (Roller($col1D00))." ".(Roller($col3D00))."<br>";
      echo (Roller($col1D00))." ".(Roller($col3D00))."<br>";
      echo (Roller($col1D00))." ".(Roller($col3D00))."<br>";
      echo (Roller($col1D00))." ".(Roller($col3D00))."<br>";
      echo (Roller($col1D00))." ".(Roller($col2D00))." ".(Roller($col3D00))."<br>";
      echo (Roller($col1D00))." ".(Roller($col3D00))." ".(Roller($col4D00))."<br>";
      echo (Roller($col1D00))." ".(Roller($col3D00))." ".(Roller($col5D00))."<br>";
      echo (Roller($col1D00))." ".(Roller($col2D00))." ".(Roller($col3D00))." ".(Roller($col5D00))."<br>";
      echo (Roller($col1D00))." ".(Roller($col3D00))." ".(Roller($col4D00))." ".(Roller($col5D00))."<br>";
      echo (Roller($col1D00))." ".(Roller($col2D00))." ".(Roller($col3D00))." ".(Roller($col4D00))."<br>";
      echo (Roller($col1D00))." ".(Roller($col2D00))." ".(Roller($col3D00))." ".(Roller($col4D00))." ".(Roller($col5D00))."<br>";
      ?>

    </p><br>
  </body>
</html>
