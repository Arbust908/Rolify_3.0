<?php

function tableRoll($array,$posicion){
  for ($i=0; $i < 100; $i++) {
    if ($array[$posicion] == "") {
      //to do - hide debug rolls-
      //echo $posicion;
      $posicion++;
    } else {
      $i += 100 ;
    }
  }
  return $posicion;
}


//Table 8-1: Type of Magic Sword
$roll = rand(1,100);
echo $roll . " => ";
$msType = "";
if ($roll <= 15) {
  $msType = "Dagger";
} elseif ($roll <= 30) {
  $msType = "Short Sword";
} elseif ($roll <= 80) {
  $msType = "Long Sword";
} elseif ($roll <= 100) {
  $msType = "Two-handed Sword";
}
echo "you found a " . $msType . "<br>";

//Table 8-2: Magic Sword Alignment
$roll = rand(1,100);
echo $roll . " => ";
$msAligment = "";
if ($roll <= 40) {
  $msAligment = "Chaotic";
} elseif ($roll <= 60) {
  $msAligment = "Neutral";
} elseif ($roll <= 100) {
  $msAligment = "Lawful";
}
echo $msAligment . "<br>";

// Table 8-4: Magic Sword Characteristics
//Spell check | d% | Plus** | Int* | Communication | Number of Banes | Dice Rolled for Special Purpose(s) | Powers
$roll = rand(1,100);
echo $roll . " => ";
$specialPurpouse = "";
$msCharacteristics = "";
if ($roll <= 50) {
  $msCharacteristics = "16-17 | 01-50 | +1 | 1d6 | None | None | 1d12-6 | 50% chance of one type I power";
  $specialPurpouse = (rand(1,12)-6);
} elseif ($roll <= 75) {
  $msCharacteristics = "18-21 | 51-75 | +1 | 1d6+2 | Simple urges | 1 | 1d6 | 75% chance of one type I power";
  $specialPurpouse = (rand(1,6));
} elseif ($roll <= 85) {
  $msCharacteristics = "22-23 | 76-85 | +1 | 3d4 | Simple urges | 1d3-1 | 1d6 then 1d6+6 | One type I power, 50% chance of one type II power";
  $specialPurpouse = (rand(1,6)+(rand(1,6)+6));
} elseif ($roll <= 90) {
  $msCharacteristics = "24-26 | 86-90 | +1 | 2d6 | Empathy | 1d4-1 | 1d12 | 1d3 type I powers, 75% chance of one type II power";
  $specialPurpouse = (rand(1,12));
} elseif ($roll <= 94) {
  $msCharacteristics = "27-31 | 91-94 | +2 | 2d6+2 | Empathy | 1d4 | 1d8 then 1d14 | 1d4 powers of type I or II (50% chance of either for each power), 50% chance of one type III power";
  $specialPurpouse = (rand(1,8)+(rand(1,14)));
} elseif ($roll <= 96) {
  $msCharacteristics = "32-33 | 95-96 | +2 | 3d6 | Speech | 1d3+1 | 1d14 three times | 1d4+1 powers of type I or II (50% chance of either for each power), 75% chance of one type III power";
  $specialPurpouse = (rand(1,14)+rand(1,14)+rand(1,14));
} elseif ($roll <= 98) {
  $msCharacteristics = "34-35 | 97-98 | 75% +3, 25% +4 | 3d6+2 | Telepathy | 1d4+1 | 1d6 then 1d6+6 | 1d4+1 powers of type I or II (50% chance of either for each power), plus one type III power";
  $specialPurpouse = (rand(1,6)+rand(1,6)+6);
} elseif ($roll <= 100) {
  $msCharacteristics = "36+ | 99-00 | 50% +3, 35% +4, 15% +5 | 3d6+4 | Speech and telepathy | 2d4 | 1d6 then 1d6+10 | 1d4+2 powers of type I or II (50% chance of either for each power), plus 1d3 type III powers";
  $specialPurpouse = (rand(1,6)+rand(1,6)+10);
}
echo $msCharacteristics . "<br>";

