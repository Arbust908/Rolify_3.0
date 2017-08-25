<?php require_once ("head.php"); ?>
<?php
//Random Sailors

//d12 The sailor is...
$sailorD12 = [
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
  "a dangerous man, fierce and bad tempered",
  ];
 $sailor = Roller($sailorD12);

//d20 Tattoo: The sailor has...
$tatooD20 = [
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
 $tatoo = Roller($tatooD20);

//d20 The sailor's tattoo is a memento of...
$mementoD20 = [
  "A particularly lengthy voyage",
  "Sailing through a dangerous part of the world",
  "Crossing a wide sea",
  "Visiting an exotic port",
  "Visiting an enchanted island",
  "Winning a contest",
  "Fighting in a battle",
  "Serving for a king",
  "Serving for a lord",
  "Surviving a shipwreck",
  "Surviving an attack by a sea monster",
  "Fending off pirates",
  "Sailing with pirates",
  "His first voyage",
  "A comrade, lost at sea",
  "A long lost friend",
  "A long lost love",
  "A passionate love affair",
  "A dead relative",
  "The birth of a son or daughter",
  "A traumatic childhood experience",
  "His childhood home town",
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
  "extravagant mustaches",
  ];
 $facial = Roller($facialD12);

//d12 Accessories: The sailor is wearing or carrying...
$hasD12 = [
  "breeches with patches on the knees.",
  "shiny leather boots.",
  "an oversized dagger in the belt.",
  "an undersized vest.",
  "a silver chain around the neck.",
  "a wide-brimmed hat.",
  "a bandanna tied over the head.",
  "a cutlass in a scabbard.",
  "a knife in each boot.",
  "a puffy shirt.",
  "a wooden peg where a leg had been.",
  "an open shirt that shows off a very hairy chest.",
  ];
 $has = Roller($hasD12);

//d12 At the end of a long voyage, the sailor is eager to...
$eagerD12 = [
  "Weigh anchor and make sail again",
  "Spend all his coin on drink",
  "Spend all his coin in brothels",
  "Spend all his coin on card games and dice",
  "Send a letter home to his sweetheart",
  "Send a letter home to his mother",
  "Find work with the captain of a different ship",
  "Find work on shore and put off making another long voyage",
  "Get drunk and start a fight",
  "Sleep on a real bed",
  "Drink and dance the night away",
  "Drink and gamble his coin away"
  ];
 $eager = Roller($eagerD12);

//d12 When drunk the sailor is prone to...
$drunkD12 = [
  "Start a fist fight with anyone nearby.",
  "Sing loudly late into the night.",
  "Become morose and quiet, withdrawing to be alone.",
  "Attempt to impress the ladies with any skill, regardless of his level of mastery.",
  "Tell stories of epic adventures on the high seas with great fervor.",
  "Tell the same story about an old friend that turned to piracy.",
  "Act as though he's never met a stranger and everyone is his friend.",
  "Play childish pranks on anyone nearby, but especially those that don't look like they are having enough fun.",
  "Wander about town until the wee hours.",
  "Pass out in a stable and sleep among the horses and pigs until dawn.",
  "Pass out on a beach or dock, listening to the lullaby of waves tumbling in.",
  "Steal a dinghy and pass out on the deck of a strange ship.",
  ];
 $drunk = Roller($drunkD12);

//d12 What the sailor really wants is to...
$wishD12 = [
  "Own his own ship",
  "Retire to a quiet place inland somewhere, as far from the open ocean as possible",
  "Make sure his wives on either side of the sea never learn of each other",
  "Marry and have a passel of kids to return home to",
  "Be recognized for his hard work and maybe be first mate some day",
  "Get off the ship and own a shipping brokerage",
  "Write a drinking song that will be recognized by everyone",
  "Forget the demons of his past",
  "Retire to a quiet fishing village with a little boat and a little house with a little woman",
  "Face down one of the sea monsters he's heard his mates go on and on about",
  "Kill the captain; that guy's an asshole",
  "Be a pirate",
  ];
 $wish = Roller($wishD12);

?>

					<h1>Sailor NPC</h1>
					<h2>This tool generates a NPC sailor</h2>
					<line></line><!-- separation line -->
					<h3><b><?=$name?> <?=$surname?></b></h3>
					This crew member is <?=$sailor?>, that has <?=$tatoo?>, a memento of <?=$memento?>.<br>
		      He has <?=$facial?> and has <?=$has?>.<br>
		      When ever he comes back from a voyage he is eager to <?=$eager?> and when he is drunk he usualy <?=$drunk?>.<br>
		      Still he wishes to <?=$wish?>.
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
