<?php require_once("head.php");?>
<?php

//d20 Games, Contests, and Events
$eventD20 = [
  "a group of commoners is playing horse shoes out back",
  "the party is surprised to find the country darts league in full swing as they enter. 'The waitresses are used to the chaos and dodge darts easily', The half ogre bouncer is using lawn darts",
  "a group of Hill Dwarves are in the middle of a drinking contest, and two of them are passed out already. The Prize is a solid platinum stein",
  "wet Chainmail contest!",
  "four large Barbarians are loudly sledging each other during an arm wrestling competition",
  "a shy teenage girl is reciting bad poetry in a corner. No one is paying the slightest bit of attention to her",
  "it's trivia night! Those scholars from the School of History and the Arts at the University always win, but tonight, we represent and the School of Alchemy will show those smug book-snobs what it means to be a nerd",
  "a promoter is working his way around the tables looking for challengers to fight the local champion pugilist",
  "it's a sausage fest! The place is packed with dwarves eager to devour the all-you-can-eat sausage special",
  "an over-sized brute is arm-wrestling crushing the hand of everyone in sight",
  "some goblins are throwing dice with some animated skeletons at a table in the corner",
  "a goblin is doing a poor job at cheating at a dice game, while a skeleton is doing an excellent job at cheating",
  "a 7'2'' red dragonborn with a 5' bastard sword is having a drinking contest with a dwarf. The dragonborn has a 4-pint tankard, and is almost managing to keep pace",
  "a party sits in the corner booth playing cards. All of them are cheating, except the paladin, who, curiously, is winning",
  "a mountain of a man in barbarian leathers is arm wrestling a small dragon and winning",
  "an awakened Roper is winning two games of billiards at once",
  "a group of drunken pixies is playing hide and seek by hiding behind patrons",
  "the players have stumbled into a regional card championship being held that night. The buy in is huge, but so is the pot",
  "a shady looking gnomish inventor is proudly showing off his latest invention. He calls it a 'slot machine'",
  "a grey haired story teller is sitting near the fire holding a contest, He'll give a large purse for a story he hasn't heard yet, but so far no one has won",
  ];
   $event = Roller($eventD20);

//d12 Entertainment
$entertainmentD12 = [
  "the bartender who tells elaborate stories about where the stuffed wyrmling dragon on the mantel came from. In reality, he’s a retired wizard and it’s his familiar which grew sick and died. He keeps it as a memento",
  "a bard who is telling a story about the player’s latest act of daring do. He’s embellishing quite a bit. When he recognizes the party he makes a big spectacle",
  "a bard who is telling the story of the player’s latest exploit. It’s an obvious character assassination",
  "a local bardic group, The Rolling Boulders, who are performing, and a large crowd of drunken groupies will not stop screaming",
  "a beggar who offers to sing for a few coppers. You heard him singing to the last table. He's awful",
  "a sassy fortune teller has set up shop in a corner booth. She informs you that she sees a hangover in your near future",
  "a stirring rendition of 'The Lady and the Faerie Dragon' has the crowd calling for an encore from the minstrels",
  "the lute-player who catches some undergarments from the crowd and drapes them across the ridiculous horned helm he wears",
  "The Deep Tones. A quartet of dwarves with long beards and deep voices singing a capella favorites from places without light (or proper music)",
  "Shaela Windspeaker. An elf-maid singer-songwriter with a bit of a whiny voice who is slowly making her way through her most recent song of protest against the previous and the present centuries of war",
  "a nervous show-wizard on the small stage who is doing tricks with Prestidigitation for the un-amused patrons",
  "a pair of musicians warbling well known drinking songs. They have made an impromptu stage out of several tables. One of them seems to be tilting precariously"
  ];
   $entre = Roller($entertainmentD12);