//d% Type of Bane
$baneType = [
1 => "",
2 => "",
3 => "",
4 => "",
5 => "",
6 => "Goblinoids",
7 => "",
8 => "",
9 => "",
10 => "Giants",
11 => "",
12 => "",
13 => "",
14 => "",
15 => "Lycanthropes",
16 => "",
17 => "",
18 => "",
19 => "",
20 => "",
21 => "",
22 => "",
23 => "",
24 => "Undead",
25 => "",
26 => "",
27 => "",
28 => "",
29 => "",
30 => "",
31 => "",
32 => "",
33 => "",
34 => "Wizards",
35 => "",
36 => "",
37 => "",
38 => "",
39 => "",
40 => "",
41 => "Demons",
42 => "",
43 => "",
44 => "",
45 => "",
46 => "",
47 => "",
48 => "",
49 => "",
50 => "",
51 => "Dragons",
52 => "",
53 => "",
54 => "Creatures of opposed alignment",
55 => "",
56 => "",
57 => "Vampires",
58 => "",
59 => "Elves",
60 => "",
61 => "",
62 => "Elementals",
63 => "",
64 => "Clerics",
65 => "",
66 => "Dwarves",
67 => "Halflings",
68 => "",
69 => "Men",
70 => "",
71 => "",
72 => "Orcs",
73 => "",
74 => "",
75 => "Fey",
76 => "",
77 => "Thieves",
78 => "",
79 => "",
80 => "Warriors",
81 => "",
82 => "",
83 => "",
84 => "Serpents",
85 => "",
86 => "",
87 => "Naga",
88 => "",
89 => "Sphinxes",
90 => "",
91 => "Golems",
92 => "",
93 => "Unicorns",
94 => "",
95 => "Gods",
96 => "",
97 => "",
98 => "",
99 => "",
100 => "Roll again; bane is a specific, unique named specimen of the indicated type",
];
$roll = rand(1,100);

//cheatRoll
//$roll = 60;

$roll = tableRoll($baneType,$roll);

$Bane = $baneType[$roll];

if ($Bane == "Roll again; bane is a specific, unique named specimen of the indicated type") {
  $newRoll = rand(1,95);
  $newRoll = tableRoll($baneType,$newRoll);
  $Bane = "A unique named " . $baneType[$newRoll];
}

//(50% of all elementals, 50% chance of a specific type: (1) fire, (2) water, (3) earth, (4) air)
if ($Bane == "Elementals") {
  $type = [ 1 => "fire", 2 => "water", 3 => "earth", 4 => "air" ];
  $fity = rand(0,1);
  if ($fity == 0) {
    $Bane .= " of all types";
  } elseif ($fity == 1) {
    $Bane .= " of " . $type[rand(1,4)];
  }
}


