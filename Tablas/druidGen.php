<?php require_once("math.php"); ?>
<?php
//Random Druids
//d20 The druid is...
$isD20 = [
  "A wildling orphan",
  "A seasoned herbalist",
  "A militant environmentalist",
  "A well-known healer",
  "A brash, young fool",
  "A rebellious noble",
  "A patient teacher",
  "A mysterious foreigner",
  "A beautiful maiden",
  "A rugged outdoorsman",
  "A veteran wilderness guide",
  "A beastly brute",
  "A dark-hearted avenger",
  "A curious philosopher",
  "A shy beastfriend",
  "A fierce guardian",
  "An exiled spellcaster",
  "A mystic shaman",
  "A savage priest or priestess",
  "A village elder"
  ];
   $is = Roller($isD20);
//d12 The druid learned the craft from...
$learntD12 = [
  "Apprenticing to a woodland witch",
  "Studying wilderness lore at an academy",
  "A parent who was also a druid",
  "Running a garden for royalty",
  "Surviving in the wild alone for years",
  "Conversing with primal spirits",
  "An enchanted beast",
  "Studying old books",
  "The circle of druids that took him/her in as a child",
  "A fey creature that offered redemption for past transgressions against nature",
  "A mysterious village elder",
  "Time spent stranded in a wild, foreign land"
  ];
   $learnt = Roller($learntD12);
//d10 The druid has...
$eyesD10 = [
  "Sky blue eyes",
  "Deep sea blue eyes",
  "Bright grass green eyes",
  "Sunset golden eyes",
  "Pale moss green eyes",
  "Muddy brown eyes",
  "Dark, stormy grey eyes",
  "Night-sky purple eyes",
  "Dusty brown eyes",
  "Stony grey eyes"
  ];
   $eyes = Roller($eyesD10);
//d10 The druid has...
$hasD10 = [
  "An earthy scent",
  "Bits of green under the fingernails",
  "Stains of bird droppings on his/her clothes",
  "A long, hooked, beak-like nose",
  "Large bear-like shoulders and hands",
  "A pointy, rodent-like nose",
  "Very hairy arms and legs",
  "Long, sharp fingernails",
  "Beautiful, healthy skin",
  "A greenish, mossy beard"
  ];
   $has = Roller($hasD10);
//d12 The druid...
$druidD12 = [
  "Stares hungrily like a wolf",
  "Stares suspiciously like a cat",
  "Hisses like a snaking when he/she laughs",
  "Barks like a seal when he/she laughs",
  "Twitters like a bird when he/she laughs",
  "Walks ponderously like an ox",
  "Walks gracefully like a panther",
  "Eats like a horse",
  "Eats like a bird",
  "Speaks very little",
  "Fidgets like a squirrel",
  "Pounces like a lion"
  ];
   $druid = Roller($druidD12);
//d20 The druid shares an especially close connection with...
$connectionD20 = [
  "Aquatic mammals",
  "Bears",
  "Birds of prey",
  "Cats",
  "Hoofed mammals",
  "Reptiles and amphibians",
  "Songbirds and waterfowl",
  "Wolves and dogs",
  "Blizzards and snowstorms",
  "Hurricanes and tides",
  "Volcanoes, geysers, and hot springs",
  "Earthquakes",
  "Thunderstorms and floods",
  "Forests and trees",
  "Mountains and stone",
  "Caves and shadows",
  "Jungles and rainstorms",
  "Glaciers and tundra",
  "Deserts and sand",
  "Swamps and marshes"
  ];
   $connection = Roller($connectionD20);
//d10 The druid wields...
$wieldsD10 = [
  "A wooden staff",
  "A wooden club",
  "A club and a wooden shield",
  "A scimitar",
  "A scimitar and a wooden shield",
  "A spear",
  "A spear and a wooden shield",
  "A dagger",
  "A thorny whip made from a tough vine",
  "Tooth and claw"
  ];
   $wields = Roller($wieldsD10);
//d8 The druid carries...
$carriesD8 = [
  "A sprig of holly",
  "A sprig of mistletoe",
  "A yew wand",
  "A cutting from a rare plant",
  "A totem necklace, ",
  "A totem rod, ",
  "A totem necklace, ",
  "A totem rod, "
  ];
   $carries = Roller($carriesD8);
   if ($carries == "A totem necklace, ") {
     $roll = rand(1,2);
       if ($roll == 1) {
         $extD0 = ["beaks","bones","claws","shells","tiny skulls","teeth"];
         $carries = "A totem necklace with " . (Roller($extD0));
       } elseif ($roll == 2) {
         $extD0 = ["seed pods", "dried fruit", "root clippings", "fresh flowers"];
         $carries = "A totem necklace with " . (Roller($extD0));
       }
   } elseif ($carries == "A totem rod, ") {
     $roll = rand(1,2);
       if ($roll == 1) {
         $extD0 = ["bones","feathers","fur","scales"];
         $carries = "A totem rod with " . (Roller($extD0));
       } elseif ($roll == 2) {
         $extD0 = ["tree bark","fresh leaves","berries","seeds and tree sap"];
         $carries = "A totem rod with " . (Roller($extD0));
       }
     }
     $carries .= "";
//d12 The druid also carries...
$alsoD12 = [
  "A small knife",
  "A wooden flute",
  "A hunting horn",
  "A shard of obsidian, warm to the touch",
  "A piece of crystal that glows in moonlight",
  "A small pouch full of seeds",
  "A small pouch full of herbal tea",
  "Several vials of herbal extracts",
  "A pair of herb snips",
  "A pocketbook field guide to flora and fauna in a region the druid has never visited",
  "A book of Elvish poems and songs",
  "Several vials of healing potions"
  ];
   $also = Roller($alsoD12);
//d10 The druid wears...
$wearsD10 = [
  "Robes of earth tones",
  "A dark green cape",
  "Shiny leather boots with fur",
  "Boots of soft leather",
  "A leather baldric",
  "Leather armor decorated with leafy motifs",
  "Armor made from the hides of beasts",
  "Leather armor studded with bone",
  "A robe stained with bird droppings",
  "A robe with vines growing from its pockets"
  ];
   $wears = Roller($wearsD10);
//d12 The druid is looking to...
$lookingD12 = [
  "Find a place where a rare herb grows",
  "Drive away an unnatural intruder",
  "Lead intruders into a trap",
  "Help a wounded, legendary beast",
  "Permanently transform into a beast",
  "Locate a legendary garden",
  "Stop the spread of mining",
  "Locate a legendary grove",
  "Stop the spread of grazing",
  "Swap recipes and herb lore",
  "Bear witness to nature’s awesome power",
  "Provide a safe haven for a hunted beast",
  "Inspire a love for nature",
  "Drink some tea mixed with strong spirits"
  ];
   $looking = Roller($lookingD12);
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Druid | Tables</title>
  </head>
  <body>
    <h2> Druid Tamer </h2>
    <p>
      The druid is <b><?= $is ?></b> that learned from <b><?= $learnt ?></b>.<br>
      The druid has <b><?= $eyes ?></b> and <b><?= $has ?></b>.<br>
      The druid <b><?= $druid ?></b> and shares an especially close connection with <b><?= $connection ?></b>.<br>
      The druid wields <b><?= $wields ?></b>, carries <b><?= $carries ?></b>, <b><?= $also ?></b> and wears <b><?= $wears ?></b>.<br>
      The druid is looking to <b><?= $looking ?></b>.<br>
    </p>
  </body>
</html>
