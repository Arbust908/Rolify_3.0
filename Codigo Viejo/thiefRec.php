<?php require_once ("head.php"); ?>
<?php
  //Random Thieves
  //d12 The thief is...
  $thiefIsD12 = [
    "a veteran dungeon delver",
    "a desperate footpad",
    "a reckless fortune seeker",
    "a well-known adventurer",
    "a brash, young fool",
    "a student of the craft",
    "a charismatic swindler",
    "a mysterious foreigner",
    "a femme fatale",
    "a charming rogue",
    "a dashing swashbuckler",
    "a brutish thug"
    ];
   $thiefis = Roller($thiefIsD12);

  //d12 The thief has...
  $thiefHasD12 = [
    "a long, hooked nose",
    "a bent, broken nose",
    "a cute little button nose",
    "a scar below the left eye",
    "pockmarked cheeks",
    "high cheek bones",
    "a pointy chin",
    "a thug's tattoo on the arm of ",
    "a sailor's tattoo on the arm of ",
    "an open shirt and a very hairy chest",
    "a five o'clock shadow",
    "an extravagant mustache",
    ];
   $thiefhas = Roller($thiefHasD12);
   $thEXT = "";

    if ($thiefhas == "a thug's tattoo on the arm of ") {
      $thEXTD8 = [
        "crossed bones",
        "a dagger",
        "a dragon",
        "an eagle",
        "a skull",
        "a snake",
        "a spider web",
        "thorns"
        ];
       $thEXT = Roller($thEXTD8);
    } elseif ($thiefhas == "a sailor's tattoo on the arm of ") {
      $thEXTD8 = [
        "an anchor",
        "fish",
        "a mermaid",
        "an octopus",
        "a shark",
        "a whale"
        ];
       $thEXT = Roller($thEXTD8);
    }
     $thiefhas .= $thEXT;

  //d12 The thief wears...
  $thiefWearsD12 = [
    "a flashy earring",
    "a dark red cape",
    "shiny leather boots",
    "boots with a hole in the left toe",
    "a leather baldric",
    "a wide-brimmed hat",
    "a heavy gold chain around the neck",
    "a long dark ponytail",
    "luscious golden curls",
    "a ruffled shirt",
    "a stylish coat",
    "a handkerchief in his breast pocket"
    ];
   $thiefwears = Roller($thiefWearsD12);

  // d20 The thief carries...
  $carriesD20 = [
    "some hemp rope and a silk handkerchief",
    "several over-sized sacks",
    "several torches and a much-used knife",
    "a pocketbook of notes and maps",
    "a dagger in each boot",
    "a beautiful antique scabbard",
    "a well-worn lantern",
    "climbing gear—pitons, hammer, and rope",
    "an organized set of lockpicks",
    "a crowbar",
    "an adjustable lockpick",
    "a mask",
    "the token of a love",
    "letters for blackmail",
    "a lucky charm",
    "a flask of oil",
    "a treasure map",
    "a flask filled with spirits",
    "a wineskin",
    "a little jar of mustache wax"
    ];
   $carries = Roller($carriesD20);
   $ext = $carries;
    if ($carries == "a lucky charm") {
      $extd4 = [
        "a rabbit's foot",
        "a lucky coin",
        "a horseshoe",
        "a four-leafed clover"
        ];
       $ext = Roller($extd4);
    }
    $carries = $ext;



  // d6 The thief...
  $doesD6 = [
    "sings while walking",
    "hums while walking",
    "constantly brushes the hair back from out of his or her face",
    "laughs maniacally at everything",
    "never smiles and never laughs",
    "scratches the elbow frequently",
    "picks at his or her teeth after meals"
    ];
   $does = Roller($doesD6);


  // d10 The thief is armed with...
  $armedD10 = [
    "brass knuckles",
    "a shortsword",
    "several throwing knives",
    "a crossbow with poisoned bolts",
    "a narrow-bladed dagger",
    "a serrated dagger",
    "a club and a knife",
    "a rapier",
    "a hand crossbow",
    "a garrote and a dagger"
    ];
   $armed = Roller($armedD10);

  //d10 The thief is looking for...
  $lookingD10 = [
    "accomplices to carry out a job",
    "revenge against a rival thief",
    "revenge against an officer of the law",
    "an easy mark",
    "extra muscle for a job",
    "rumors that may lead to a big score",
    "an ear to listen to some boasting",
    "the location of storied item of value",
    "someone more wealthy than you",
    "a rowdy evening of carousing",
    ];
   $looking = Roller($lookingD10);


  //d8 The thief's modus operandi is...
  $moD8 = [
    "petty theft",
    "burglary",
    "shoplifting",
    "mugging",
    "pickpocketing",
    "running heists of gems and precious metals",
    "running heists of warehoused commodities",
    "holding up outgoing wagons",
    "holding up outgoing boats"
    ];
   $mo = Roller($moD8);

  //d6 The thief prefers to operate...
  $operatesD6 = [
    "alone",
    "with a partner to provide extra muscle if things get rough",
    "with a partner to serve as a look-out",
    "with a partner to create a diversion",
    "with a gang",
    "wearing a mask",
    "wearing a full bat costume"
    ];
   $operates = Roller($operatesD6);


  //d8 Aside from theft, the thief has been known to be involved in...
  $knownD8 = [
    "distributing ",
    "fencing stolen gems and precious metals",
    "assassinations that look like accidents",
    "assassinations that frame someone else",
    "running ",
    "shaking down legitimate local businesses for 'protection'",
    "shaking down scandal-plagued city officials",
    "serving as muscle for shady merchants",
    "serving as muscle for shady brothel-keepers"
    ];
   $known = Roller($knownD8);
   $ext = "";
   if ($known == "distributing ") {
     $extD0 = [
       "smokeleaf",
       "hallucinogenic mushrooms",
       "sleepysalt (a downer)",
       "sharpsugar (an upper)"
      ];
      $ext = Roller($extD0);
   } elseif ($known == "running ") {
     $extD0 = [
       "exotic brothel",
       "low brothel",
       "high-class brothel"
      ];
      $ext = Roller($extD0);
   }
   $known .= $ext;

  //d20 Recently, the thief has been operating in or near...
  $homeD20 = [
    "a residential district",
    "an artisan's guildhall",
    "an artisan's shop",
    "a merchant's office",
    "a inn",
    "a brothel",
    "a shipyard",
    "a warehouse",
    "a temple complex",
    "a cemetery",
    "the town hall",
    "an abandoned warehouse",
    "an abandoned guildhall",
    "a shantytown",
    "the residence of a wealthy individual",
    "the palace",
    "a library",
    "the market square",
    "a gatehouse",
    "a pub",
    "a tavern",
    "the docks",
    "the bridge"
    ];
   $home = Roller($homeD20);

   //d20 The thief's favorite marks include...
   $markD20 = [
    "fishermen and sailors",
    "beggars and hobos",
    "merchants and moneychangers",
    "jewelers and gemcutters",
    "politicians and magistrates",
    "guards and sheriffs",
    "soldiers and sellswords",
    "musicians and storytellers",
    "farmers and herders",
    "servants and slaves",
    "priests and sages",
    "women and children",
    "peasant girls and farm wives",
    "young noblewomen",
    "old women",
    "noblemen",
    "harlots and madames",
    "barkeeps and barmaids",
    "peddlers and shopkeepers",
    "other thieves"
    ];
   $mark = Roller($markD20);

?>

					<h1>Thief Recluter</h1>
					<h2>This tool reclutes a thief NPC</h2>
					<line></line><!-- separation line -->
					<h3><b><?=$name?> <?=$surname?></b></h3>
					This rougish thief is <?=$thiefis?> that has <?=$thiefhas?> and wears <?=$thiefwears?>. He also carries <?=$carries?>, <?=$armed?> and when he is on the job he <?=$does?>. Currently he is looking for <?=$looking?>. The normal operation for him is <?=$mo?> <?=$operates?>. Rumors say he is involved in <?=$known?>, lives in <?=$home?> and his favorite marks are <?=$mark?> but no one really knows.
          <line></line><!-- separation line -->
					<input type='button' class="button" onclick='location.reload();' value='Generate New' /><br>
					<!-- <a href="#" class="button">Generate New</a><br> -->
					<line></line><!-- separation line -->
          <date>Published: 17 april 2017 - v0.4b</date>
				</text>
				<line></line>
					<?php require_once("social.html"); ?>
				<line></line>
				</div><!-- animation -->
				<?php require_once ("footer.html"); ?>