//d20 Patrons and Staff
$staffD20 = [
  "a poor farmer is trying to pay his bar tab with a sack of potatoes and a barrel of pickles",
  "a sea captain has set up shop at a table and is trying to sell mementos and souvenirs from his latest great voyage of exploration. Birds, exotic coins, tiny mermaids, he has it all. Some of it looks fake though. A tiny bit looks disturbingly real",
  "a ranger sits alone in a corner, smoking. A hood covers most of his face. At his feet is a sleeping wolfhound. Everyone is giving him a wide berth",
  "a lone Troll is drinking at the end of the bar and softly crying and singing one country ballad after another",
  "a stoned magician is fumbling his way through one awful card trick after another",
  "a mixed group of Elves are drinking bad wine and holding scented handkerchiefs up to their noses to keep out the stench. One has an obsidian bow strapped to her back",
  "a young woman and gruff man are asking the patrons questions about themselves. When they get to the players, the woman is interested by their adventuring tales. Little do they know, they're talking to the heir apparent and he trusted guard",
  "two guards are arguing at a table over who the captain likes more by comparing almost identical spears and claiming to have the better one",
  "a sad clown is drinking a beer alone",
  "a handsome young woman is holding court among some of her would-be suitors. Her father interrupts, and she stalks off embarrassed",
  "some idiot is having a stag night. His friends are loud and obnoxiously harassing the barmaids",
  "it's ladies night! And it's not disappointing... A few pretty little things from the weavers' guild are here, a couple of attractive healers from the temple, and the beautiful new town librarian",
  "a surly old witch is drinking sherry while stroking the fat grey cat sitting on her lap",
  "the barkeep is a marilith, mixing up four drinks at a time",
  "the barmaid is a succubus, she makes great tips",
  "the attendant in the bathroom is a foul-smelling zombie. He offers you a mint crystal",
  "behind the bar is a gnomish alchemist with a penchant for mixology experiments",
  "the toothless mop-hand reminisces with a hobgoblin military has-been over ales about how an otyugh in the loo isn't as bad as the time a carrion crawler was in there",
  "the barmaid is a doppelganger. When she returns to your table with your drinks she has taken the form of one of your party",
  "a fat priest is doing an excellent jiggly dance in rhythm with the music. Either that or a gelatinous cube has made it's way onto the dance floor?",
  ];
   $staff = Roller($staffD20);

//d5 Questionable drinks
$drinksD5 = [
  " cocktail: Pixiewine. Each glass of this crisp, floral-scented wine is served with a pixie",
  " cocktail: Suckerpunch. Each glass of this potent purple-red punch has several small writhing tentacles that reach out of the glass to attach to your face with their suckers. It actually feels kind of nice",
  ": Bring-Your-Own-Horn. Bring the horn of your favorite beast or monstrous humanoid (any size!), and we'll fill it with cheap ale or wine for 2 cp",
  " cocktail: Mindbomb. It's made with absinthe and explosive powder",
  " cocktail: Fireball. Served by wizards of 5th level or higher",
  " cocktail: Stonebones. A powerful rum cocktail made with powder gorgon horn and basilisk eye. It's only partial paralysis",
  ];
   $drinks = Roller($drinksD5);

//d20 Schemes, Mischief, and Trouble
$trobuleD20 = [
  "a group of highway men are drunkenly, and a little too loudly, discussing the caravan they pillaged outside of town and what to do with their shares",
  "adventurers are manhandling a companion turned to stone by a basilisk into the bar. The rouge is trying to pawn him off to the bartender as a hat rack. The bartender is considering it",
  "the bartender is out of mugs because a wizard is passed out in a corner over a table covered in mugs. His drunken familiar attacks anyone approaching the table preventing the mugs recovery",
  "a Faerie Dragon is passed out in the rafters. Dangling from one claw is a lacy brassiere",
  "a fat Gnome is peddling smelly cheese from a wicker basket",
  "a drunken beholder is getting surly. Or feeling playful, it's hard to tell",
  "two smugglers are talking in a booth before they start to argue. They both shoot at each other, one of them dies. Nobody's completely sure who shot first",
  "a man is sitting alone, speaking relatively normally to the empty seat across from him, before yelling out in anger",
  "a pair of Ratfolk are being harassed by a few drunken patrons. They're not fighting back",
  "a child is attempting to set up a prank against a less than favorable character. He's close, but you can see a flaw in his plan that you could solve",
  "it's ladies night! And this bar is a sausage fest",
  "a necromancer leads a stumbling-drunk patron out the door",
  "the bouncer brains an unruly goblin with his morningstar. No one cares because the party is rocking",
  "a knife splits the bulls eye of the elves' in-progress dart game. The elves draw bows and start shooting the place up",
  "an illithid is telling fortunes with a deck of tarot cards on an overturned barrel out front. Some say it's cheating because he can read minds, but I say it's cheating because he can eat minds",
  "an otyugh made a mess in the loo again",
  "at the darts board, a wood elf is being hustled, and already owes a significant amount of money to the loud group of humans around him",
  "the tavern is full of groups of tourists, all admiring a single poster on the bulletin board. Soon you realize they're all adventuring parties, and there is only one job left. They all begin to run out the door to be the first to complete it",
  "a large cow sits in one end, with a wizard muttering 'I'm sure this never happens babe' in its ear",
  "the taproom is packed from wall to wall. A regal dwarf bedecked with a large chain is standing on the bar buying everyone drinks and preaching to the merit of the Gundar the great god of revelry",
  ];
   $trobule = Roller($trobuleD20);

