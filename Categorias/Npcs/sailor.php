<?php require_once("math.php"); ?>

<?php
//Random Sailors
//The sailor is...
$isD12 = [
  "a veteran of many voyages",
  "a survivor of a notorious shipwreck",
  "a cunning pirate, sailing under a false name",
  "a green boy, still naive about the dangers of life at sea",
  "a bright-eyed young sailor, eager to see the world",
  "a disillusioned man, going through the motions",
  "a sad young man who misses his family",
  "a happy-go-lucky fellow who loves life aboard a ship",
  "a terrible rake with a sweetheart in every port",
  "strong as an ox, but with a gentle heart",
  "wiry and quick, scaling the rigging faster than anyone",
  "a dangerous man, fierce and bad tempered"
  ];
   $is = Roller($isD12);

//d20 Tattoo: The sailor has...
$tattoD20 = [
  "a dagger tattoo",
  "an anchor tattoo",
  "a skull tattoo",
  "a thorny vine tattoo",
  "a snake tattoo",
  "a fish tattoo",
  "a spider web tattoo",
  "an octopus tattoo",
  "a whale tattoo",
  "a lobster tattoo",
  "a crab tattoo",
  "a mermaid tattoo",
  "a shark tattoo",
  "a dragon tattoo",
  "a cloud with a lightning bolt",
  "a single-mast sailboat",
  "a double-mast ship",
  "a sunburst tattoo",
  "a moon tattoo",
  "a tattoo of a constellation of stars"
  ];
   $tatto = Roller($tattoD20);

//d20 The sailor's tattoo is a memento of...
$mementoD20 = [
  "a particularly lengthy voyage",
  "sailing through a dangerous part of the world",
  "crossing a wide sea",
  "visiting an exotic port",
  "visiting an enchanted island",
  "winning a contest",
  "fighting in a battle",
  "serving for a king",
  "surviving a shipwreck",
  "surviving an attack by a sea monster",
  "fending off pirates",
  "sailing with pirates",
  "his first voyage",
  "a comrade, lost at sea",
  "a long lost friend",
  "a passionate love affair",
  "a dead relative",
  "the birth of a son",
  "a traumatic childhood experience",
  "his childhood home town",
  "serving for a lord",
  "a long lost love",
  "the birth of a daughter"
  ];
   $memento = Roller($mementoD20);

//d12 Distinguishing facial feature: The sailor has...
$facialD12 = [
  "a flashy earring",
  "a scar across the cheek",
  "gold teeth",
  "a neatly trimmed beard",
  "an eyepatch",
  "a long, hooked nose",
  "bushy eyebrows",
  "long hair tied up into a bun",
  "dark, curly hair",
  "a broad grin",
  "sideburns that meet his mustache",
  "extravagant mustaches"
  ];
   $facial = Roller($facialD12);

//d12 Accessories: The sailor is wearing or carrying...
$wearsD12 = [
  "breeches with patches on the knees",
  "shiny leather boots",
  "an oversized dagger in the belt",
  "an undersized vest",
  "a silver chain around the neck",
  "a wide-brimmed hat",
  "a bandanna tied over the head",
  "a cutlass in a scabbard",
  "a knife in each boot",
  "a puffy shirt",
  "a wooden peg where a leg had been",
  "an open shirt that shows off a very hairy chest"
  ];
   $wears = Roller($wearsD12);

//d12 At the end of a long voyage, the sailor is eager to...
$afterD12 = [
  "weigh anchor and make sail again",
  "spend all his coin on drink",
  "spend all his coin in brothels",
  "spend all his coin on card games and dice",
  "send a letter home to his sweetheart",
  "send a letter home to his mother",
  "find work with the captain of a different ship",
  "find work on shore and put off making another long voyage",
  "get drunk and start a fight",
  "sleep on a real bed",
  "drink and dance the night away",
  "drink and gamble his coin away"
  ];
   $after = Roller($afterD12);

//d12 When drunk the sailor is prone to...
$drunkD12 = [
  "start a fist fight with anyone nearby",
  "sing loudly late into the night",
  "become morose and quiet, withdrawing to be alone",
  "attempt to impress the ladies with any skill, regardless of his level of mastery",
  "tell stories of epic adventures on the high seas with great fervor",
  "tell the same story about an old friend that turned to piracy",
  "act as though he's never met a stranger and everyone is his friend",
  "play childish pranks on anyone nearby, but especially those that don't look like they are having enough fun",
  "wander about town until the wee hours",
  "pass out in a stable and sleep among the horses and pigs until dawn",
  "pass out on a beach or dock, listening to the lullaby of waves tumbling in",
  "steal a dinghy and pass out on the deck of a strange ship"
  ];
   $drunk = Roller($drunkD12);

//d12 What the sailor really wants is to...
$wishD12 = [
  "own his own ship",
  "retire to a quiet place inland somewhere, as far from the open ocean as possible",
  "make sure his wives on either side of the sea never learn of each other",
  "marry and have a passel of kids to return home to",
  "be recognized for his hard work and maybe be first mate some day",
  "get off the ship and own a shipping brokerage",
  "write a drinking song that will be recognized by everyone",
  "forget the demons of his past",
  "retire to a quiet fishing village with a little boat and a little house with a little woman",
  "face down one of the sea monsters he's heard his mates go on and on about",
  "kill the captain; that guy's an asshole",
  "be a pirate"
  ];
   $wish = Roller($wishD12);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TE | Sailor </title>
  </head>
  <body>
    <h2> </h2>
    <p>
      This sailor is <?=$is?> that has <?=$tatto?> as a memento of <?=$memento?>.<br>
      He has <?=$facial?> and is carreing <?=$wears?>.<br>
      After a long voyage he is egar to <?=$after?>, when he gets drunk he is prone to <?=$drunk?> and he really wishes to <?=$wish?>.<br>
    </p><br>
  </body>
</html>
