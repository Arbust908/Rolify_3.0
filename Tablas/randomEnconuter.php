<?php require_once("math.php"); ?>
<?php
//d100 ... Encounter
$encounterD00 = [
1 => "Party stumbles upon a dragon's lair (Age appropriate)",
2 => "Hard Monster Encounter",
3 => "A 150 ft. sheer cliff with a spear sticking out of its side halfway up and a banner hanging from it",
4 => "Party finds hints of a rare ore or tree nearby",
5 => "Medium Difficulty Monster Encounter",
6 => "Party finds airship wreckage",
7 => "It’s your lucky day! A rainbow appears in the sky. A leprechaun awaits at its end guarding a pot of gold",
8 => "Find a great chasm leading deep into the ground. At least a few miles long and a hundred feet across",
9 => "A large group of low CR monsters ambush the party",
10 => "A swift, powerful rainstorm blows in through the area, knocking down trees and flooding rivers",
11 => "Find evidence of an Orc encampment nearby",
12 => "Stumble upon a series of caves leading deep into the ground",
13 => "Bad Luck! Incredibly Difficult Monster Encounter",
14 => "There is a wanted criminal with a bounty on their head in the area. Desperate to not get caught",
15 => "Medium Difficulty Monster Encounter",
16 => "Find a piece of alien technology (i.e. pistol, dynamite) in some wreckage",
17 => "Find a group of fairies riding squirrels as their mounts. They are hunting pixies",
18 => "Find a lost diary with many entries inside written in an unknown language",
19 => "A ladder ascends the side of a large tree all the way into the canopy 100ft. up. Glowing fruit await at the top",
20 => "Discover ruins (Inhabited by nagas / formerly inhabited by naga depending on party level)",
21 => "Easy Monster Encounter [Avoidable]",
22 => "Stumble upon evidence of a bandit encampment",
23 => "Find an ogre trap. It is a large hole with a sign out front that reads “FUD” and points down",
24 => "Find a traveling bard. Tells a legend of nearby powerful creatures / ruins / etc..",
25 => "Medium Difficulty Monster Encounter",
26 => "Find a crazy old Githzerai apothecary in a wooden hut out in the woods",
27 => "Find a thin stream of lava that has broken through to the surface. Lava mephits abound",
28 => "Stumble upon the carcass of a massive, dead sea creature, even if there is no water nearby",
29 => "Hard Monster Encounter",
30 => "Amulet rolled from the Random Item Enchantments table lays in the middle of the path. (Good and Bad Attributes)",
31 => "Find a strange stone well. There is a bucket attached which holds a skull and a single sapphire. Interesting",
32 => "Spot an exotic animal (A deer with emerald antlers, a squirrel with wings of a dragon, etc…)",
33 => "Find evidence of an Ogre encampment nearby. Wreckage from another party nearby",
34 => "Find a paladin out in the wilds, searching for a nearby demon that he must vanquish",
35 => "Medium Difficulty Monster Encounter",
36 => "Find an outcast ogre. The “smartest” of his clan and often abused because of this. (7 Intelligence)",
37 => "Find a bloodstained bit of parchment. Written upon it is a confession of love for a woman in a nearby town",
38 => "Wild Magic Zone (Roll on Sorcerer table after each spell cast while here)",
39 => "Meteor strikes the ground a few hundreds yards off. Xorn unconscious amongst the debris",
40 => "Find a field of vibrantly glowing fireflies. Caused by a nearby magical source that can be used to dye gear",
41 => "Easy monster encounter [Avoidable]",
42 => "Hard monster encounter",
43 => "Find a lovely garden out in the forest that appears to be unattended. A dryad will pappear should they disturb it",
44 => "Find the home of a friendly Oni. He is wearing clothes that appears stitched together by those of other adventurers",
45 => "Medium Difficulty Monster Encounter",
46 => "Find a patch of trees knocked down and destroyed. Evidence a massive creature has moved through recently",
47 => "Find a pile of goblin corpses stacked up with a banner impaled through the center",
48 => "Find a Power Gem. Can be used to give life to constructs or sold for a good price to the right buyer",
49 => "Find an archway of stone with symbols etched all around its border. It appears to be some sort of doorway",
50 => "A powerful natural disaster strikes the area: tornado, earthquake, tsunami, etc..",
51 => "Party discovers a potential pet (psuedodragon, a large rat, a business of ferrets)",
52 => "Party comes across a river. Seems normal except for the fact that the water is purple. As are the fish",
53 => "Party discovers a small treasure chest with no discernable way to open it. No key slot",
54 => "The party will be attacked by a were-creature in the night",
55 => "Medium Difficulty Monster Encounter",
56 => "Find a beautiful home out in the wilds with a Medusa living inside (Sedissa Liventhia) with a task for the party",
57 => "A beautiful gemstone is embedded in the center of the path. It glows a vibrantly with some strange magic",
58 => "Easy Monster Encounter [Avoidable]",
59 => "Hard Monster Encounter",
60 => "Armor rolled from the Random Item Enchantments table lays in the middle of the path. (Good and Bad Attributes)",
61 => "Find a hidden slaver’s camp",
62 => "Find a large bushel of highly deadly berries. Can be used to make potent poisons",
63 => "Find evidence of a Goblin encampment nearby",
64 => "Find the lost crown of a local bullywug king. Made from a large seashell",
65 => "Medium Difficulty Monster Encounter",
66 => "Find a cockatrice breeder’s farm out in the wild. Has a valuable, prized cockatrice as his pet",
67 => "Stumble upon a small family of Fairie Dragons",
68 => "A mysterious snowstorm blows through. A powerful gnoll shaman is controlling the weather from a nearby location",
69 => "Easy Monster Encounter [Avoidable]",
70 => "Nearby bog infested with zombies. Bloodied man runs up to the party asking them to save his companions",
71 => "Find a strange stone. History/Arcana check will find it is a 'Blight Stone'. Best be careful",
72 => "Spot an exotic animal (A noble stag wearing gilded armor, a panther with a strange red pattern)",
73 => "Stumble upon a gnoll tribe preparing a massive bonfire to sacrifice locally kidnapped citizens to Yeenoghu",
74 => "Party hears beautiful singing. Local peasant woman who is forbidden to sing practices out here",
75 => "Medium Difficulty Monster Encounter",
76 => "Party finds evidence of a unicorn nearby",
77 => "Find a massive stash of fake gold coins. Some are clearly wooden but others are decent counterfeits",
78 => "Find evidence of a Roc nest nearby. Three eggs within",
79 => "Party overhears the cries of a pair of baby manticores. Their mother was killed",
80 => "Find a pool of blood in the middle of the path with a large, still pulsing heart at its center",
81 => "Easy Monster Encounter [Avoidable]",
82 => "Hard Monster Encounter",
83 => "Find evidence of a nearby lizardfolk encampment",
84 => "Party discovers a potential pet (A colorful peacock, a large curious rabbit, a friendly owl)",
85 => "Medium Difficulty Monster Encounter",
86 => "Evidence of gemstone mine nearby",
87 => "Small village of Satyrs. Massive hedonists and will make requests for fragrant flowers, beautiful art, or lovely poems",
88 => "Find a small hedron is found on the ground. A perfect eight-sided structure a foot high and a four inches wide",
89 => "Spot a small band of goblins struggling with a stolen Wyvern egg",
90 => "Weapon rolled from the Random Item Enchantments table lays in the middle of the path. (Good and Bad Attributes)",
91 => "Discover a random dungeon (From Section E)",
92 => "Find a treasure map found in the dirt leading to a nearby area of interest",
93 => "An airship is seen soaring overhead. It is crewed by a group of bandits and has been harassing local villages",
94 => "Easy Monster Encounter [Avoidable]",
95 => "Medium Difficulty Monster Encounter",
96 => "Find a cultist summoning circle. Looks to have been recently used and lingering magics are still detectable",
97 => "Hard Monster Encounter",
98 => "You find a young woman lost in the forest. Tells you her family is wealthy. Actually a Doppelganger",
99 => "Incredibly Difficult Monster Encounter!",
100 => "Discovere a massive ruined city/dungeon [Large dungeon + Valuable Treasure]"
];
$encounter = $encounterD00[rand(1,100)];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Random Encounter </title>
  </head>
  <body>
    Encounter 1 :<b><?=$encounterD00[rand(1,100)]?></b>.<br>
    Encounter 2 :<b><?=$encounterD00[rand(1,100)]?></b>.<br>
    Encounter 3 :<b><?=$encounterD00[rand(1,100)]?></b>.<br>
  </body>
</html>