//d% Effect When Battling Bane
$arrayBaneEffect = [
1 => "",
2 => "",
3 => "",
4 => "",
5 => "",
6 => "Unreasoning hatred; sword urges wielder to attack bane at every opportunity (ego check)",
7 => "",
8 => "",
9 => "",
10 => "Additional +1 attack bonus",
11 => "",
12 => "",
13 => "",
14 => "",
15 => "Additional +1 damage bonus",
16 => "",
17 => "",
18 => "",
19 => "",
20 => "",
21 => "",
22 => "",
23 => "",
24 => "Additional +1 bonus to attack and damage",
25 => "",
26 => "",
27 => "",
28 => "",
29 => "",
30 => "",
31 => "",
32 => "",
33 => "",
34 => "Berserker fury when facing bane; ego check or wielder gains +4 Strength and Stamina for 2d6 rounds, then is exhausted at -4 Strength and Stamina for 1d6 turns thereafter",
35 => "",
36 => "",
37 => "",
38 => "",
39 => "",
40 => "",
41 => "Unerring throw; only against bane, sword can be thrown with a 60’ range, and always returns to the attacker’s hand; when thrown, it uses attacker’s normal missile fire attack roll but includes his Strength modifier to damage",
42 => "",
43 => "",
44 => "",
45 => "",
46 => "",
47 => "",
48 => "",
49 => "",
50 => "",
51 => "Extended critical threat range; attacker scores criticals against bane at 1 more result on the die (e.g., if normally score criticals on 19-20, now score on 18-20)",
52 => "",
53 => "",
54 => "Beacon of hope; allies within 100’ engaged in battle against bane gain +2 bonus to all saving throws and morale checks",
55 => "",
56 => "",
57 => "Beacon of fury; sword attempts to persuade everyone that it can communicate with to attack the bane under any circumstances (ego check for wielder and potentially others)",
58 => "",
59 => "Bleeding wounds; sword’s wounds against bane continue to bleed, inflicting an additional 1 hp damage (cumulative) per round after hit until magically healed, so a bane target hit by three successive attacks from the sword takes 3 hp damage per round thereafter",
60 => "",
61 => "",
62 => "Neutralization; after a direct hit, sword prevents bane from using one of its natural powers (as determined by judge) for one full day; if bane does not have any specific natural powers (e.g., if bane is “men”), sword gives victim a cumulative -1 attack modifier for every direct hit (fades after 1 day)",
63 => "",
64 => "Ability score drain; sword inflicts normal damage plus 1d4 points of ability score drain per hit against bane",
65 => "",
66 => "Spotter; sword marks bane so it is more easily attacked; allies can fire into melee between wielder and bane at no penalty and no chance of hitting wielder, and allies attacking bane with missile fire within 100’ of sword receive a +1 attack bonus",
67 => "Hardiness; when taking damage from the bane, wielder can make a Fort save (DC 1d20+10); success means the attack inflicts only half damage",
68 => "",
69 => "Shattering blow; on a critical hit, sword inflicts an additional 1d10 damage",
70 => "",
71 => "",
72 => "Banishment; with a successful hit, sword sends bane back to its native plane or lair (Will save to resist vs. DC 1d20+10)",
73 => "",
74 => "",
75 => "Painful wound; sword inflicts an additional 1d4 damage to bane",
76 => "",
77 => "Festering wound; sword inflicts an additional 1d6 damage to bane, then another 1d4 damage on following round",
78 => "",
79 => "",
80 => "Summoning; when battling bane, sword can summon reinforcements, which are a creature type antithetical to the bane (per judge’s discretion) of total HD equal to half of wielder; sword can summon 1/day with 50% chance of success for duration 1d4 turns",
81 => "",
82 => "",
83 => "",
84 => "Hunter; sword can detect bane creatures within 100’, even if invisible or otherwise concealed, and can overcome magical defenses against detection as if with a +10 Will save or spell check",
85 => "",
86 => "",
87 => "Defender; wielder gains a +2 AC bonus when defending against attacks from the bane",
88 => "",
89 => "Additional +2 attack bonus",
90 => "",
91 => "Additional +2 damage bonus",
92 => "",
93 => "Additional +2 bonus to attack and damage",
94 => "",
95 => "Death dealer; when bane is struck, it must make a Fort save (DC = 1d20+10) or instantly die",
96 => "",
97 => "",
98 => "",
99 => "",
100 => "Roll again twice"];

$roll = rand(1,100);

//cheatRoll
$roll = 99;

$roll = tableRoll($arrayBaneEffect,$roll);

$BaneEffect = $arrayBaneEffect[$roll];

if ($BaneEffect == "Roll again twice") {
  $newRoll = rand(1,95);
  $newRoll = tableRoll($arrayBaneEffect,$newRoll);
  $masRoll = rand(1,95);
  $masRoll = tableRoll($arrayBaneEffect,$masRoll);
  $BaneEffect = $arrayBaneEffect[$newRoll] . " & " . $arrayBaneEffect[$masRoll];
}
//"Ability score drain; sword inflicts normal damage plus 1d4 points of ability score drain per hit against bane; determine ability score with 1d5: (1) Strength, (2) Stamina, (3) Agility, (4) Personality, (5) Intelligence",
if ($BaneEffect == "Ability score drain; sword inflicts normal damage plus 1d4 points of ability score drain per hit against bane") {
  $type = [ 1 => "strength", 2 => "dexterity", 3 => "constitution", 4 => "inteligence", 5 => "wisdom", 6 => "charisma" ];
  $score = $type[rand(1,6)];
  $BaneEffect = $score . " drainer; sword inflicts normal damage plus 1d4 points of ". $score ."ability score drain per hit against bane";
}


