<?php require_once("head.php");
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
   $specie = Roller($specieD12);
   $extraSP = "";
    if ($specie == "a ") {
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
      $extraSP = Roller($extraSPD20);
    };
    $specie .= $extraSP;

  //d12 Class: The character is...
  $classD12 = [
		"barbarian",
		"bard",
		"cleric",
		"druid",
		"fighter",
		"monk",
		"paladin",
		"ranger",
		"rouge",
		"sorcerer",
		"warlock",
		"wizard"
		];
		 $class = Roller($classD12);
		if($class == "barbarian"){
			$extD0 = ["berserker","totem warrior"];
    	$ext = Roller($extD0);
		} elseif($class == "bard"){
			$extD0 = ["collage of lore","collage of valor"];
			$ext = Roller($extD0);
		} elseif($class == "cleric"){
			$extD0 = ["domain of death","domain of life","domain of light","domain of knowledge","domain of nature","domain of tempest","domain of trickery","domain of war"];
			$ext = Roller($extD0);
		} elseif($class == "druid"){
			$extD0 = ["circle of the land","circle of the moon"];
			$ext = Roller($extD0);
		} elseif($class == "fighter"){
			$extD0 = ["battle master","champion","eldritch knight"];
			$ext = Roller($extD0);
		} elseif($class == "monk"){
			$extD0 = ["of the four elements","of the open hand","of shadow"];
			$ext = Roller($extD0);
		} elseif($class == "paladin"){
			$extD0 = ["oath of the ancients","oath of devotion","oath of vengeance","oathbreaker"];
			$ext = Roller($extD0);
		} elseif($class == "ranger"){
			$extD0 = ["hunter","beastmaster"];
			$ext = Roller($extD0);
		} elseif($class == "rouge"){
			$extD0 = ["arcane trickster","assassin","thief"];
			$ext = Roller($extD0);
		} elseif($class == "sorcerer"){
			$extD0 = ["draconic bloodline","wild magic bloodline"];
			$ext = Roller($extD0);
		} elseif($class == "warlock"){
			$extD0 = ["pact with archfey","pact with fiend","pact with great old one"];
			$ext = Roller($extD0);
		} elseif($class == "wizard"){
			$extD0 = ["abjurer","conjurer","diviner","enchanter","evocer","illusionist","necromancer","transmuter"];
			$ext = Roller($extD0);
		}
		$class .= ": " . $ext;
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
   $backG = Roller($bgD20);
   $bgEXT = "";
    if ($backG == "an amnesiac who has faint memories of a past life as ") {
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
       $bgEXT = Roller($extBGD12);
    } elseif ($backG == "named in a prophecy and took up the hero's journey leaving behind his life as ") {
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
       $bgEXT = Roller($extBGD12);
    }
    $backG .= $bgEXT;
?>

					<h1>PC Starter Kit</h1>
					<h2>This kit generates a basic PC for you to fluff out and play some random character.</h2>
					<line></line><!-- separation line -->
					<p>Your adventurer is <?=$specie.' '.$class?> that is also <?=$backG?></p>
					<line></line><!-- separation line -->
					<input type='button' class="button" onclick='location.reload();' value='Generate New' /><br>
					<!-- <a href="#" class="button">Generate New</a><br> -->
					<line></line><!-- separation line -->
          <date>Published: 17 april 2017 - v1.0b</date>
				</text>
				<line></line>
					<?php require_once("social.html"); ?>
				<line></line>
				</div><!-- animation -->
				<?php require_once ("footer.html"); ?>
