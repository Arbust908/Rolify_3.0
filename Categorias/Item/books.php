<?php require_once("math.php"); ?>
<?php
//Random Books
//d20 The book's subject is...
$roll = rand(1,20);
$subject = "";
  if ($roll == 1) {
    $extD0 = ["healing tonics","metallurgy","pyromancy","poisoncraft","potionmaking","recipes"];
    $subject = "alchemy and potions : ". Roller($extD0);
  } elseif ($roll == 2) {
    $extD0 = ["fortresses and palaces","painting","sketching","sculpture","stonemasonry","temples and tombs"];
    $subject = "art and architecture : ". Roller($extD0);
  } elseif ($roll == 3) {
    $extD0 = ["comets","constellations","moon","sun","stars","strange phenomena"];
    $subject = "astronomy and astrology : ". Roller($extD0);
  } elseif ($roll == 4) {
    $extD0 = ["domestic beasts","habits","handling","husbandry","poisonous beasts","regional bestiary"];
    $subject = "beast lore : ". Roller($extD0);
  } elseif ($roll == 5) {
    $extD0 = ["conjurings","exorcisms","fiendish bargains","fiendish bestiary","fiendish realms","fiendish symbols"];
    $subject = "demonology : ". Roller($extD0);
  } elseif ($roll == 6) {
    $extD0 = ["anthropomancy","crystal gazing","oneiromancy","palm reading","tarot cards","tea leaves"];
    $subject = "divination : ". Roller($extD0);
  } elseif ($roll == 7) {
    $extD0 = ["alchemical remedies","anatomy","herbal remedies","prayers","rituals","surgery"];
    $subject = "healing arts : ". Roller($extD0);
  } elseif ($roll == 8) {
    $extD0 = ["healing herbs","mushrooms","poisons","roots","trees","wildflowers"];
    $subject = "herb lore : ". Roller($extD0);
  } elseif ($roll == 9) {
    $extD0 = ["ancient","cultural","economic","military","political","regional"];
    $subject = "history : ". Roller($extD0);
  } elseif ($roll == 10) {
    $extD0 = ["ancient","forbidden","exotic","grammar and punctuation","translations","traveler's phrases"];
    $subject = "languages : ". Roller($extD0);
  } elseif ($roll == 11) {
    $extD0 = ["adventure","fairy tales", "folk tales", "murder mystery","romance","satire"];
    $subject = "literary fiction : ". Roller($extD0);
  } elseif ($roll == 12) {
    $extD0 = ["gems","metals","mining sties","strategy","rocks","smithing"];
    $subject = "mining and mineralogy : ". Roller($extD0);
  } elseif ($roll == 13) {
    $extD0 = ["heroic ballads","love ballads","bawdy tunes","dirges and laments","hymns","works of a celebrated singer"];
    $subject = "music and songs : ". Roller($extD0);
  } elseif ($roll == 14) {
    $extD0 = ["animation","corpses","lichdom","spirits and souls","undead bestiary","vampirism"];
    $subject = "necromancy : ". Roller($extD0);
  } elseif ($roll == 15) {
    $extD0 = ["comedy","drama","history","romance","satire","tragedy"];
    $subject = "plays : ". Roller($extD0);
  } elseif ($roll == 16) {
    $extD0 = ["ballads","epic poetry","love poetry","lyric poetry","odes and laments","works of a celebrated poet"];
    $subject = "poetry and poems : ". Roller($extD0);
  } elseif ($roll == 17) {
    $extD0 = ["apocalypse","astronomical events","birds","dreams","visions","weather"];
    $subject = "prophecies and omens : ". Roller($extD0);
  } elseif ($roll == 18) {
    $extD0 = ["afterlife","rituals and practices","religious history","saints and martyrs","sacred symbols","sacred texts"];
    $subject = "theology : ". Roller($extD0);
  } elseif ($roll == 19) {
    $extD0 = ["elementalism","enchantment","illusions","summoning","teleportation and travel","warding"];
    $subject = "true magic : ". Roller($extD0);
  } elseif ($roll == 20) {
    $extD0 = ["ancient ruins","exotic travelogue","economics and taxation","foreign cultures","regional landmarks and terrain","trade routes"];
    $subject = "travel and trade : ". Roller($extD0);
  }
   $subject .= "";
//d10 The book's condition is...
$conditionD10 = [
  "worn and tattered",
  "poor. An ink stain obscures a fair amount of the pages",
  "accidentally damaged. Various water damage around the edges but readable",
  "vandalized. It appears that a good dozen pages have been ripped out",
  "deliberately damaged. Towards the middle there is a section hollowed out. In this hiding place, you find ",
  "badly damaged. A lot of the ink has run through water damage and it is nearly illegible",
  "ancient. The pages crumble as they turn",
  "strange. The pages are blank?",
  "good, but used. There are handwritten notes in the margins of the pages",
  "pristine. You can smell the ink drying"
  ];
   $condition = Roller($conditionD10);
   $ext = "";
   if ($condition == "deliberately damaged. Towards the middle there is a section hollowed out. In this hiding place, you find ") {
     $extD0 = ["a locket","a knife","a small hammer","a small scroll","a vial of mysterious liquid","a ring"];
     $ext = Roller($extD0);
   }
   $condition .= $ext;
//d12 The book's cover is...
$coverD12 = [
  "missing. The pages are bound with string woven through holes near the spine",
  "stained leather. Some sign of wear",
  "wooden. The title is carved into the spine",
  "paperback",
  "animal hide. The fur is still on",
  "stone. Iron rings hold it together",
  "cast Iron. Hinges keep it bound",
  "leather with gemstones embedded in it",
  "leather with the title branded on it",
  "leather with gilding on the spine",
  "torn off. It's kept together by a leather belt",
  "tree Bark. Dried vine binds it"
  ];
   $cover = Roller($coverD12);
//d10 The book is...
$isD10 = [
  "a standalone volume, the author's only published work",
  "a standalone volume, the author's only surviving work",
  "a standalone volume, written by a prolific but obscure author",
  "a standalone volume, written by a well-known author",
  "the sequel to a book by the same author",
  "a part of a series with ",
  "a single volume of a larger work with ",
  "an edition of a regularly published book with multiple authors",
  "a collection of works by the same author",
  "an anthology of works by several authors",
  ];
  $is = Roller($isD10);
  if ($is == "a part of a series with " || $is == "a single volume of a larger work with " ) {
    $is .= (rand(3,8))." books.";
  }
  $is .= "";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Books </title>
  </head>
  <body>
    <h2> <b><?=$subject?></b> </h2>
    <main>
      The book's subject is <b><?=$subject?></b>.<br>
      The book's condition is <b><?=$condition?></b>.<br>
      The book's cover is <b><?=$cover?></b>.<br>
      The book is <b><?=$is?></b>.<br>
    </main>
  </body>
</html>