//Table 8-6: Sword Special Purpose
//Roll dice as indicated by characteristics table, then cross-reference to sword’s alignment.
//Lawfull Roll
$RollLawful = [
  0 => "No special purpose",
  1 => "Enforce the law",
  2 => "Protect the weak",
  3 => "Punish evildoers",
  4 => "Punish murderers",
  5 => "Punish thieves",
  6 => "Jail the guilty",
  7 => "Provide charity to the needy",
  8 => "Defend against the incursion of Chaos",
  9 => "Slay chaotic creatures*",
  10 => "Slay chaotic dragons*",
  11 => "Slay chaotic demons*",
  12 => "Build monuments to great heroes",
  13 => "Build the world’s greatest city",
  14 => "Slay a specific Chaos Lord, demon or unique monster*",
  15 => "Clear the world of all obstacles to the imposition of Law",
  16 => "Roll again twice"
];
//Neutral Roll
$RollNeutral = [
  0 => "No special purpose",
  1 => "Avoid conflict",
  2 => "Spill the blood of no man",
  3 => "Bridge understanding between enemies",
  4 => "Live alone as a warrior-hermit",
  5 => "Bring Balance to a specific place",
  6 => "Take no sides",
  7 => "Achieve perfect self-harmony",
  8 => "Become one with nature",
  9 => "Break all allegiances",
  10 => "Purge the world of all paragons of Law and Chaos",
  11 => "Slay one lawful creature for every chaotic creature slain, and vice versa",
  12 => "Bring peace between gods",
  13 => "Seek the Void",
  14 => "Deliver an esoteric item to an identified place at one point of time, performing one tiny step in a master plan beyond any man’s understanding",
  15 => "Prepare the world for the return of the Old Ones",
  16 => "Roll again twice"
];
//Chaotic Roll
$RollChaotic = [
  0 => "No special purpose",
  1 => "Undermine authority",
  2 => "Dominate all others",
  3 => "Reward the ambitious at all costs",
  4 => "Punish interlopers and those who interfere",
  5 => "Acquire wealth through theft",
  6 => "Free prisoners",
  7 => "Spread the seven deadly sins",
  8 => "Defend against the incursion of Law",
  9 => "Slay lawful creatures*",
  10 => "Slay lawful dragons*",
  11 => "Slay lawful outsiders*",
  12 => "Build a monument to Chaos from the rubble of civilization",
  13 => "Destroy the world’s kingdoms, one by one",
  14 => "Slay a specific hero of Law, such as an angel or celestial",
  15 => "Clear the world for the invasion of Chaos",
  16 => "Roll again twice"
];
//determinacion de Aliniacion
$AligArray = "";
if ($msAligment == "Chaotic") {
  $AligArray = $RollChaotic;
} elseif ($msAligment == "Neutral") {
  $AligArray = $RollNeutral;
} elseif ($msAligment == "Lawful") {
  $AligArray = $RollLawful;
}

//Tiradas y Determinacion
if ($specialPurpouse <= 0) {
  $specialPurpouse = 0;
} elseif ($specialPurpouse >= 16) {
  $specialPurpouse = 16;
}
$msSpecial = $AligArray[$specialPurpouse];
if ($specialPurpouse == 0) {
  $msSpecial = "";
} elseif ($specialPurpouse == 16) {
  $msSpecial = $AligArray[rand(1,15)] . " and " . $AligArray[rand(1,15)];
}



 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>You found a <b><?=$msAligment?> <?=$msType?></b></h2>
    <p> It's main charasteristis is <b><?=$msCharacteristics?></b><br>
      After exploring it you desypher it ir <b><?=$Bane?></b>bane and that it has the <b><?=$BaneEffect?></b> magic propertie.
    </p>
    <h6><b><?=$msSpecial?></b></h6>



  </body>
</html>
