<?php require_once("head.php");?>
<?php
//Random Military Companies
//d20 The company’s colors are...
$colorD20 = [
  "black",
  "red",
  "scarlet",
  "gold",
  "forest green",
  "royal blue",
  "violet",
  "silver",
  "light grey",
  "bronze",
  "tan",
  "khaki",
  "brown",
  "beaver",
  "dark grey",
  "gunmetal",
  "white",
  "maroon",
  "sky blue",
  "navy blue",
  "dark brown",
  "chocolate",
  "teal",
  "turquoise",
  "yellow",
  "orange",
  "olive green"
    ];
   $color = Roller($colorD20);

//d20 The company’s banner features...
$bannerFeatD20 = [
  "a skull",
  "a clenched fist",
  "a flame",
  "a shield",
  "an arrow",
  "an axe",
  "a hammer",
  "a sword",
  "the sun",
  "the moon",
  "a bear",
  "a bull",
  "a dragon",
  "a falcon",
  "a lion",
  "a raven",
  "a scorpion",
  "a snake",
  "a stag",
  "a wolf"
    ];
   $bannerFeat = Roller($bannerFeatD20);

//d10 The company’s commander is...
$commanderD10 = [
  "a brilliant strategist",
  "a scion from a prominent family",
  "an outcast from a prominent family",
  "a dashing swashbuckler",
  "a brutish thug",
  "a celebrated war hero",
  "a disgraced knight",
  "an anointed knight",
  "a career soldier",
  "a former arena champion"
    ];
   $commander = Roller($commanderD10);

//d6 The company’s attitude toward their commander is...
$commanderAtD6 = [
  "friendly and loyal",
  "respectful and business-like",
  "cautious and uncertain",
  "terrified and tight-lipped",
  "disappointed and disrespectful",
  "agitated and restless"
  ];
 $commanderAt = Roller($commanderAtD6);

//d8 The company specializes in...
$specialD8 = [
  "siege-breaking",
  "holding redoubts",
  "frontal assaults",
  "skirmishes",
  "patrolling",
  "flanking maneuvers",
  "guerilla tactics",
  "foraging"
  ];
  $special = Roller($specialD8);

//d8 The company is notorious for...
$fameD8 = [
  "taking no prisoners",
  "branding prisoners",
  "incompetence",
  "cowardice",
  "singing bawdy songs",
  "romantic escapades",
  "eating everything that is available",
  "drinking too much ale and wine"
  ];
   $fame = Roller($fameD8);

//d6 Most soldiers in the company are outfitted with...
$armourD6 = [
  "patched leather armor",
  "leather armor marked with the symbol of their liege lord",
  "helms and breastplates emblazoned with the symbol of their liege lord",
  "well-maintained chainmail",
  "well-worn scale armor",
  "newly-forged scale armor"
  ];
   $armour = Roller($armourD6);

//d12 Most soldiers in the company are equipped with...
$equipD12 = [
  "longswords and shortbows",
  "longswords and crossbows",
  "longswords and shields",
  "shortswords and longbows",
  "shortswords and shields",
  "mornngstars and crossbows",
  "battleaxes and handaxes",
  "warhammers and shields",
  "spears and shields",
  "longspears and shortswords",
  "pikes and shortswords",
  "halberds and handaxes"
  ];
   $equip = Roller($equipD12);

//d8 Most soldiers in the company are...
$bodyD8 = [
  "trained men-at-arms",
  "militia men",
  "veterans of war",
  "prisoners of war",
  "conscripts from a city",
  "conscripts from peasant villages",
  "convicted criminals",
  "green boys"
  ];
   $body = Roller($bodyD8);

//INDIVIDUAL SOLDIERS
//d12 The soldier is...
$soldierD12 = [
  "a farm boy",
  "the son of a miner or fisherman",
  "a veteran of gladiatorial combat",
  "a veteran of warfare",
  "a prisoner of war",
  "a political dissident",
  "the son of a poor man",
  "a drunk",
  "a fugitive criminal",
  "a former pirate",
  "a failed craftsman",
  "a favorite among the ladies"
  ];
   $soldier = Roller($soldierD12);

//d12 The soldier fights for...
$motivationD12 = [
  "the steady pay",
  "the love of someone he cannot have",
  "pure bloodlust",
  "a chance to deal out sadistic torment",
  "a chance at vengeance",
  "gold to repay debts",
  "gold to aid a family member",
  "a chance to escape from life imprisonment",
  "a chance at redemption",
  "god and country",
  "fortune and glory",
  "strength and honor"
  ];
   $motivation = Roller($motivationD12);

//d12 On the soldier’s face is...
$faceD12 = [
  "a large wart",
  "an eyepatch",
  "an unsightly scar",
  "a haughty sneer",
  "a look of sadness",
  "a stupid grin",
  "an eager grin",
  "a frame of long, beautiful long hair",
  "ferocious sideburns",
  "a neatly-trimmed goatee",
  "an unruly beard",
  "a lush, thick mustache"
  ];
   $face = Roller($faceD12);

//d10 The soldier carries...
$carriesD10 = [
  "a blade with soft leather tassels dangling from the pommel",
  "a blade with a carved hilt made of ",
  "a blade with a sculpture into the steel of the guard depicting a ",
  "a blade made of blackened steel",
  "a highly polished blade",
  "a token from a sweetheart",
  "a token from a parent",
  "a letter from a fallen comrade",
  "a trophy from a fallen enemy",
  "a ribbon from a faraway maiden"
  ];
   $carries = Roller($carriesD10);
   $ext = "";
   if ($carries == "a blade with a carved hilt made of ") {
     $extD0 = [
       "ivory",
       "jade",
       "soapstone",
       "ebony",
       "mahogany",
       "oak"
      ];
      $ext = Roller($extD0);
   } elseif ($carries == "a blade with a sculpture into the steel of the guard depicting a ") {
     $extD0 = [
       "dragons",
       "lions",
       "scorpions",
       "snakes",
       "spiders",
       "wolves"
      ];
     $ext = Roller($extD0);
   }
   $carries .= $ext;

?>

					<h1>Militia Recluter</h1>
					<h2>This tool reclutes a militia and than sigles one out.</h2>
					<line></line><!-- separation line -->
          This war band uses a <?=$color?> banner with a <?=$bannerFeat?> in the center. They are commanded by <?=$commander?> who is <?=$commanderAt?> towards his soldiers. They are specialize in <?=$special?> and are renown for <?=$fame?>. They are a band of <?=$body?> that are equiped with <?=$armour?> and are armed with <?=$equip?>.<br>
          <h3>Single Soldier</h3><br>
          This soldier is <?=$soldier?> that fights for <?=$motivation?>. His face
          <?=$face?><br>
          <?=$carries?><br>
					<line></line><!-- separation line -->
					<input type='button' class="button" onclick='location.reload();' value='Generate New' /><br>
					<!-- <a href="#" class="button">Generate New</a><br> -->
					<line></line><!-- separation line -->
          <date>Arbust0: 22 april 2017 - v2.0b</date>
				</text>
				<line></line>
					<?php require_once("social.html"); ?>
				<line></line>
				</div><!-- animation -->
				<?php require_once ("footer.html"); ?>
