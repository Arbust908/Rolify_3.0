<?php require_once("math.php"); ?>
<?php
//Random Bards
//d20 The bard is...
$bardIsD20 = [
  "a talented singer",
  "a graceful dancer",
  "a virtuoso musician",
  "a captivating storyteller",
  "a brilliant poet",
  "a scholar of history",
  "a serious actor",
  "a dashing swashbuckler",
  "a wise-cracking magician",
  "a bold knife-thrower",
  "a slippery con artist",
  "a lovable jack-of-all-trades",
  "a duplicitous spy",
  "a witty satirist",
  "a gracious knight",
  "an enchanting dancer",
  "a mysterious foreigner",
  "a rowdy jester",
  "a master of riddles",
  "a terrible singer"
  ];
   $bardIs = Roller($bardIsD20);
//d20 Always prepared to make a melody or rhythm, the bard carries his/her...
$instrumentD20 = [
  "bagpipes",
  "bells",
  "castanets",
  "cymbals",
  "drum",
  "fiddle",
  "flute",
  "harmonica",
  "harp",
  "lute",
  "lyre",
  "mandolin",
  "ocarina",
  "panpipes",
  "shawm",
  "tabor",
  "tambourine",
  "trumpet",
  "viol",
  "zither"
  ];
   $instrument = Roller($instrumentD20);
//d10 The bard’s musical instrument is...
$instIsD10 = [
  "a gift from a wealthy patron",
  "a family heirloom",
  "very old, but well maintained",
  "an old, worn-out thing",
  "in need of some repair",
  "always out-of-tune",
  "decorated with gold",
  "the product of a master craftsman",
  "something the bard made",
  "the instrument of a legendary bard"
  ];
   $instIs = Roller($instIsD10);
//d12 If things get rough, the bard has...
$roughD12 = [
  "several sharp daggers",
  "a lightweight saber",
  "a finely-crafted shortsword",
  "a longsword and a good luck charm",
  "some well-balanced throwing knives",
  "a quick-winding crossbow",
  "a bow of elvish make",
  "a shortsword of dwarvish make",
  "a heavy wooden staff",
  "a dagger in each boot",
  "a book of hexes and curses",
  "quick wits and a gift for lying"
  ];
   $rough = Roller($roughD12);
//d12 The bard also carries...
$carriesD12 = [
  "a compromising love letter",
  "a lacy favor from a maiden",
  "some parchment with half-finished poems",
  "some faded sheet music",
  "a silk handkerchief",
  "the key to well-guarded treasure chest",
  "a bundle of old books",
  "an alchemy kit and several potions",
  "a pocket field guide to local herbs",
  "a faded old map",
  "a tome of legends and historical lore",
  "a jar of mustache wax"
  ];
   $carries = Roller($carriesD12);
//d12 The bard is wearing...
$clothesD12 = [
  "tight-fitting pants",
  "a low-cut shirt",
  "a revealing set of breeches",
  "a traveler’s cloak",
  "a heavy peddler’s pack",
  "a wide-brimmed hat with a large exotic feather",
  "shiny boots made from an exotic hide",
  "a coat made from an exotic hide",
  "a large golden necklace",
  "flashy earrings",
  "dancing shoes",
  "too much perfume"
  ];
   $clothes = Roller($clothesD12);
   $ext = "";
  if ($clothes == "a wide-brimmed hat with a large exotic feather") {
    $extD00 = [
      "cockatrice",
      "giant eagle",
      "giant owl",
      "griffon",
      "hippogriff",
      "ostrich",
      "peacock",
      "phoenix",
      "roc",
      "shadowraven"
      ];
      $ext = " of a ".(Roller($extD00));
  } elseif ($clothes == "shiny boots made from an exotic hide") {
    $extD00 = [
      "basilisk",
      "crocodile",
      "demonskin",
      "dragonscale",
      "drake",
      "flamesnake",
      "lightning lizard",
      "wyvern"
      ];
      $ext = " of ".(Roller($extD00));
  } elseif ($clothes == "a coat made from an exotic hide") {
    $extD00 = [
      "dragonscale",
      "leopard",
      "owlbear",
      "sharkskin",
      "tiger",
      "zebra"
      ];
      $ext = " of ".(Roller($extD00));
  }
    $clothes .= $ext ;
//d12 The bard has...
$bardHasD12 = [
  "a silver tongue",
  "a gift for satire and wit",
  "a beautiful face",
  "incredibly good looks",
  "an easy smile",
  "a graceful manner",
  "a polite gentility",
  "impeccable manners",
  "a foul mouth",
  "a hearty laugh",
  "an alluring quality",
  "a handsome mustache"
  ];
   $bardHas = Roller($bardHasD12);
//d12 The bard is looking for...
$lookingD12 = [
  "a new tale to tell",
  "inspiration for a song",
  "a beautiful muse",
  "someone to repair a musical instrument",
  "a catchy melody",
  "experimental harmonies",
  "an edgy dance move",
  "a word that rhymes with 'hippopotamus'",
  "new styles of poetry",
  "a legendary artifact",
  "a hero to immortalize in song",
  "a night of drinking and merrymaking",
  ];
   $looking = Roller($lookingD12);
//d10 The bard is always a big hit among...
$hitWithD10 = [
  "fishermen, sailors, and pirates",
  "farmers and herders",
  "miners and travelers",
  "guards, soldiers, and sellswords",
  "members of the nobility",
  "young children",
  "idealistic youths",
  "serving girls, slaves, and harlots",
  "pretty young maidens",
  "lonely wives"
  ];
   $hitWith = Roller($hitWithD10);
//d12 The bard tells a tale of a recent visit to...
$talesD12 = [
  "a royal court",
  "a dangerous mountain",
  "a legendary tomb",
  "a distant castle",
  "a frightening lair",
  "a celebrated tournament",
  "a foreign land",
  "a witch’s home",
  "a dark prison cell",
  "a grand festival",
  "a savage and wild land",
  "a haunted castle"
  ];
   $tales = Roller($talesD12);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TE | Tables</title>
  </head>
  <body>
    <h2>Le Bard</h2>
    <p><b>
      This bard is <?=$bardIs?> with <?=$bardHas?>, that wears <?=$clothes?> and carries <?=$carries?>. His instrument is a <?=$instrument?> that was <?=$instIs?> and with it he sings tales about <?=$tales?> that is popular with <?=$hitWith?>. He is looking for <?=$looking?> and if thing get rought he has <?=$rough?>.
    </b></p>
  </body>
</html>