//d40 You have heard of this tavern before/eaten there before because...
$rumorD40 = [
  "they make a mean kirschtorte",
  "they really know their pierogies",
  "they are the borscht capital of the world",
  "their reputation for gołąbkis is unrivaled",
  "they put bacon on everything",
  "that one smoking hot waitress",
  "they always have horse parking",
  "the carrot porridge is to die for",
  "no one knows where it is so its usually quiet",
  "it's open later than anything else in town",
  "no one except adventurers are brave enough to eat at a place built under the lightning rail so the merchants and needy townsfolk stay away",
  "they buy whatever meat you bring in and cook it fresh",
  "they ruthlessly drove the other businesses out of town and you were starving",
  "tasty desserts. The cheese-pie is to die for!",
  "beer selection. They have a great selection of ales",
  "homebrew beer. They brew their own dragon-stout in-house!",
  "meat. The proprietor is a hunter who goes into the woods every day to catch and to kill the main roast",
  "beastly decor. The walls are covered in furs, antlers, and beast heads",
  "fancy decor. The booths are separated by beautiful lace curtains and a pleasant scent of incense permeates the air",
  "heroic tales. The proprietor slayed a dragon",
  "sad tales. The barkeep is a stunning noblewoman who eloped with the poor sonofabitch who used to own this place before died",
  "sex appeal. The barmaids wear low-cut blouses and/or tight skirts",
  "friendly service. The barmaids are real friendly",
  "gamblers' den. The dice game is high-stakes",
  "freakish staff. The bouncer is half-troll",
  "bad-ass staff. The bouncer has a dragon tattoo on his face",
  "high-end wines. Their wines come from some unpronounceable Elvish island",
  "magical drinks. The barkeep is an alchemical wizard who serves up love potions, sleeping draughts, and mustache tonics. (Some might argue that a good mustache tonic is all the love potion one needs.)",
  "entertainment. The barkeep here plays a fine piano",
  "decorations, they have trophies from everywhere",
  "reviews, some sod with a pen, paper, and those newfangled word things has written a piece on them",
  "nobility, the high society types like it",
  "admittance is a status symbol",
  "people, its where you go to find troubleshooters",
  "warmth, the walls magically keep out the chill and snow",
  "the Dwarves built it",
  "it was once a library and there is a huge selection of books to read",
  "it was once a temple and the half dead god who was worshiped there still occasionally tries to smite the defilers, sometimes with more success than others",
  "they accept a generous line of credit",
  "it's an exotic location, and spelljammers sometimes stop by, bringing trinkets from across the planes",
  ];
   $rumor = Roller($rumorD40);

 $name = InnName();
?>

					<h1>Inn Maker</h1>
					<h2>This tool constructs a lively Inn with a tabern.</h2>
					<line></line><!-- separation line -->
          <h2><?=$name?></h2>
          <?=$name?> is an inn where <?=$event?>. You seam to be entretaind by <?=$entre?><br>
          As you enter the tavern you see <?=$staff?>. Tonight's special <?=$drinks?>.<br>
          Trouble is brewing <?=$trobule?>.<br>
          You know the inn because <?=$rumor?>.<br>
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
