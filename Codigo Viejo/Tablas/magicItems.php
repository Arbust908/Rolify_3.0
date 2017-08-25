<?php require_once("math.php"); ?>
<?php
//Lesser Beneficial Effect
$lesserEffD00 = [
  "This item glows when within 100 ft of demons",
  "This item glows when within 100 ft of elementals",
  "This item glows when within 100 ft of devils",
  "This item glows when within 100 ft of abberations",
  "This item glows when within 100 ft of fey",
  "While attuned to this item, whenever you make an Acrobatics check, roll an additional d4 and add that value to your result",
  "While attuned to this item, whenever you make an Athletics check, roll an additional d4 and add that value to your result",
  "While attuned to this item, whenever you make a Deception check, roll an additional d4 and add that value to your result",
  "While attuned to this item, whenever you make a History check, roll an additional d4 and add that value to your result",
  "While attuned to this item, whenever you make an Insight check, roll an additional d4 and add that value to your result",
  "While attuned to this item, whenever you make an Intimidation check, roll an additional d4 and add that value to your result",
  "While attuned to this item, whenever you make an Investigation check, roll an additional d4 and add that value to your result",
  "While attuned to this item, whenever you make a Medicine check, roll an additional d4 and add that value to your result",
  "While attuned to this item, whenever you make a Nature check, roll an additional d4 and add that value to your result",
  "While attuned to this item, whenever you make a Perception check, roll an additional d4 and add that value to your result",
  "While attuned to this item, whenever you make a Performance check, roll an additional d4 and add that value to your result",
  "While attuned to this item, whenever you make a Persuasion check, roll an additional d4 and add that value to your result",
  "While attuned to this item, whenever you make a Religion check, roll an additional d4 and add that value to your result",
  "While attuned to this item, whenever you make a Sleight of Hand check, roll an additional d4 and add that value to your result",
  "While attuned to this item, whenever you make a Stealth check, roll an additional d4 and add that value to your result",
  "While attuned to this item, whenever you make a Survival check, roll an additional d4 and add that value to your result",
  "Whille attuned to this item, you gain proficiency in Stealth. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in Survival. If you are already proficient in this skill, you gain expertise in it instead",
  "While attuned to this item, you can't be charmed. Small ethereal hearts float above your head",
  "While attuned to this item, you can't be frightened. Small ethereal skulls float above your head",
  "While attuned to this item, you can't be poisoned. Small vials of poison float over your head",
  "While attuned to this item, you have resistance to thunder damage. A tiny air elemental follows you around",
  "While attuned to this item, you have resistance to lightning damage. A small storm cloud follows you around",
  "While attuned to this item, you have resistance to fire damage. A tiny fire elemental follows you around",
  "While attuned to this item, you have resistance to cold damage. A tiny ice elemental follows you around",
  "While attuned to this item, you have resistance to poison damage. A tiny poison cloud hovers over your head",
  "While attuned to this item, you have resistance to acid damage. A small ooze creature follows you around",
  "While attuned to this item, you have resistance to force damage. A small mana wyrm follows you around",
  "While attuned to this item, you have resistance to psychic damage. A flumph follows you around",
  "While attuned to this item, you have resistance to radiant damage. A tiny angelic creature follows you around",
  "While attuned to this item, you have resistance to necrotic damage. A tiny skeleton follows you around",
  "While attuned to this item, you can cast Prestigidation at will",
  "While attuned to this item, you can cast Mage Hand at will",
  "While attuned to this item, you can cast Dancing Lights at will",
  "While attuned to this item, you can cast Message at will",
  "While attuned to this item, a pint of beer has the same effect as a minor healing potion for you",
  "While attuned to this item, add an additional 1d10 lightning damage to any critical hit. This ite crackles with electricity",
  "While attuned to this item, add an additional 1d10 fire damage to any critical hit. This item occasionally sends off licks of flame",
  "While attuned to this item, add an additional 1d10 cold damage to any critical hit. This item appears to be frozen",
  "While attuned to this item, add an additional 1d10 poison damage to any critical hit. This item exudes black fumes",
  "While attuned to this item, add an additional 1d10 acid damage to any critical hit. This item drips acid",
  "While attuned to this item, add an additional 1d10 force damage to any critical hit. Small ethereal lights twirl around this item",
  "While attuned to this item, add an additional 1d10 psychic damage to any critical hit. This item whispers thoughts to you on occasion",
  "While attuned to this item, add an additional 1d10 radiant damage to any critical hit. You grow a set of ethereal wings",
  "While attuned to this item, add an additional 1d10 necrotic damage to any critical hit. This item appears to be decaying",
  "While attuned to this item, add an additional 1d10 thunder damage to any critical hit. This item generates extra noise when hitting or when hit",
  "While attuned to this item, you feel at home in the forest. Your proficiency bonus increases by 1 while in this area. This item is decorated with trees",
  "While attuned to this item, you feel at home in the desert. Your proficiency bonus increases by 1 while in this area. This item is decorated with cacti and tumbleweeds",
  "While attuned to this item, you feel at home in the mountains. Your proficiency bonus increases by 1 while in this area. This item is decorated with mountains",
  "While attuned to this item, you feel at home when on the coastline. Your proficiency bonus increases by 1 while in this area. This item is decorated with crashing waves",
  "While attuned to this item, you feel at home in the plains. Your proficiency bonus increases by 1 while in this area. This item is decorated with small rolling hills and plantlife",
  "While attuned to this item, whenever an enemy critically hits you, roll a d20. On a result of 11-20, the critical hit is negated and only normal damage is dealt. This item is decorated with shields",
  "While attuned to this item, whenever you drink a full potion roll a d20. On a result of 16-20, you manage to save enough for a second use",
  "While attuned to this item, whenever you take a short rest, roll a d20. On a result of 16-20, your next attack is a guaranteed critical hit",
  "While attuned to this item, whenever you kill an enemy, roll a d20. On a result of 19-20, you gain a surge of energy and may immediately take another full turn",
  "While attuned to this item, one piece of silver explodes out of this item for every point of damage you deal against enemies of at least CR 1",
  "While attuned to this item, this item plays battle music for you in combat that can be heard in a 30 ft. area",
  "While attuned to this item, you may use your inspiration to make your next attack into a critical hit. You may use this ability after your attack has confirmed to hit, but before damage is rolled",
  "This item is covered in vines. Every morning it grows a batch of 10 Goodberries that can be consumed",
  "While attuned to this item, you may store up to two charges of inspiration",
  "While attuned to this item, it is invisible to all enemies, making it impossible to see what you are wielding or wearing",
  "While attuned to this item, rain cannot fall upon you. It diverts around the edges of an ethereal bubble of energy instead",
  "While attuned to this item, once per day you may speak to a small critter for 10 minutes",
  "While attuned to this item, you cannot be surprised for any reason",
  "While attuned to this item, add +2 to your initiative rolls",
  "While attuned to this item, enemies roll their attacks of opportunity against you with disadvantage",
  "While attuned to this item, healing potions restore an additional 50% health",
  "While attuned to this item, your minimum health regained from a hit die during a short rest is equal to 4 + your Con Modifier",
  "While attuned to this item, ethereal butterflies flutter around your head. All healing spells that cast on you heal for an additional amount equal to your proficiency bonus",
  "While attuned to this item, you have darkvision up to 30 ft. and your eyes glow brightly at night",
  "While attuned to this item, plants spring to life around you. You get a +5 to Survival checks when looking for food",
  "While attuned to this item, you can detect any sources of water within 1000 ft",
  "While attuned to this item, you can walk on water for up to 5 minutes a day",
  "While attuned to this item, you can breath underwater for up to 5 minutes a day",
  "While attuned to this item, you have tremorsense up to 10 ft",
  "While attuned to this item, you find a bag containing 2d6 + 2 chocolates under your pillow every morning when you wake up. They restore 1 hp when eaten",
  "While attuned to this item, you take only half damage from any fall. This item is decorated with feathers",
  "While attuned to this item, you always know its location, no matter how far from you it is taken",
  "While attuned to this item, you can emit a fog cloud with radius of 20 ft centered on your self once per day. It persists for one minute",
  "While attuned to this item, you can call upon this item to summon a noble elk steed for you to ride",
  "While attuned to this item, enemies that fall below twenty health begin to glow red for you",
  "While attuned to this item, speak a command work to make this item exude bright light in a ten foot radius and dim light another five feet",
  "While attuned to this item, whenever you take a short rest, roll a d20. On a result of 16-20, you automatically pass your next saving throw",
  "While attuned to this item, whenever you take a short rest, you gain temporary health equal to your level + your Con mod. This does not stack and lasts up to 8 hours",
  "While attuned to this item, treasure erupts from enemies you kill with a CR of 1 or greater. Dealing the killing blow to an opponent causes 1 gem to burst forth worth 10g. Whenever you kill an enemy with a critical hit, 4 gems burst forth instead",
  "While attuned to this item, once per day you may reroll an attack roll. You must take the second result",
  "While attuned to this item, you give off a lovely aroma that makes others attracted to you. Add +5 to any roll when persuading someone who my be attracted to you",
  "While attuned to this item, you learn to speak the language of the next creature you encounter",
  "While attuned to this item, you always know which way is North",
  "While attuned to this item, you only need to eat half the normal amount of food on a given day",
  "While attuned to this item, fireflies are drawn to you at night. They will light your camps and flash brightly when something approaches",
  "While attuned to this item, a small sprite follows you around and will occasionally point out hidden objects",
  "This only weighs a third of its typical weight",
];
$roll = rand(1,100);
$lesserE = Roller($lesserEffD00);
  if ($roll == 69) {
    $lesserE = Roller($lesserEffD00) . " and " . Roller($lesserEffD00);
  } elseif ($roll == 100) {
    $lesserE = Roller($lesserEffD00) . " and it gets a +1 to attacks and damage.";
  }
  $lesserE .= "";
//Medium Beneficial Effects
$mediumEffD00 = [
  "This item is +1. Reroll if it already has an enhancement of equivalent or higher level. If this item is a spellcaster weapon it instead grants +1 to your spell attack bonus and spell save DC instead",
  "While attuned to this item, you deal 1 additional damage with all attacks and spells",
  "While attuned to this item, you can use an attack of opportunity even against enemies who are disengaging",
  "While attuned to this item, when you are within 5 feet of at least two enemies, you may disengage as a bonus action",
  "While attuned to this item, you cannot be critically hit",
  "While attuned to this item, your Intelligence becomes 17",
  "While attuned to this item, your Dexterity becomes 17",
  "While attuned to this item, your Constitution becomes 17",
  "While attuned to this item, your Strength becomes 17",
  "While attuned to this item, your Charisma becomes 17",
  "While attuned to this item, your Wisdom becomes 17",
  "There is a small flask attached to this item. The contents of the flask can be consumed to heal for 2d4 + 2 hit points and cure any poisons or diseases, but only to the creature attuned to this item. The flask magically refills at dawn each day",
  "While attuned to this item, you feel lucky. Once per day you can reroll an attack, saving throw, or ability check. Take the higher of the two results",
  "While attuned to this item, you enter a state of pure calm while asleep. You only need to rest for 2 hours a day to become completely refreshed, but you may still only rest once every 24 hours",
  "While attuned to this item, whenever you are critically hit, you gain resistance to the damage type of that attack until you are hit by another critical strike",
  "While attuned to this item, you gain +1 to all saving throws",
  "While attuned to this item, you gain +2 to all saving throws in which you are not proficient",
  "Whille attuned to this item, you gain proficiency in Acrobatics. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in Animal Handling. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in Athletics. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in Deception. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in History. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in Insight. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in Intimidation. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in Investigation. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in Medicine. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in Nature. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in Perception. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in Performance. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in Persuasion. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in Religion. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in Sleight of Hand. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in Stealth. If you are already proficient in this skill, you gain expertise in it instead",
  "Whille attuned to this item, you gain proficiency in Survival. If you are already proficient in this skill, you gain expertise in it instead",
  "While attuned to this item, you cannot be deafened",
  "While attuned to this item, you cannot be stunned",
  "While attuned to this item, you cannot be petrified",
  "While attuned to this item, you cannot be paralyzed",
  "While attuned to this item, you can cast Charm Person once per day. The DC for this spell is 13",
  "While attuned to this item, you can cast Detect Magic once per day",
  "While attuned to this item, you can cast Shield once per day",
  "While attuned to this item, you can cast Fairie Fire once per day. The DC for this spell is 13",
  "While attuned to this item, you can cast Animal Friendship once per day",
  "While attuned to this item, you can cast Zone of Truth once per day",
  "While attuned to this item, you can cast Pass Without Trace once per day",
  "While attuned to this item, you can cast See Invisibility once per day",
  "While attuned to this item, you can cast Gust of Wind once per day. The DC for this spell is 13 ",
  "While attuned to this item, you can cast Enlarge on yourself once per day",
  "While attuned to this item, you can cast Tongues once per day",
  "While attuned to this item, you can cast Daylight once per day",
  "While attuned to this item, you can cast Dispel Magic once per day",
  "While attuned to this item, you can cast Fireball at third level once per day. The DC for this spell is 13",
  "While attuned to this item, you can cast Lightning Bolt at third level once per day. The DC for this spell is 13",
  "While attuned to this item, your deal 1 additional lightning damage on all attacks. Add an additional 2d10 lightning damage to any critical hit. This item crackles with electricity",
  "While attuned to this item, your deal 1 additional fire damage on all attacks. Add an additional 2d10 fire damage to any critical hit. This item occasionally sends off licks of flame",
  "While attuned to this item, your deal 1 additional cold damage on all attacks. Add an additional 2d10 cold damage to any critical hit. This item appears to be frozen",
  "While attuned to this item, your deal 1 additional poison damage on all attacks. Add an additional 2d10 poison damage to any critical hit. This item exudes black fumes",
  "While attuned to this item, your deal 1 additional acid damage on all attacks. Add an additional 2d10 acid damage to any critical hit. This item drips acid",
  "While attuned to this item, your deal 1 additional force damage on all attacks. Add an additional 2d10 force damage to any critical hit. Small ethereal lights twirl around this item",
  "While attuned to this item, your deal 1 additional psychic damage on all attacks. Add an additional 2d10 psychic damage to any critical hit. This item whispers thoughts to you on occasion",
  "While attuned to this item, your deal 1 additional radiant damage on all attacks. Add an additional 2d10 radiant damage to any critical hit. You grow a set of ethereal wings",
  "While attuned to this item, your deal 1 additional necrotic damage on all attacks. Add an additional 2d10 necrotic damage to any critical hit. This item appears to be decaying",
  "While attuned to this item, your deal 1 additional thunder damage on all attacks. Add an additional 2d10 thunder damage to any critical hit. This item generates extra noise when hitting or when hit",
  "While attuned to this item, whenever you drink a full potion roll a d20. On a result of 11-20, you manage to save enough for a second use",
  "While attuned to this item, whenever you drink a full potion roll a d20. On a result of 11-20, you gain a charge of inspiration",
  "While attuned to this item, whenever you take a short rest, roll a d20. On a result of 11-20, your next attack is a guaranteed critical hit",
  "While attuned to this item, whenever you kill an enemy, roll a d20. On a result of 17-20, you may immediately take another full turn",
  "While attuned to this item, whenever you score a critical hit, roll an additional d20. If the result of the second die is an 17 or higher, the enemy instantly dies if its current health is less than 100",
  "While attuned to this item, whenever you roll a natural 16-20 for your initiative roll, you may select any ally and raise their initiative result by 5",
  "While attuned to this item, treasure erupts from enemies you kill with a CR of 1 or greater. Dealing the killing blow to an opponent causes 1d4 gems to burst forth, each worth 10g. Whenever you kill an enemy with a critical hit, roll 4d4 instead",
  "While attuned to this item, increase your movement speed by 5 ft",
  "90 While attuned to this item, you gain resistance to a random element",
  "While attuned to this item, when you deal a killing blow against an enemy, heal for d8 + your Proficiency Bonus",
  "While attuned to this item, when an enemy misses you while you are dodging, you may use your reaction to make an attack against them",
  "While attuned to this item, you can store up to 3 charges of inspiration",
  "While attuned to this item, you can store up to 2 charges of inspiration. Whenever you gain inspiration you gain two charges instead of 1",
  "While attuned to this item, add +3 to your initiative rolls",
  "While attuned to this item, healing potions restore double health to you",
  "While attuned to this item, you have advantage on initiative rolls",
  "While attuned to this item, if you would die, this item shatters and you are returned to life with 1 hit point",
  "This item has a map inscribed upon it. This map leads to a powerful magic item"
];
$roll = rand(1,100);
$mediumE = Roller($mediumEffD00);
if ($roll == 69) {
  $mediumE = Roller($mediumEffD00) . " and " . Roller($mediumEffD00);
}
$mediumE .= "";
//Major Beneficial Effects
$majorEffD00 = [
  "This item is +2, reroll if it already has an enhancement of equivalent or higher level. If this item is a spellcaster weapon it instead grants +2 to your spell attack bonus and spell save DC instead",
  "This item has 5 charges. You may expend up to any number of charges to increase a stat of your choice by that value plus 1 for an hour up to a maximum of 20. This item restores 1d4 + 1 charges each morning",
  "This item has 5 gems embedded in it (a ruby, jade, emerald, diamond, and topaz). These may be pried off and thrown at an enemy at a +7 bonus. When thrown, these act as a Level 1 Chromatic orb of an element matching the gem. (Ruby - Fire, Jade - Acid, Emerald - Poison, Diamond - Cold, Topaz - Lightning). These gems are restored at dawn and have no monetary value",
  "While attuned to this item, you may use your bonus action to launch an ethereal hook and chain at an enemy within 20 ft. Make an attack roll at +7. On a hit, the target takes 1d6 piercing damage and you may have them make a Strength saving throw with DC 13. On a fail, the target is ripped to you",
  "This item has 5 charges. You may expend one of these charges to leap 20 ft. in any direction and attack with a deadly strike. Roll using your primary stat + your proficiency mod. On a hit, deal your lvl x d6 damage to that target. On a critical hit, all enemies within 15 feet must make a DC 15 Constitution saving throw or be knocked back 15 feet and fall prone",
  "While attuned to this item, whenever you roll minimum damage on your attack roll, your opponent is Frightened until the start of your next turn",
  "While attuned to this item, whenever you are hit be a projectile spell or ranged attack, you may use your reaction to roll a d4. On a result of 4, that projectile phases through you harmlessly",
  "While attuned to this item, enemies you hit become Hunter’s Marked for one hour",
  "While attuned to this item, your initiative bonus is increased by 2. Whenever you roll initiative higher than 20, you move so swift that you get an extra edge up on your opponents. On the first round of combat, you act at your normal Initiative value and get a second turn at your Initiative value minus 20",
  "While attuned to this item, you may cast the Jump spell at will. Additionally, whenever you jump at an enemy more that ten feet away, you may make your first attack against that creature this turn with advantage. If you jump away from an enemy, they make their attack of opportunity with disadvantage",
  "While attuned to this item, you have a small ethereal chain that floats around your body. You may use your action to launch this chain at an enemy within 30 ft. That creature makes a Athletics or Acrobatics check with DC 15 or becomes restrained. While restrained, enemies make their attacks with disadvantage. They may repeat this save at the end of their turn",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, you feel a stroke of luck sweep over you. During this encounter, your critical hit threshold become 18- 20",
  "While attuned to this item, roll an additional d4 whenever you roll for initiative. On a result of 4 you feel a surge of power sweep over you. During this encounter, you sprout a set of powerful wings. You have a flight speed of 50 ft. and gain the Flyby Attack feature",
  "While attuned to this item, roll an additional d4 whenever you roll for initiative. On a result of 4 you feel a surge of power sweep over you. During this encounter, whenever you hit an enemy with an attack, they always become critically maimed. (Loss of limb, eye, broken bones, etc...)",  "While attuned to this item, roll an additional d4 whenever you roll for initiative. On a result of 4 you feel a surge of power sweep over you. During this encounter, at the beginning of each of your turns you regain 10 hit points",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, you feel a stroke of luck sweep over you. You have advantage on all attacks and saving throws during this encounter",
  "This item comes with two slots that each store a marble, one blue and one orange. These can be thrown at any non-magical surface where they will stick. Once both have been placed, a transdimensional space opens between the two allowing for quick passage as long as they are within 120 ft. of each other. Speaking the word 'Return' will close the portals and force both marbles to return to the item",
  "While attuned to this item, you can launch a tether of magical string from your wrist up to 50 ft. The end of this tether will stick to nearly and surface and can be used to retrieve objects from a distance, to climb, or to swing from",
  "While attuned to this item, you have the ability to charge mundane objects with explosive capabilities. You may use your bonus action to infuse an object with this energy. For the next minute, you may throw this item and it will detonate upon impact. This deals 2d6 + (half your level) fire damage to any creature hit. Throwing any object larger than a 4 inches in diameter will cause an explosion of 4d6 + (your level) fire damage to enemies in a 10 foot dameter area, but you will have disadvantage to successfully throw the object at the target",
  "While attuned to this item, you may speak the command word 'Scatter' and cause your weapon to explode into a thousand shards of metal. You may mentally control these shards to attack enemies up to 50 ft. away. While your weapon is in this state, you may use your action perform a Shard Storm attack to hit all enemies in a 10 ft. diameter area. They must make on a DC 15 Dexterity saving throw or take 4d6 + (half your level) slashing damage, or half as much on a success",
  "When you attune to this item, choose a skill. While attuned to this item, all checks you make using that skill are made with advantage",
  "While attuned to this item you may cask Hulking Hand at will. This spell functions as Mage Hand but has its range increased to 60 ft., can lift items up to 60 pounds, and can be used to strike an enemy for 2d4 Force damage. This ethereal hand glows a faint green. Once per day you can unleash a wave of rage and increase the Hand's potency. For the next minute it can lift objects up to 500 pounds and can strike enemies for 8d4 Force damage",
  "While attuned to this item, whenever you hit an enemy with an attack, you may use your inspiration to turn that attack into a critical hit that rolls triple dice rather than double",
  "While attuned to this item, rather than rolling hit dice to regain health, you regain health equal to the max value on that dice plus your Con mod. Additionally, health potions always heal you for max value",
  "While attuned to this item, your weapons gains a thrown property with range 20/60 and will return to you are the end of the turn. You may also deliver touch attacks through your thrown weapon",
  "While attuned to this item, you may use your reaction to cause this item to flash brightly when you are hit with a melee attack. All creatures within 5 ft. of you must make a DC 10 Constitution saving throw or become blinded until the start of their next turn",
  "While attuned to this item, you gain a fly speed of 20 ft",
  "While attuned to this item, you can store up to 5 total spell slots worth of spells in it. This can be a single 5th level spell, five 1st level spells, or any other combination. Anyone can cast the spells into this item and it uses the caster's DC and bonus to hit when unleashed",
  "While attuned to this item, you become soulbound to the next party member you touch. As long as you two are within 30 feet of one another, you each get +1 to your proficiency bonus and AC. You can spend an hour to sever this bond, at which time the next person you touch will become your new soulbonded target",
  "While attuned to this item, whenever you kill an enemy, a blast of energy released from their body. All enemies within 10 feet must make a DC 13 Constitution save or be stunned until the end of your next turn",
  "While attuned to this item, you are not affected by non-magical difficult terrain. Additionally, whenever you make a Dexterity check to reduce the damage of a spell or ability, if you pass you instead take no damage",
  "While attuned to this item, your hit point maximum increases by an amount equal to your Constitution score and your maximum health can not be reduced by any effect",
  "While attuned to this item, whenever you miss with an attack, you get advantage on your first attack next turn",
  "While attuned to this item, you can choose to infuse your an attack or spell with additional power by draining your own resources. You may expend any number of Hit Dice and add those dice as damage of the same type to this attack. You regain health equal to the total of these dice",
  "While attuned to this item, the first time you critically hit while attuned to this item it explodes into a shower of gems. Ten marble sized diamonds clatter to the ground in front of you. The total value of these is equal to 150% of the item's value. Keep this property a secret",
  "A 4th level fighter appears in a space within 30 feet of you. He is the same race as you and serves you loyally until death or until you become unattuned to the item, at which point he fades away. You control this character",
  "This item has 3 charges. When you fail a Dexterity saving throw while it is attuned to you, you may expend a charge to pass that save instead. This item regains 1 charge each dawn",
  "While attuned to this item, increase your Dexterity by 2 to a mamimum of 20",
  "While attuned to this item, increase your Constitution by 2 to a mamimum of 20",
  "While attuned to this item, increase your Strength by 2 to a mamimum of 20",
  "While attuned to this item, increase your Charisma by 2 to a mamimum of 20",
  "While attuned to this item, increase your Wisdom by 2 to a mamimum of 20",
  "While attuned to this item, increase your Intelligence by 2 to a mamimum of 20",
  "While attuned to this item, your melee attacks and spells deal an additional 1d6 lightning damage. You also deal an additional 3d10 lightning damage on any critical hit. This item crackles with electricity",
  "While attuned to this item, your melee attacks and spells deal an additional 1d6 fire damage. You also deal an additional 3d10 fire damage on any critical hit. This item occasionally sends off licks of flame",
  "While attuned to this item, your melee attacks and spells deal an additional 1d6 cold damage. You also deal an additional 3d10 cold damage on any critical hit. This item appears to be frozen",
  "While attuned to this item, your melee attacks and spells deal an additional 1d6 poison damage. You also deal an additional 3d10 poison damage on any critical hit.. This item exudes toxic fumes to enemies",
  "While attuned to this item, your melee attacks and spells deal an additional 1d6 acid damage. You also deal an additional 3d10 acid damage on any critical hit. This item drips acid",
  "While attuned to this item, your melee attacks and spells deal an additional 1d6 force damage. You also deal an additional 3d10 force damage on any critical hit. Small ethereal lights twirl around this item",
  "While attuned to this item, your melee attacks and spells deal an additional 1d6 psychic damage. You also deal an additional 3d10 psychic damage on any critical hit. This item whispers thoughts to you on occasion",
  "While attuned to this item, your melee attacks and spells deal an additional 1d6 radiant damage. You also deal an additional 3d10 radiant damage on any critical hit. You grow a set of ethereal wings",
  "While attuned to this item, your melee attacks and spells deal an additional 1d6 necrotic damage. You also deal an additional 3d10 necrotic damage on any critical hit. This item appears to be decaying",
  "While attuned to this item, your melee attacks and spells deal an additional 1d6 thunder damage. You also deal an additional 3d10 thunder damage on any critical hit. This item generates extra noise when hitting or when hit",
  "This item has 7 charges. You may use 1 charge to cast Burning Hands (DC 15) at first level. You may use 3 charges to cast Fireball at third level (DC 15). This item regains 1d6+1 charges each dawn",
  "This item has 7 charges. You may use 1 charge to cast Thunderwave (DC 15) at first level. You may use 3 charges to cast Lightning Bolt (DC 15) at third level. This item regains 1d6+1 charges each dawn",
  "This item has 7 charges. You may use 1 charges to cast Color Spray (DC 15) at first level. You may expend additional charges to increase the power of this spell. You may use 2 charges to cast Mirror Image. You may use 3 charges to cast Slow at third level (DC 15). This item regains 1d6+1 charges each dawn",
  "This item has 7 charges. You may use 1 charge to cast Fairie Fire (DC 15). You may use 4 charges to cast Confusion at fourth level (DC 15). This item regains 1d6+1 charges each dawn",
  "This item has 7 charges. You may use 1 charge to cast Bane at first level (DC 15). You may use 1 charge to cast Bless at first level (DC15). You may expend 4 charges to cast both Bless and Bane as a single action (DC 15). This item regains 1d6+1 charges each dawn",
  "This item has 9 charges. You may use 1 charge to cast Cure Wounds. You can increase the spell slot level by 1 for each additional charge you use. You may use 1 charges to cast Healing Word. You can increase the spell slot level by 1 for each additional charge you use. This item regains 2d4+1 charges each dawn",
  "This item has 9 charges. You may use 2 charges to cast Invisibility. You may use 5 charges to cast Greater Invisibility. This item regains 2d4+1 charges each dawn",
  "This item has 9 charges. You may use 1 charges to cast Shield. You may use 2 charges to cast Blur. You may use 3 charges to cast Haste. This item regains 2d4+1 charges each dawn",
  "This item has 9 charges. You may use 1 charges to cast Jump. You may use 2 charges to cast Misty Step. You may use 4 charges to cast Dimension Door. This item regains 2d4+1 charges each dawn",
  "This item has 9 charges. You may use 1 charge to cast Frost Blast (Burning Hands but cold. DC 15). You may use 3 charges to cast Sleet Storm (DC 15). You may use 5 charges to cast Cone of Cold at 5th level. You can increase the spell slot level by 1 for each additional charge you use. This item regains 2d4+1 charges each dawn",
  "This item has a small vial attached to it filled with a bright purple liquid. When the person this item is attuned to drinks the contents of this vial, they are filled with a primordial power. For the next minute, enemy’s weak spots glow a vibrant purple, allowing them to strike with deadly precision for maximum damage. Their critical strike threshold becomes 16-20 while this effect is active.The contents of this vial refill at dawn",
  "This item has a small vial attached to it filled with a neon green liquid. When the person this item is attuned to drinks the contents of this vial, their eyes begin to lightly glow. They gain Truesight up to 120ft. for the next hour. Additionally while under this effect, the player cannot be blinded by any means and hidden passageways glow faintly. The contents of this vial refill at dawn",
  "This item has a small vial attached to it filled with a dark blue liquid. When the person this item is attuned to drinks the contents of this vial, they are filled with unnatural levels of enlightenment and strength. Their body and mind both work on levels far exceeding their normal bounds. For the next minute, their proficiency bonus is increased by 3. The contents of this vial refill at dawn",
  "This item has a small vial attached to it filled with a deep shimmering white liquid.When the person this item is attuned to drinks the contents of this vial, the user can see through an opponent’s defenses. Whenever you roll for damage with an attack or spell, roll twice and take the highest of the two rolls. The contents of this vial refill at dawn",
  "This item has a small vial attached to it filled with a deep blood red liquid. When the person this item is attuned to drinks the contents of this vial, their flesh becomes as hard as steel. For the next minute, if they would take non-psychic damage, reduce the amount taken by 5. The contents of this vial refill at dawn",
  "While attuned to this item, you can get two uses from any potion",
  "While attuned to this item, all allies within 50 ft. of you get an additional +3 to their Initiative results at the start of combat",
  "While attuned to this item, treausure erupts from enemies you kill with a CR of 1 or greater. Dealing the killing blow to an opponent causes 2d4 gems to burst forth, each worth 10g. Whenever you kill an enemy with a critical hit, roll 8d4 instead",
  "While attuned to this item, whenever you kill an enemy, roll a d20. On a result of 12-20, you gain a surge of energy and may immediately take another full turn",
  "While attuned to this item, whenever you are in the sunlight, your proficiency bonus is increased by 1. You may also cast Daylight once per day which also activates this effect",
  "While attuned to this item, after 6 consecutive non-critical hits, your seventh attack is guaranteed to be a critical hit",
  "While attuned to this item, after missing two attacks in a row, your third attack hits automatically",
  "While attuned to this item, you inspire nearby allies in combat. All friendly creatures within 100 ft have their movement speed increased by 10 feet",
  "While attuned to this item, you inspire nearby allies in combat. Whenever you kill an enemy, all allies within 50 feet gain temporary hit points equal to your Charisma modifer plus your proficiency bonus",
  "While attuned to this item, one piece of gold explodes out of this item for every point of damage you deal against enemies of at least CR 1",
  "While attuned to this item, your critical strike range increases by 1",
  "While attuned to this item, your lowest ability score is increased by 4",
  "This item does not count towards your maximim attunement count for magic items"
];
$roll = rand(1,100);
$majorE = Roller($majorEffD00);
if ($roll == 100) {
  $majorE = Roller($majorEffD00) . " and " . Roller($majorEffD00);
}
$majorE .= "";
//Legendary Beneficial Effects
$legendEffD00 = [
  "While attuned to this item, your melee attacks and spells deal an additional 2d6 radiant damage. You also deal an additional 6d10 radiant damage on any critical hit. You grow a set of brilliantly glowing ethereal wings that extend ten feet on either side of you. On a critical hit, an angel temporarily passes into this plane and strikes the enemy with their own divine weapon",
  "While attuned to this item, your melee attacks and spells deal an additional 2d6 necrotic damage. You also deal an additional 6d10 necrotic damage on any critical hit. This item appears to be decaying and on command you can cause plantlife beneath your feet to rot away. On a critical hit, a monstrosity of corpses and rotted flesh rips out of the ground and strikes your foe",
  "While attuned to this item, your melee attacks and spells deal an additional 2d6 thunder damage. You also deal an additional 6d10 thunder damage on any critical hit. This item generates extra noise when hitting or when hit and rocks crumble in your wake. On a critical hit, a blast of sound so loud that it can shatter full sized boulders erupts from this item in a concetrated blast and strikes your foe",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, you may summon a Fire Elemental in a free spot within 60 feet. On your turn you can use your bonus action to control this elemental. It disappears when combat ends",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, you may summon a Air Elemental in a free spot within 60 feet. On your turn you can use your bonus action to control this elemental. It disappears when combat ends",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, you may summon a Water Elemental in a free spot within 60 feet. On your turn you can use your bonus action to control this elemental. It disappears when combat ends",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, you may summon a Earth Elemental in a free spot within 60 feet. On your turn you can use your bonus action to control this elemental. It disappears when combat ends",
  "This item has 5 charges. Whenever you hit an enemy with a damaging attack, you may expend one of those charges to force the target to make a Charisma save with DC 17. On a failed save, that target is teleported to a point you can see within 100 ft and takes 5d8 Psychic damage. On a success, the target takes half that much damage and remains in place. This item regains all of its charges at dawn",
  "While attuned to this item you can move through stone as you could water and have Tremorsense up to 30 ft. As a bonus action, you may grant these abilities to a willing creature you are touching for 10 minutes. You may also give this ability to a creature by force if they fail a DC 14 Wisdom saving throw. You may end this effect on a creature at any time",
  "This item is +3, reroll if it already has an enhancement of equivalent or higher level. If this item is a spellcaster weapon, it instead grants +3 to your spell attack bonus and spell save DC instead",
  "While attuned to this item, your melee attacks and spells deal an additional 2d6 lightning damage. You also deal an additional 6d10 lightning damage on any critical hit. This item crackles with electricity and your critical strikes cause a bolt of lightning to strike from the skies and into your opponent",
  "While attuned to this item, your melee attacks and spells deal an additional 2d6 fire damage. You also deal an additional 6d10 fire damage on any critical hit. This item is constantly ablaze and your critical strikes cause your target to becomes completely enshrouded in a pillar of flame",
  "While attuned to this item, your melee attacks and spells deal an additional 2d6 cold damage. You also deal an additional 6d10 cold damage on any critical hit. This item appears to be frozen solid and any rainfall turns to snow in its presence. When you critically strike an enemy they are enveloped in a block of ice that soon there after shatters and sends shards exploding in all directions",
  "While attuned to this item, your melee attacks and spells deal an additional 2d6 poison damage. You also deal an additional 6d10 poison damage on any critical hit. This item exudes toxic fumes into the air that drift around you in the shape of a snake. On a critical hit, this snake launches itself at the foe and forces its way into their lungs",
  "While attuned to this item, your melee attacks and spells deal an additional 2d6 acid damage. You also deal an additional 6d10 acid damage on any critical hit. This item drips acid that can melt through thin metals on command. On a critical hit, a wave of acid erupts out of the ground and sweeps over your enemy",
  "While attuned to this item, your melee attacks and spells deal an additional 2d6 force damage. You also deal an additional 6d10 force damage on any critical hit. Small ethereal lights twirl around this item and dance around your head in the form of small comets. On a critical hit, a dozen magic missiles burst from this item and strike the victim",
  "While attuned to this item, your melee attacks and spells deal an additional 2d6 psychic damage. You also deal an additional 6d10 psychic damage on any critical hit. This item whispers thoughts to you on occasion and allows you to pick up on telepathic conversations. On a critical hit, a blast of visible psychic energy flies at your enemy in the form of their greatest fear",
  "This item has 7 charges. Whenever you hit an enemy with a melee or spell attack, you may use your bonus action and expend one of these charges to attempt to envelop the target in ice. The target must succeed on a DC 16 Constitution saving throw or be frozen for 1 minute. While frozen, the enemy is considered paralyzed. Attempting to freeze the same target multiple times increases the saving throw by 4 each time. Any damage dealt will cause the ice to shatter and free the target. These charges are restored at dawn.",
  "This item has 3 charges. Whenever you slay an enemy, you may expend one of these charges to bring them back as a zombie to fight on your behalf for one minute. The zombie is arisen with half of its normal max hit points. After one minute or whenever the creature is reduced to zero hit points, it crumbles to dust. These charges are restored at dawn",
  "This item has 5 charges. You may use your action to summon a trap into existance at a location you can see within 120 ft. You may create a 10 ft. by 10 ft. spike trap in the ground. Any enemies in this area must make a DC 16 Dexterity saving throw or fall ten feet, taking 3d10 piercing damage. You may summon a 10 ft. x 10 ft. Poison Dart Wall. Any enemy within 30 ft. of this wall must make a DC 16 Dexterity saving throw or take 2d6 piercing damage and 2d10 poison damage as darts impale them. You may summon a 10 ft. x 10 ft. wide boulder. Enemies caught in the line of the boulder must make a DC 16 Dexterity saving throw or take 3d10 bludgeoning damage and be knocked prone",
  "Once per day you may spend 10 minutes to summon up to a dozen Large sized flying creatures. These can be Griffons, Wyverns, Eagles, etc... These creatures follow your orders for travel but will not aid in combat. After ten hours, or when dismissed, the creatures will slowly fade away over one minut",
  "While attuned to this item, roll an additional d4 whenever you roll for initiative. On a result of 4 you feel a stroke of luck sweep over you. During this encounter, you have resistance to all damage and may use up to two bonus actions and reactions on each of your turns",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, you feel a stroke of luck sweep over you. You have advantage on all attacks and saving throws during this encounter",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, the legendary power of this item fills you with unnatural strength. During this encounter, you may use your bonus action to heal yourself or any ally up to 60 ft away for an amount equal to your level",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, the legendary power of this item fills you with unnatural strength. During this encounter, you may use your bonus action to throw your weapon at an enemy within 60 ft. Make an attack roll using your primary stat. On a hit, you deal 4d10 damage + half your level damage to that enemy of the appropriate damage type and your weapon instantly returns to your hand",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, the legendary power of this item fills you with unnatural strength. During this encounter, you may use your bonus action to inspire yourself or an ally within 60 ft. with power. That creature has advantage on any actions they take on their next turn",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, the legendary power of this item fills you with unnatural strength. During this encounter, you may use your bonus action to curse an enemy within 60 ft. using the power of this item. That target has disadvantage on any actions they take on their next turn",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, you become an avatar of this item's power. It melds with your body and you gain physical characteristics that match its type. During this encounter, your highest stat is increased to 30",
  "While attuned to this item, increase two random attributes by 2. These values can exceed 20",
  "While attuned to this item, you have advantage on all saving throws against spells and magical effects",
  "While attuned to this item, you gain resistance to all elemental damage. If you already have resistance to an element, you become immune instead",
  "While attuned to this item, roll an additional d4 whenever you roll for initiative. On a result of 4 you feel a stroke of luck sweep over you. During this encounter, your damage dice with melee and ranged weapon attacks are maximized this combat. You roll an additional 50% damage dice for all of your spells",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, you become an avatar of this item's power. It melds with your body and you gain physical characteristics that match its type. During this encounter, all of your attributes become 20 unless they are already higher",
  "While attuned to this item, roll an additional d4 whenever you roll for initiative. On a result of 4 you feel a stroke of luck sweep over you. During this encounter, your critical hit threshold become 15-20",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, you become an avatar of this item's power. It melds with your body and you gain physical characteristics that match its type. During this encounter, you gain a flight speed of 60 ft, you gain the FlyBy feature, and all of your attacks have their damage increased by half your level",
  "While attuned to this item, you may sprout a set of adamantine claws as a bonus action. These claws are considered a finesse weapon and deal 1d8 + Dex damage. These claws are seemingly indestructible and can pierce through most other metals. When retracted, these claws are invisible",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, a young Gold Dragon appears to help you in combat",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, a young Brass Dragon appears to help you in combat",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, a young Copper Dragon appears to help you in combat",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, a young Silver Dragon appears to help you in combat",
  "While attuned to this item, whenever you roll for initiative roll a d4. On a result of 4, a young Bronze Dragon appears to help you in combat",
  "While attuned to this item, treausure erupts from enemies you kill with a CR of 1 or greater. Dealing the killing blow to an opponent causes 4d4 gems to burst forth, each worth 10g. Whenever you kill an enemy with a critical hit, roll 16d4 instead",
  "While attuned to this item, you are filled with the spirit of an ancient dragon. You gain the ability to use the breath weapon of a random adult dragon twice per day. You may only use this ability once per short rest",
  "The first time you become attuned to this item, you hear a voice in your head ask: 'Choose your enemy' Whenever you fight any enemy that shares a type with the chosen enemy, your attacks deal 3d6 extra damage. Additionally, this item glows whenever any creature of that type is near and you have resistance to all attacks made by creatures of that type. The chosen enemy persists even if attuned to someone else",
  "This item contains the spirit of a creature of the DMs choosing. Once per day, you may call upon that creature to come forth and fight on your behalf for up to one minute. You may use your bonus action to give specific commands to this creature and it will execute them to the best of its ability",
  "While attuned to this item, you gain the effects of an Iuon Stone of your choosing every morning when you wak",
  "While attuned to this item, you have resistance to damage from spells",
  "While attuned to this item, all of your attributes scores are increased by 1",
  "This item has two small vials attached to it filled with a bright red liquid. These vials act as Potions of Supreme Healing to the wielder. The contents of these vials are restored every dawn as long as this item is attuned to someone",
  "This item has a small vial attached to it filled with a deep yellow liquid. Consuming the contents of this potion gives the user the benefits of a Potion of Giant's Strength to the wielder. The contents of this vial are restored every dawn as long as the item is attuned to someone. The type of giant is randomly selected each morning",
  "This item has a small vial attached to it filled with midnight black liquid. The contents of this vial acts as Oil of Sharpness for any weapon the person this item is attuned to wields. The contents of this vial are restored every dawn as long as someone is attuned to it",
  "This item loses all negative detriments above the lesser tier. If this item has no detriments, roll on this table again",
  "While attuned to this item, you gain proficiency in three skills of your choice. This choice of skills cannot be altered even if you become unbound to this weapon",
  "Your proficiency bonus is increased by 2",
  "While attuned to this item, whenever you roll with advantage, roll three dice instead of two",
  "This item contains three 8th level spells. Roll on the Wizard's spell table three times. This item allows the user to cast one of the spells from that list using their highest stat as the spellcasting modifier. This ability can only be used once a day",
  "This item holds 1 wish",
  "This item holds 2 wishes",
  "This item holds 3 wishes",
];
$legendE = Roller($legendEffD00);
?>

<?php
  //Lesser Detrimental Effects
  $lesserDetD00 = [
  "While attuned to this item, during rainstorms, frogs will fall out of the sky and batter you, occasionally exploding on impact",
  "While attuned to this item, bartenders charge you twice as much for alcohol and rooms",
  "While attuned to this item, a ferret will occasionally show up at night and steal 1d4 gold from you. If you attempt to catch or harm the ferret it disappears with a poof of smoke",
  "While attuned to this item, you no longer trust Fighters and always assume they are lying to you. This does not apply to your party members",
  "While attuned to this item, you no longer trust Rogues and always assume they are lying to you. This does not apply to your party members",
  "While attuned to this item, you no longer trust Paladins and always assume they are lying to you. This does not apply to your party members",
  "While attuned to this item, you no longer trust Sorcerers and always assume they are lying to you. This does not apply to your party members",
  "While attuned to this item, you no longer trust Wizards and always assume they are lying to you. This does not apply to your party members",
  "While attuned to this item, you no longer trust Druids and always assume they are lying to you. This does not apply to your party members",
  "While attuned to this item, no NPCs think any of your jokes are funny",
  "While attuned to this item, you seem to have the worst luck. You can never win at games of chance",
  "While attuned to this item, birds will aim for you when evacuating their bowels",
  "While attuned to this item, all non-magical flames within 30 feet of you are extinguished",
  "While attuned to this item, you have terrible nightmares every night. You require an extra hour of sleep to become fully rested",
  "While attuned to this item, you no longer trust Monks and always assume they are lying to you. This does not apply to your party members",
  "While attuned to this item, you no longer trust Warlocks and always assume they are lying to you. This does not apply to your party members",
  "While attuned to this item, you no longer trust Guards and always assume they are lying to you",
  "While attuned to this item, all nearby allies have terrible nightmares when you are sleeping within 50 ft. of them. They require an extra hour of rest a night",
  "While attuned to this item, you somehow manage to burn any food you try to cook",
  "While attuned to this item, you no longer trust Lords and always assume they are lying to you",
  "While attuned to this item, all chickens stalk you with violent intentions, striking when they feel their numbers are great enough to overcome you",
  "While attuned to this item, you no longer trust Soldiers and always assume they are lying to you",
  "While attuned to this item, slugs make their way to you and crawl on your face while you sleep",
  "While attuned to this item, you gain an additional random character flaw from your background's list of options",
  "While attuned to this item, all domestic animals are terrified of you",
  "While attuned to this item, you constantly confuse your left from your right",
  "While attuned to this item, you snore incredibly loud every night no matter how or where you sleep",
  "While attuned to this item, you think the sun rises in the west and sets in the east",
  "While attuned to this item, all instruments within 50 ft. of you sound out of tune when played",
  "While attuned to this item, you think all food except the last thing you ate before becoming attuned to this item tastes vile",
  "While attuned to this item, you must eat twice the normal amount of food and you always feel hungry",
  "While attuned to this item, you have to use the bathroom three times as often",
  "While attuned to this item, you no longer trust Bartenders and always assume they are lying to you",
  "While attuned to this item, you fall madly in love with the next new person you meet that fits your sexual preferences",
  "While attuned to this item, you no longer trust Bards and always assume they are lying to you. This does not apply to your party members",
  "While attuned to this item, you refuse to let it out of your sight. If it is more than ten feet from you, you have disadvantage on all rolls",
  "While attuned to this item, you no longer trust Barbarians and always assume they are lying to you. This does not apply to your party members",
  "While attuned to this item, you no longer trust Clerics and always assume they are lying to you. This does not apply to your party members",
  "While attuned to this item, you can only sleep in the company of others. You need someone within arms length or you cannot fall asleep except through magical means",
  "While attuned to this item, whenever you approach a cliff, you have an overwhelming urge to jump. Make a DC 5 Wisdom check or follow through with this desire",
  "While attuned to this item, you have an overwhelming urge to throw yourself into fires. Whenever you come within 10 feet of one, make a DC 5 Wisdom save or give in to your urges",
  "While attuned to this item, you become colorblind",
  "While attuned to this item, you cannot discern your enemies weapons. Hostile enemies seem to always be wielding logs of various sizes",
  "While attuned to this item, all members of a randomly determined race all look the same to you",
  "While attuned to this item, you have an illogical fear of fish and will avoid going into the water if at all possible",
  "While attuned to this item, you sweat profusely constantly. You have disadvantage on climb checks but advatage on escaping from grapples",
  "While attuned to this item, if you are a male your beard hair falls out and you can no longer grow one. If you are female, you begin growing a beard",
  "While attuned to this item, all coins look like copper to you",
  "While attuned to this item, water you drink tastes like foul wine",
  "While attuned to this item, fish are strangely drawn to you when in water. They make swimming especially difficult for you and your swim speed is cut in half",
  "While attuned to this item, you often find stray kittens that only wish they had a home. They will love you dearly, but every night when you go to bed the kitten disappears and only a furball is left in its wake",
  "While attuned to this item, anytime there is an explosion near you, you become filled with fear. Make a DC 5 Wisdom save or spend your next turn running away terrified",
  "While attuned to this item, you are absolutely convinced this is an item directly affected by divine intervention. You shall allow no harm to come to it",
  "While attuned to this item, on rainy days you feel as sad as the weather is gloomy",
  "While attuned to this item, all food you eat tastes like chicken and every beverage like water",
  "While attuned to this item, you assume any liquid you drink has been poisoned by an unknown enemy and must be carefully examined before consumed",
  "While attuned to this item, a flumph follows you around, occasionally unleashing a spray of stench at nearby players. If you kill the flumph it will return at dawn the next day",
  "While attuned to this item, any food that you carry on your body goes bad at ten times the normal rate",
  "While attuned to this item, small wildlife creatures fear you",
  "While attuned to this item, torches burn but produce no light while you are holding them",
  "While attuned to this item, whenever you roll a natural 1 in combat, you move down one step on the initiative list as you grow distracted by this item's beauty. While attuned to this item, your weight increases by 1d4 x 10 pounds",
  "While attuned to this item, you lose the ability to smell",
  "While attuned to this item, whenever you roll a natural 1 in combat, your weapon turns into a large fish for the next round. It deals 1d2 bludgeoning damage to enemies. You maintain proficiency with the weapon while in this state",
  "While attuned to this item, you now speak with a random foreign accent. Some NPCs have a hard time understanding you",
  "This item has a map inscrived upon it. It will lead you to a trap planted by local bandits",
  "While attuned to this item, you become sickened for one round after killing a creature as you are filled with disgust by what you have done",
  "While attuned to this item, every night when you go to bed, this item transforms into a pack of bats and flies off into the night. They return at first light and reform the item",
  "While attuned to this item, whenever you kill a creature, its body explodes shortly afterward",
  "While attuned to this item, whenever you roll a natural 1 on a ranged attack, your projectile turns to confetti before reaching the target. They see this as mockery and will attempt to slay you",
  "While attuned to this item, whenever an enemy hits you with a critical strike, roll a DC 10 Wisdom save. On a fail, you become frightened of your target. You may repeat this save at the end of each of your turns",
  "While attuned to this item, whenever an enemy hits you with a critical strike, you wet yourself",
  "While attuned to this item, you feel homesick as soon as you leave town. You must sleep with a stuffed animal or similar reminder or you gain a level of exhaustion when you wake",
  "While attuned to this item, no matter how sneaky you attempt to be, you always seem to leave footprints in your wake",
  "While attuned to this item, you are occasionally stuck by powerful needs to itch locations that you cannot reach",
  "While attuned to this item, you always feel cold, even in the hottest of temperatures",
  "While attuned to this item, you always feel hot, even in the middle of winter",
  "While attuned to this item, you become convinced that the next enemy you encounter is a long, lost childhood friend",
  "While attuned to this item, you perceive the voices of everyone around you as if they were speaking in monotone",
  "While attuned to this item, you become convinced that you are being stalked by a ghost. You cannot sleep on your own or without a light or you will gain a level of exhaustion",
  "While attuned to this item, you develop an intolerant mindset towards members of a random race",
  "While attuned to this item, you feel incredibly generous and will give gold to anyone in need",
  "While attuned to this item, you are afflicted by narcolepsy. Whenever you roll a natural 1 for initiative, you fall asleep for 2 rounds, or until someone shakes you awake, or until someone strikes you",
  "While attuned to this item, you become convinced that everyone is trying to steal from you",
  "While attuned to this item, you become allergic to the next food you eat. You have horrible sneezing fits when it is nearby and become sickened for 6 hours if you eat it",
  "While attuned to this item, anytime you see someone having a conversation out of earshot, you just know that they are talking about you",
  "While attuned to this item, every morning you forget your name and have to be convinced when told what it is",
  "While attuned to this item, you have a powerful urge to drink the blood of anything you kill",
  "While attuned to this item, whenever you curse, 1 gold disappears from your bags and appears in a jar hidden away somewhere on this plane. If you have no gold, you take 1 point of psychic damage",
  "While attuned to this item, a small snow flurry follows you around everywhere you go",
  "While attuned to this item, you are afraid of lightning. Roll a DC 15 Wisdom save to see if you can work up the courage to travel on such days. On a fail, you do everything you can to stay indoors",
  "While attuned to this item, you have an increble terror of frogs and toads",
  "While attuned to this item, all alcohol turns to water as soon as it touches your lips",
  "While attuned to this item, all water turns to alcohol as soon as it touches your lips",
  "While attuned to this item, you have hour long fits of the hiccups multiple times a day",
  "While attuned to this item, you are compelled to make a wager on every fight",
  "While attuned to this item, occasionally a live wasp will find its way into your water flask",
  "While attuned to this item, you become terrified at the sight of your own reflection",
  "While attuned to this item, all 2's on your damage die count as 1's"
  ];
  $roll = rand(1,100);
  $lesserD = Roller($lesserDetD00);
    if ($roll == 69) {
      $lesserD = Roller($lesserDetD00) . " and " . Roller($lesserDetD00);
    }
    $lesserD .= "";
  $mediumDetD00 = [
    "While attuned to this item, you movement speed is reduced by 5 ft",
    "While attuned to this item, whenever you roll a natural 1 in combat, the target you were attacking gets an opportunity attack against you",
    "While attuned to this item, your maximum health is reduced by an amount equal to your level",
    "While attuned to this item, you regain two less hit die than normal during a long rest",
    "While attuned to this item, whenever you roll a natural 1 for initiaive, 1d4 kobolds appear in an empty space within 30 feet of and attack you",
    "While attuned to this item, whenever you roll a natural 1 for initiaive, 2 bugbears appear in an empty space within 30 feet of and attack you",
    "While attuned to this item, whenever you roll a natural 1 for initiaive, 1d4 bullywugs appear in an empty space within 30 feet of and attack you",
    "While attuned to this item, whenever you roll a natural 1 for initiaive, 2 cockatrices appear in an empty space within 30 feet of and attack you",
    "While attuned to this item, whenever you roll a natural 1 for initiaive, 2 imps appear in an empty space within 30 feet of and attack you",
    "While attuned to this item, whenever you roll a natural 1 for initiaive, choose a page number between 12 and 314 at random. A random monster on that page of the Monster Manutal escapes this item and attacks. If the creature chosen has a CR higher than the average level of your party, choose another random creature",
    "While attuned to this item, your stomach is constantly in knots. When you make a Constitution saving throw, roll a an additional d4 and subtracts that amount from the result",
    "While attuned to this item, your limbs feel weak. When you make a Strength saving throw, roll a an additional d4 and subtracts that amount from the result",
    "While attuned to this item, your limbs feel numb.When you make a Agility saving throw, roll a an additional d4 and subtracts that amount from the result",
    "While attuned to this item, your head is constantly cloudy. When you make a Wisdom saving throw, roll a an additional d4 and subtracts that amount from the result",
    "While attuned to this item, your memory seems to slip. When you make a Intelligence saving throw, roll a an additional d4 and subtracts that amount from the result",
    "While attuned to this item, your tongue is heavy in amount from the result",
    "While attuned to this item, all enemy attacks deal an additional 1 damage to you",
    "While attuned to this item, slashing damage deals an extra 3 damage to you",
    "While attuned to this item, bludgeoning damage deals an extra 3 damage to you",
    "While attuned to this item, stabbing damage deals an extra 3 damage to you",
    "While attuned to this item, when you roll a 1 for initiative. A black dragon wyrmling will appear and help the enemy in combat",
    "43 21 While attuned to this item, fire damage deals an extra 4 damage to you",
    "While attuned to this item, when you roll a 1 for initiative. A green dragon wyrmling will appear and help the enemy in combat",
    "22 While attuned to this item, cold damage deals an extra 4 damage to you",
    "While attuned to this item, when you roll a 1 for initiative. A white dragon wyrmling will appear and help the enemy in combat",
    "While attuned to this item, lightning damage deals an extra 4 damage to you",
    "While attuned to this item, thunder damage deals an extra 4 damage to you",
    "While attuned to this item, necrotic damage deals an extra 4 damage to you",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, you are hit by a stroke of bad luck. You are under the effects of the bane spell for the first three rounds of this encounter",
    "While attuned to this item, radiant damage deals an extra 4 damage to you",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, you are hit by a wave of sickness. You are considered poisoned for the first three rounds of this encounter",
    "While attuned to this item, psychic damage deals an extra 4 damage to you",
    "While attuned to this item, force damage deals an extra 4 damage to you",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, you become captivated by this item. During the first round of combat you may take no actions",
    "While attuned to this item, acid damage deals an extra 4 damage to you",
    "While attuned to this item, poison damage deals an extra 4 damage to you",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, during this encounter, whenever you deal damage roll an extra d4 and subtract that value from the total",
    "While attuned to this item, reduce the damage of all of your critical hits by 7",
    "While attuned to this item, the DC for your death saving throws become 12",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, you are hit by a stroke of bad luck. During this encounter, enemies roll an additional d4 damage whenever that successfully attack you",
    "While attuned to this item, whenever you roll with disadvantage, reduce the value of the lower dice by 2",
    "While attuned to this item, your critical hits cause backlash damage. On a critical hit you take damage equal to your proficiency bonus",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, your legs go numb with fear. For the first three rounds of combat your movement speed is halved and you cannot take the dash action",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item gives off discharges of power this encounter. Any friendly creature within 10 ft. of you at the end of your turn takes 1d6 force damage",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item demands power. Your highest stat to become 10 for three rounds as you feed its hunger",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, you feel the burdon of this item's power take its toll on you. You cannot take reactions or bonus actions for the first three rounds of combat",
    "While attuned to this item, your AC is reduced by 1 when an enemy is within 5 ft of you",
    "While attuned to this item, when an enemy critically hits you, you take 1d10 additional damage of that type",
    "While attuned to this item, for the first hour after finishing a long rest, your movement speed is halved as this item drains your energy",
    "While attuned to this item, Whenever an enemy rolls a natural 1 against you, it is a hit rather than a miss",
    "While attuned to this item, you are easily frightened. You get -2 to any fear checks",
    "While attuned to this item, when you roll a 1 for initiative. A blue dragon wyrmling will appear and help the enemy in combat",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, a Wall of Fire springs up around you and lasts for three rounds",
    "While attuned to this item, when you roll a 1 for initiative. A red dragon wyrmling will appear and help the enemy in combat",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, you are affected by a Reduce spell for the first three rounds of combat",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, a Grease spell is cast under your feet with a radius of 10 ft",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item unleashes an uncontrollable surge of energy. A random enemy within 200 ft. gains 4d6 temporary hit points",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item unleashes an uncontrollable surge of energy. A random enemy within 200 ft. gain +4 to their highest stat",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item unleashes an uncontrollable surge of energy. A random enemy within 200ft. becomes blessed",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item unleashes an uncontrollable surge of energy. A random enemy within 200ft. comes under the effects of Mirror Image",
    "While attuned to this item, whenever you make a saving throw against a spell that deals Necrotic damage, roll a an additional d4 and subtract that value from the result",
    "While attuned to this item, whenever you make a saving throw against a spell that deals Radiant damage, roll a an additional d4 and subtract that value from the result",
    "While attuned to this item, whenever you make a saving throw against a spell that deals Force damage, roll a an additional d4 and subtract that value from the result",
    "While attuned to this item, any spell that allows you to reroll to end an effect at the end of your turn has its DC increased by 2",
    "While attuned to this item, whenever you make a Acrobatics check, roll an additional d4 and subtract half that value, rounded up, from your result",
    "While attuned to this item, whenever you make a Animal Handling check, roll an additional d4 and subtract that value from your result",
    "While attuned to this item, whenever you roll a 1 in combat, a rune appears on the ground beneath your feet. At the end of your turn this rune explodes, dealing 2d10 lightning damage to all friendly creatures adjacent to it",
    "While attuned to this item, whenever you are affected by a healing spell, a random enemy within 30ft. heals for that same amount. While attuned to this item, whenever you make a Athletics check, roll an additional d4 and subtract that value from your result",
    "While attuned to this item, if an enemy casts a damaging spell that would harm you, roll your saving throw with disadvantage. While attuned to this item, whenever you make a Deception check, roll an additional d4 and subtract that value from your result",
    "While attuned to this item, whenever you make a saving throw against a spell that deals Arcane damage, roll a an additional d4 and subtract that value from the result. While attuned to this item, whenever you make a History check, roll an additional d4 and subtract that value from your result",
    "While attuned to this item, whenever you make a Insight check, roll an additional d4 and subtract that value from your result",
    "While attuned to this item, whenever you make a Intimidation check, roll an additional d4 and subtract that value from your result",
    "While attuned to this item, whenever you make a Investigation check, roll an additional d4 and subtract that value from your result",
    "While attuned to this item, whenever you make a Medicine check, roll an additional d4 and subtract that value from your result",
    "While attuned to this item, whenever you make a Nature check, roll an additional d4 and subtract that value from your result",
    "While attuned to this item, whenever you make a Perception check, roll an additional d4 and subtract that value from your result",
    "While attuned to this item, whenever you make a Performance check, roll an additional d4 and subtract that value from your result",
    "While attuned to this item, whenever you make a Persuasion check, roll an additional d4 and subtract that value from your result",
    "While attuned to this item, whenever you make a Religion check, roll an additional d4 and subtract that value from your result",
    "While attuned to this item, whenever you make a saving throw against a spell that deals Fire damage, roll a an additional d4 and subtract that value from the result",
    "While attuned to this item, whenever you make a saving throw against a spell that deals Cold damage, roll a an additional d4 and subtract that value from the result",
    "While attuned to this item, whenever you make a saving throw against a spell that deals Thunder damage, roll a an additional d4 and subtract that value from the result",
    "While attuned to this item, whenever you make a saving throw against a spell that deals Lightning damage, roll a an additional d4 and subtract that value from the result",
    "While attuned to this item, whenever you make a saving throw against a spell that deals Acid damage, roll a an additional d4 and subtract that value from the result",
    "While attuned to this item, whenever you make a saving throw against a spell that deals Poison damage, roll a an additional d4 and subtract that value from the result",
    "While attuned to this item, whenever you make a Sleight of Hand check, roll an additional d4 and subtract that value from your result",
    "While attuned to this item, whenever you make a Stealth check, roll an additional d4 and subtract that value from your result",
    "While attuned to this item, whenever you make a Survival check, roll an additional d4 and subtract half that value, rounded up, from your result",
    "While attuned to this item, you may not use healing potions while in combat",
    "While attuned to this item, whenever an enemy critically hits you, you have disadvantage on all rolls made during your next round of combat",
    "While attuned to this item, whenever an enemy critically hits you, you move down one step on the initiative order",
    "While attuned to this item, whenever you roll with advantage, reduce the result of the higher dice by 2",
    "While attuned to this item, party members within 5 feet of you gain a penalty of -1 to their initiative rolls",
    "While attuned to this item, you get -2 to your initiative rolls",
    "While attuned to this item, you are mute for the first hour after a long rest",
    "While attuned to this item, if you have darkvision, you lose it. If you don't have darkvision, you are now afraid of the dark and need a light in order to sleep",
    "While attuned to this item, whenever you roll max damage on an attack die. Reroll that die and take the second result. Do this a maximum of once per round",
  ];
  $roll = rand(1,100);
  $mediumD = Roller($mediumDetD00);
    if ($roll == 69) {
    $mediumD = Roller($mediumDetD00) . " and " . Roller($mediumDetD00);
    }
    $mediumD .= "";
  $majorDetD00 = [
    "This item has two additional Medium Detriments",
    "This item has two additional Medium Detriments",
    "This item has two additional Medium Detriments",
    "This item has two additional Medium Detriments",
    "This item has two additional Medium Detriments",
    "This item has two additional Medium Detriments",
    "This item has two additional Medium Detriments",
    "This item has two additional Medium Detriments",
    "This item has two additional Medium Detriments",
    "This item has two additional Medium Detriments",
    "While attuned to this item, you have vulnerability to fire damage",
    "While attuned to this item, you have vulnerability to cold damage",
    "While attuned to this item, you have vulnerability to lightning damage",
    "While attuned to this item, you have vulnerability to thunder damage",
    "While attuned to this item, you have vulnerability to force damage",
    "While attuned to this item, you have vulnerability to acid damage",
    "While attuned to this item, you have vulnerability to poison damage",
    "While attuned to this item, you have vulnerability to psychic damage",
    "While attuned to this item, you have vulnerability to radiant damage",
    "While attuned to this item, you have vulnerability to necrotic damage",
    "While attuned to this item, you have vulnerability to slashing damage",
    "While attuned to this item, you have vulnerability to bludgeoning damage",
    "While attuned to this item, you have vulnerability to piercing damage",
    "While attuned to this item, enemies critically hit you on a roll of 18-2",
    "While attuned to this item, enemy attacks deal an additional 3 damage to you",
    "While attuned to this item, you have a chance to spontaneously combust. When you are damaged by an enemy, roll a d20. On a result of 1, you cast a level 3 Fireball spell centered on yourself",
    "While attuned to this item, at the end of your turn in combat, roll a d20. On a result of 1, pure energy erupts from this item when you. All flammable objects not being worn or carried within thirty feet of you burst into flames. Additionally, all creatures within thirty feet take 3d6 fire damag",
    "While attuned to this item, at the end of your turn in combat, roll a d20. On a result of 1, ice erupts from this item. All non-living, non-carried or equipped objects in a twenty foot radius are frozen. The area becomes difficult terrain until the ice melts. All creatures within this area take 3d6 cold damage",
    "While attuned to this item,at the end of your turn in combat, roll a d20. On a result of 1, this item erupts with brilliant light. All creatures within ten feet of you, including yourself, must make a DC 15 Constitution save or become blinded. Repeat this save at the end of each turn. You automatically fail the first",
    "While attuned to this item, at the end of your turn in combat, roll a d20. On a result of 1, a cloud of poisonous gas erupts from this item when you. All creatures in a 20 foot radius, including you, must make a DC 15 Constitution save or become poisoned. Repeat this save at the end of each turn. You automatically fail the first",
    "While attuned to this item, whenever you roll a critical hit, reduce its damage by 13",
    "While attuned to this item, for the first hour after finishing a long rest, you are deaf",
    "While attuned to this item, when an enemy critically hits you, you take 2d12 additional damage of that type",
    "While attuned to this item, whenever you roll a natural 1 on a spell save DC, the damage is increased by 50% or the DC to save on the effect if ongoing is increased by ",
    "While attuned to this item, Whenever an enemy rolls a natural 1 against you, it is a hit rather than a miss",
    "While attuned to this item, whenever you roll max damage on a die. Reroll that die and take the second result. This detriment only applies once per turn",
    "While attuned to this item, your critical hits cause backlash damage. On a critical hit, you take damage equal to your level",
    "While attuned to this item, you regain only half of your hit dice during a long rest",
    "While attuned to this item, every time you take the attack action or cast a spell, you lose 2 hit points",
    "While attuned to this item, you get -4 to your initiative rolls",
    "While attuned to this item, you make your initiative rolls with disadvantage",
    "While attuned to this item, you must sleep for at least ten hours to become fully rested. If you do not get this rest you gain a level of exhaustion",
    "While attuned to this item, once you fall asleep you enter a trance and are incapable of waking up for any reason for the next six hours",
    "While attuned to this item, whenever you are critically hit you are stunned until the end of your next turn",
    "While attuned to this item, when you roll a natural 1-2 for initiative. A Bulette will appear and help the enemy in combat. If a Bulette does not fit in this area",
    "While attuned to this item, when you roll a natural 1-2 for initiative. A Cambion will appear and help the enemy in combat",
    "While attuned to this item, when you roll a natural 1-2 for initiative. A Balgura Demon will appear and help the enemy in combat. If a Balgura does not fit in this area, a Flaming Skull appears instead",
    "While attuned to this item, when you roll a natural 1-2 for initiative. A Barbed Devil will appear and help the enemy in combat",
    "While attuned to this item, when you roll a natural 1-2 for initiative. A Half-Dragon Veteran will appear and help the enemy in combat",
    "While attuned to this item, during your first combat of the day, you have -3 to all saving throws for this fight",
    "While attuned to this item, during your first combat of the day, you are filled with rage and always attack the closest enemy this fight",
    "While attuned to this item, during your first combat of the day, your legs go numb. Your movement speed is halved for this fight",
    "While attuned to this item, the contents of healing potions turn to dust as they touch your lips",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, you are hit by a stroke of bad luck. You are under the effects of the bane spell for this encounter",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, you are hit by a wave of sickness. You are considered poisoned for the first five rounds of this encounter",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, you become captivated by this item. During the first round of combat you may take no actions and during the second you make all actions with disadvantage",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, during this encounter, whenever you deal damage roll an extra d6 and subtract that value from the total",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, you are hit by a stroke of bad luck. During this encounter, enemies roll an additional d6 damage whenever that successfully attack you",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, your legs go numb with fear. For the first five rounds of combat your movement speed is halved and you cannot take the dash action",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item gives off discharges of power this encounter. Any friendly creature within 10 ft. of you at the end of your turn takes 2d6 force damage",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item demands power. Your highest stat to become 12 for five rounds as you feed its hunger",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, you feel the burdon of this item's power take its toll on you. You cannot take reactions or bonus actions for the first three rounds of combat",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, a Wall of Fire springs up around you and lasts for five rounds",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, you are affected by a Reduce spell for the first five rounds of combat",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, a Grease spell is cast under your feet with a radius of 20 ft",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item unleashes an uncontrollable surge of energy. A random enemy within 200 ft. gains 4d12 temporary hit points",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item unleashes an uncontrollable surge of energy. A random enemy within 200 ft. has their highest stat increased by 6",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item unleashes an uncontrollable surge of energy. Two random enemies within 200ft. becomes blessed",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item unleashes an uncontrollable surge of energy. Two random enemies within 200ft. comes unde the effects of Mirror Image spell",
    "While attuned to this item, you feel sluggish and depressed when it rains. While it is raining, make your initiative rolls with disadvantage and you make not take bonus actions",
    "While attuned to this item, whenever you roll a natural 19-20 for initiative, one of the random effects from the Bag of Beans occurs within ten feet of you",
    "While attuned to this item, a pack of 3d6 gnolls appear somewhere in the wilds, worshipping this item as their god. They will hunt you down until they are all killed or until they have retrieved the item",
    "While attuned to this item, the gods themselves become jealous. Each dawn roll a d4. On a result of 1, you will be struck with a bolt of lightning (8d6, DC 15 Dex save for half) at some unknown point during that day",
    "While attuned to this item, the gods themselves become jealous. Each dawn, roll a d4. On a result of 1, at some point during the day the ground beneath your feet will turn to quicksand. You become restrained and slowly sink into the ground. If you cannot escape or are not pulled free within three turns, you begin to suffocate. (DC 15 Strength save",
    "While attuned to this item, the gods themselves become jealous. Each dawn roll a d4. On a result of 1, at some unknown point during the day, one of your allies will be hit by a ray of flames from the heavens. (5d10 fire damage, DC 15 Dexterity save for half",
    "While attuned to this item, the gods themselves become jealous. Each dawn roll a d4. On a result of 1, at some unknown point during the day, a powerful gust of wind will bombard you and all creatures within 20 feet. Each creature affected makes a DC 15 Str save, on a fail they are thrown 30 feet, take 5d4 bludgeoning damage, and are knocked prone. On a pass, they take half damage and are not knocked prone",
    "While attuned to this item, you make Acrobatics checks with disadvantage",
    "While attuned to this item, you make Animal Handling checks with disadvantage",
    "While attuned to this item, you make Athletics checks with disadvantage",
    "While attuned to this item, you make Deception checks with disadvantage",
    "While attuned to this item, you make History checks with disadvantage",
    "While attuned to this item, you make Insight checks with disadvantage",
    "While attuned to this item, you make Intimidation checks with disadvantage",
    "While attuned to this item, you make Investigation checks with disadvantage",
    "While attuned to this item, you make Medicinechecks with disadvantage",
    "While attuned to this item, you make Nature checks with disadvantage",
    "While attuned to this item, you make Perception checks with disadvantage",
    "While attuned to this item, you make Performance checks with disadvantage",
    "While attuned to this item, you make Persuasion checks with disadvantage",
    "While attuned to this item, you make Religion checks with disadvantage",
    "While attuned to this item, you make Sleight of Hand checks with disadvantage",
    "While attuned to this item, you make Stealth checks with disadvantage",
    "While attuned to this item, you make Survival checks with disadvantage",
    "While attuned to this item, you are limited to having only one other magical item attuned to you. If you are attuned to two items when you try to become attuned to this item, it fails",
    "While attuned to this item, your lowest attribute is reduced by 2",
    "While attuned to this item, your highest attribute is reduced by 2",
    "While attuned to this item, whenever you kill an enemy, an overwhelming guilt strikes you. Make a DC 15 Wisdom saving throw. On a fail, you are so conflicted with your actions that you cannot attack next turn",
    "While attuned to this item, sevens are not so lucky for you. They are always considered a 1 when rolled",
    "While attuned to this item, when you move through difficult terrain in combat, you must expend quadruple the movement, rather than double",
  ];
  $roll = rand(1,100);
  $majorD = Roller($majorDetD00);
    if ($majorD == "This item has two additional Medium Detriments"){
    $majorD = Roller($mediumDetD00) . " and " . Roller($mediumDetD00);
    $roll = 1;
    }
    if ($roll == 69) {
    $majorD = Roller($majorDetD00) . " and " . Roller($majorDetD00);
    }
    $majorD .= "";
  $legendDetD00 = [
    "While attuned to this time, you have vulnerability to three damage tpyes",
    "While attuned to this time, you have vulnerability to three damage tpyes",
    "While attuned to this time, you have vulnerability to three damage tpyes",
    "While attuned to this time, you have vulnerability to three damage tpyes",
    "While attuned to this time, you have vulnerability to three damage tpyes",
    "While attuned to this time, you have vulnerability to three damage tpyes",
    "While attuned to this time, you have vulnerability to three damage tpyes",
    "While attuned to this time, you have vulnerability to three damage tpyes",
    "While attuned to this time, you have vulnerability to three damage tpyes",
    "While attuned to this time, you have vulnerability to three damage tpyes",
    "While attuned to this item, whenever you roll a natural 1-3 for your initiative, a Tyrannasaurus Rex appears and fights for your opponent. If the area is too small to fit a Tyrannasaus Rex, two Allosaurus appear instead",
    "While attuned to this item, whenever you roll a natural 1-3 for your initiative, a young black dragon appears and fights for your opponent",
    "While attuned to this item, whenever you roll a natural 1-3 for your initiative, a young red dragon appears and fights for your opponent",
    "While attuned to this item, whenever you roll a natural 1-3 for your initiative, a young blue dragon appears and fights for your opponent",
    "While attuned to this item, whenever you roll a natural 1-3 for your initiative, a young green dragon appears and fights for your opponent",
    "While attuned to this item, whenever you roll a natural 1-3 for your initiative, a young white dragon appears and fights for your opponent",
    "While attuned to this item, whenever you roll a natural 1-3 for your initiative, two flameskulls show up and fights for your opponent",
    "While attuned to this item, whenever you roll a natural 1-3 for your initiative, a frost giant shows up and fights for your opponent. If the area is too small to suppost a frost giant, a hobgoblin warlord appears instead",
    "While attuned to this item, whenever you roll a natural 1-3 for your initiative, a hydra shows up and fights for your opponent. If the area is too small to suppost a hydra, a Mind Flayer is summoned instead",
    "While attuned to this item, whenever you roll a natural 1-3 for your initiative, a Yuan-ti Abomination shows up and fights for your opponent. If the area is too small to suppost an Abomination, a Green Slaad appears instead",
    "While attuned to this item, at the end of each of your turns in combat, roll a d10. On a result of 1, a 5 ft. wide pit trap opens beneath your feet. You must make a DC 14 Dexterity saving throw. On a success, you manage to avoid falling. On a fail, you fall ten feet and land on sharp spikes, taking 3d10 piercing damage and are trapped in the hole. As soon as the player climbs out of the hole, it disappears and the floor is reformed",
    "While attuned to this item, at the end of each of your turns in combat, roll a d10. On a result of 1, you spontaneously burst into flame. You take 2d8 fire damage at the beginning of each turn. You may spend your action on your turn to douse the flames. If this effect triggers while you are already on fire, double the number of damage dice",
    "While attuned to this item, at the end of each of your turns in combat, roll a d10. On a result of 1, a meteor screeches out of the sky and strikes you for 6d6 bludgeoning damage and knocks you prone",
    "While attuned to this item, at the end of each of your turns in combat, roll a d10. On a result of 1, you have a horrific vision of the future. All rolls made on your next turn are made with disadvantage as you try to overcome your fear",
    "While attuned to this item, at the end of each of your turns in combat, roll a d10. On a result of 1, a random creature with CR 2 or less is added to the battle fighting for your opponent",
    "While attuned to this item, wehenever water touches your bare skin it burns like acid. You will take damage based on the amount of water to which you are exposed",
    "While attuned to this item, your willingness to kill fades completely. You cannot strike a killing blow on an enemy by any means",
    "Attached to this item is a small book labeled 'Whispers of the Ancients'. Each day, this item will only gain its beneficial effects if you read at least one page from this book. Doing so causes a temporary madness effect. If you fail to read from the book for multiple days, long-term madness will begin to set in",
    "While attuned to this item, it seems to mock you whenever you fail. Whenever you do not pass a saving throw, this item drains 1 point of the corresponding attribute from all allies within 120 ft. These points are restored on a short or long rest",
    "While attuned to this item, your bloodlust knows no bounds. If ever you try to move away from an enemy, you must pass a DC 16 Wisdom saving throw or be bound by the need to continue fighting",
    "While attuned to this item, it has demands before activating its beneficial effects each day. Each morning you find berries nearby. You must feed these to at least one friendly party member before the item will activate. An ally fed by these berries will need to make a DC 16 Constitution saving throw on the first round of the next combat encounter. On a fail, they are poisoned and may repeat the save on each subsequent turns. If the party member has any indication of your tampering, you AND that player are poisoned for the entire combat instead. Tell your DM in secret which party member you poison",
    "While attuned to this item, it has demands before activating its beneficial effects each day. Each morning you find a strange piece of paper in your pocket. You must read the words on this page to curse an unknowing friendly party member before this item will activate. An ally cursed by this chant must make a DC 16 Charisma saving throw on the first round of the next combat encounter. On a fail, they are under the effects of the Bane spell for the duration of the fight. If the party member has any indication fo your tampering, you AND that player are instead placed under the effects of the spell. Tell your DM in secret which party member you curse",
    "While attuned to this item, it has demands before activating its beneficial effects each day. Each morning you find a piece of flint in your pocket. You must secretly place this in the pocket of a friendly party member before this item will activate. On the first round of your next combat encounter, that ally bursts into flames that cannot be doused by you. They take 3d6 Fire damage at the beginning of each turn until they use their action to put out the flames. If the party member is given any clue of your tampering, you will instead be the one to burst into flames that will last for 5 turns no matter how hard you try to cleanse them. Tell your DM is secret which party member was given the flint",
    "While attuned to this item, it has demands before activating its beneficial effects each day. Each morning you find a translucent ribbon in your pocket. You must secretly fasten this ribbon to a magic item belonging to friendly party member before this item will activate. On the first round of your next combat encounter, that player must make a DC 16 Intelligence saving throw. On a fail, their magic item disappears. On a success, nothing happens. If the player is given any indication of your tampering, your magic item will disappear for the entire combat instead. They may repeat this save at the beginning of each subsequent turn. On a success, the item returns to its rightful place. Tell your DM in secret to which item this ribbon has been attached",
    "While attuned to this item, it has demands before activating its beneficial effects each day. Each morning you find a small pebble in your pocket. You must secretly slip this pebble into another party member's pocket before this item will activate. On the first round of your next combat encounter, the player who received the pebble must make a DC 16 Wisdom Saving Throw or be put under the effects of the Slow spell. They may repeat this save at the beginning of each subsequent turn. If the player is given any indication of your tampering, you are put under the effects of the spell for the entire combat instead. Tell your DM is secret which player the pebble was given to",
    "While attuned to this item, at the beginning of each of your turns roll a d10. On a result of 1, this item's will overtakes yours and forces you to attack your nearest ally this turn",
    "While attuned to this item, at the start of each round of combat, as long as you have at least 1 hit point, you lose 1d8 hit points",
    "While attuned to this item, whenever you deal a killing blow to an enemy, all allies within 30ft. of that enemy take 15 necrotic damage as this item hungers additional power",
    "While attuned to this item, whenever you are knocked unconscious, all allies within 30 ft. are dealt 10 necrotic damage as this item demands a sacrifice",
    "While attuned to this item, Whenever an enemy rolls a natural 1 against you, it is a critical hit rather than a miss",
    "While attuned to this item, enemy attacks deal an additional 5 damage to you",
    "While attuned to this item, your bones are as brittle as glass. Any critical hit that deals more than 20% of your maximum life breaks one of your bones",
    "While attuned to this item, the first time you pass a saving throw to end a lasting negative effect, the effect instead persists",
    "While attuned to this item, all of your hit dice heal for the minimum amount possible",
    "While attuned to this item, at the end of your turn in combat, roll a d20. On a result of 1, this item unleashes a blast of freezing ice. You and all other creatures with in 30 ft. must make a DC 17 Constitution saving throw. Each creature takes 5d8 cold damage and can only move half their speed next turn. Creatures who pass the save take half damage and do not have their movement restricted. Enemies make this saving throw with advantage",
    "While attuned to this item, at the end of your turn in combat, roll a d20. On a result of 1, this item unleashes a blast of blinding light. You and all other creatures within 30 ft. must make a DC 17 Constitution saving throw. Each creature takes 5d8 radiant damage and are blinded until the end of their next turn. Creatures who pass the save take half damage and are not blinded. Enemies make this saving throw with advantage",
    "While attuned to this item, at the end of your turn in combat, roll a d20. On a result of 1, this item unleashes a blast of poison gas. You and all other creatures within 30 ft. must make a DC 17 Constitution saving throw. Each creature takes 5d8 posion damage and are poisoned until the end of their next turn. Creatures who pass the save take half damage and are not posioned. Enemies make this saving throw with advantage",
    "While attuned to this item, at the end of your turn in combat, roll a d20. On a result of 1, this item unleashes a wave of necrotic energy. You and all creatures within 30 ft. must make a DC 17 Constitution saving throw. Each creature takes 5d8 necrotic damage and cannot be healed until the end of their next turn. Creatures who pass the save take half damage and can still be healed. Enemies make this saving throw with advantage",
    "While attuned to this item, at the end of your turn in combat, roll a d20. On a result of 1, the area around you is showered with acid. You and all creatures within 30 ft. must make a DC 17 Constitution saving throw. Each creature takes 5d8 acid damage and have their AC reduced by 3 until the end of their next turn. Creatures who pass the save take half damage and do not take an AC penalty. Enemies make this saving throw with advantage",
    "You gain an additional two Major detriments",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, your limbs feel as if they are freezing solid. During this enocunter, you have vulnerability to bludgeoning damage and fire damage. Additionally, your movement speed is halved and you are incapable of critically striking enemies",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item unleashes jolts of energy whenever you strike a foe. During this encounter, whenever you deal damage to an enemy, you take psychic damage equal to your proficiency bonus",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item pulses with psychic energies that probe your mind. During this encounter, you make all saving throws against magical effects with disadvantage. Additionally, you have vulnerability to psychic damage and are incapable of taking a bonus action as pain overwhelms you",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item has an overload of power and needs time to recharge. During this encounter, this item loses all beneficial effects",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, a stroke of bad luck strikes you. During this encounter, you are under the effects of the Slow spell. This effect cannot be removed by any means until combat ends",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item exposes a weakness in your defenses to enemies. During this encounter, any attacks you make or spells you cast provokes an attack of opportunity",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item can no longer hold the power it contains. During this encounter, whenever you attack, this item lets loose an arc of lightning to a random ally within 60 ft. That ally makes a DC 16 Dexterity saving throw or takes 3d8 lightning damage. A successful save halves this damage",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item can no longer hold the power it contains. During this encounter, whenever you attack, this item unleashes a small blast of flame at a random ally within 60 ft. That ally makes a DC 16 Dexterity saving throw or takes 3d8 fire damage. A successful save halves this damage",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, this item feeds off the strength of your allies as well. During this encounter, all allies within 60 ft. get -3 to all of their saving throws",
    "While attuned to this item, you are followed by a strange flaming skull. The first time you hit an enemy in combat, the skull will fly to that enemy, consuming their soul and taking control of their body. That enemy becomes empowered in random, powerful ways until killed, at which point the skull will continue following you until the next combat",
    "This item is sentient. When it grows bored it may choose to take control of part or all of your body and cause you to perform horrible acts to keep itself entertained. The longer you use this item, the easier it is for the item to gain control",
    "While attuned to this item, your eyes become reliant on sunlight for vision. Once the sun has set, you become blinded until it rises again",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, enemies also feed off the power of this item. During this encounter, all enemies within 60 ft. add an additional d6 to any damaging roll",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, enemies also feed off the power of this item. At the start of this encounter, all enemies within 120 ft. gain temporary hp equal to three times your level",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, enemies also feed off the power of this item. During this encounter, all enemies within 60 ft. have their AC increased by 2",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, enemies also feed off the power of this item. At the start of this encounter, all enemies within 200 ft. gain the ability to automatically turn a failed saving throw into a pass once this day",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, all enemies within 200 ft. are considered blessed during this encounter",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, the most powerful enemy within 200 ft. has their highest stat increased by 12 during this encounter",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, the most powerful enemy within 200 ft. has their proficiency bonus increased by 3 during this encounter",
    "While attuned to this item, whenever you roll for initiative, roll a d4. On a result of 1, the most powerful enemy within 200 ft. gets an extra attack on each of their turns during this encounter",
    "While attuned to this item, a reaper stalks you from the shadows. If ever you are more than 100 ft. from any friendly creature, he will attempt to harvest your soul. Make a DC 15 Constitution saving throw or be reduced to 0 hit points. At the beginning of your next turn, make another Constitution saving throw. On a fail, your soul is ripped from your body and you die",
    "While attuned to this item, for the first hour after awakening from sleep, you are blind",
    "While attuned to this item, for the first hour after awakening from sleep, you are cannot cast spells above cantrips and may only take one attack per turn",
    "While attuned to this item, whenever you take fall damage, take 2d10 for every 10 ft. you fall rather than 1d6",
    "While attuned to this item, you always go last in combat despite what you roll for your initiative",
    "While attuned to this item, whenever you drink a potion you becomes poisoned for the next 10 minutes. This effect cannot be removed by any means magical or non-magical",
    "While attuned to this item, an enemy knocks you unconscious, this item teleports to that enemy and instantly becomes attuned to them. This item loses all detrimental effects until it becomes attuned once again",
    "While attuned to this item, whenever you roll a 1 on a saving throw in combat, if the effect has a duration it lasts for the maximum duration. If it deals damage, it deals maximum damage",
    "While attuned to this item, whenever you roll with advantage, reduce the result of the higher dice by 4",
    "While attuned to this item, an adult chromatic dragon is swpawned somewhere in the world with a knowing that you took this item from its treasure horde. It will hunt you down, waiting until you are vulnerable and then striking to reclaim its treasure",
    "While attuned to this item, whenever you are reduced to 0 hit points, the enemy that performed the blow is empowered. That creature gains temporary hp equal to half of your maximum and makes all attacks with advantage for the rest of the encounter",
    "While attuned to this item, whenever you are reduced to 0 hit points, you gain 2 levels of exhaustion",
    "While attuned to this item, whenever you are reduced to 0 hit points, this item is impressed by the power of your enemies. You are instantly returned to a third of your maximum hit points, but are now fighting on behalf of your enemies. This effect persists until you are brought to 0 hit points once again",
    "While attuned to this item, all magic scrolls that come within 10 feet of it are erased, rendering them useless",
    "While attuned to this item, you and all allies within 50 ft. of you are considered to be under the effects of a Bane spell during your first encounter of the day",
    "While attuned to this item, you and all allies within 50 ft. of you get -4 to their initiative rolls",
    "When you attune to this item, a small wooden chest appears nearby. You can feel your spirit bound to this chest . . . a need to keep it near. If the chest is more than 100 ft. from you, you have disadvantage on attack rolls and ability checks. If this chest is destroyed, sent to another plane of existence, or placed into an extradimensional space, you die as your soul is ripped from your body and harvested by the demon that created this item",
    "While attuned to this item, your size category becomes one smaller abd your Constitution is lowered by 2",
    "While attuned to this item, whispers float on the wind to a powerful creature somewhere on a random plane. This may be a demonlord, a dragon, a djinn, or some other entity of great power. These whispers tell them of this item and its power, calling them to it to retrive it for themselves",
    "While attuned to this item, when you are afflicted by any status effect, roll a d4. As long as the first status effect persists, you also are afflicted by the following based on the result of the d4: 1 - You are defeaned, 2 - You are blinded, 3 - You are restrained, 4 - You are posioned",
    "While attuned to this item, when you are in difficult terrain your concentration is scattered. You make all actions with disadvantage",
    "To become attuned to this item, you must strike up a bargain with the Gods. They demand something of equivilent value be taken away for you to use this divine gift. This may be a loved one, money, or even bits of your sanity. The terms of this bargain are up to the DM",
    "Whenever you make a roll with disadvantage, roll 3 dice and take the lowest result",
    "While attuned to this item, you only regenerate a single hit dice on each long rest",
    "While attuned to this item, you can only regain health via hit dice and long rests",
    "While attuned to this item, whenever you roll a natural 1 during any encounter, roll an additional d10. If the result of that second die is also a 1, this item unleashes a wave of energy at the most powerful enemy within 200 ft. A copy of that creature appears in an adjacent tile at full health and is added to the encounter",
    "While attuned to this item, as you sleep, fire randomly jolts off of your body and sets fire to anything flammable nearby",
    "To become attuned to this item, you must sign a literal deal with a devil. It may demand your services in combat, for you to harvest the souls of innocents, or some other sinister plot. The terms of the deal are chosen by the GM",
    "While attuned to this item, if an enemy hits you for more than half of your max health with a single attack, you are immediately knocked unconscious",
    "The ancient snake god of the Yuan-Ti awakens somewhere in the world",
  ];
  $roll = rand(1,100);
  $legendD = Roller($legendDetD00);
    if ($legendD == "You gain an additional two Major detriments"){
    $legendD = Roller($majorDetD00) . " and " . Roller($majorDetD00);
    $roll = 1;
    }
    if ($roll == 69) {
    $legendD = Roller($legendDetD00) . " and " . Roller($legendDetD00);
    }
    $majorD .= "";
$roll = rand(1,100);
$artifactD00 = "";
//echo $roll;
if ($roll <= 1) {
  $artifactD00 = "You found a Legendary item. ";
  $artifactD00 .= Roller($legendEffD00);
} elseif ($roll <= 2) {
  $artifactD00 = "You found a famous item. ";
  $artifactD00 .= Roller($majorEffD00);
} elseif ($roll <= 4) {
  $artifactD00 = "You found a famous item. ";
  $artifactD00 .= Roller($legendEffD00) . " but " . Roller($lesserDetD00);
} elseif ($roll <= 7) {
  $artifactD00 = "You found a fantastic item. ";
  $artifactD00 .= Roller($mediumEffD00);
} elseif ($roll <= 11) {
  $artifactD00 = "You found a fantastic item. ";
  $artifactD00 .= Roller($majorEffD00) . " but " . Roller($lesserDetD00);
} elseif ($roll <= 14) {
  $artifactD00 = "You found a fantastic item. ";
  $artifactD00 .= Roller($legendEffD00) . " but " . Roller($mediumDetD00);
} elseif ($roll <= 20) {
  $artifactD00 = "You found a magical item. ";
  $artifactD00 .= Roller($lesserEffD00);
} elseif ($roll <= 27) {
  $artifactD00 = "You found a magical item. ";
  $artifactD00 .= Roller($mediumEffD00) . " but " . Roller($lesserDetD00);
} elseif ($roll <= 33) {
  $artifactD00 = "You found a magical item. ";
  $artifactD00 .= Roller($majorEffD00) . " but " . Roller($mediumDetD00);
} elseif ($roll <= 39) {
  $artifactD00 = "You found a magical item. ";
  $artifactD00 .= Roller($legendEffD00) . " but " . Roller($majorDetD00);
} elseif ($roll <= 47) {
  $artifactD00 = "You found a magical item. ";
  $artifactD00 .= Roller($lesserEffD00) . " but " . Roller($lesserDetD00);
} elseif ($roll <= 52) {
  $artifactD00 = "You found a fantastic item. ";
  $artifactD00 .= Roller($mediumEffD00) . " but " . Roller($mediumDetD00);
} elseif ($roll <= 54) {
  $artifactD00 = "You found a famous item. ";
  $artifactD00 .= Roller($majorEffD00) . " but " . Roller($majorDetD00);
} elseif ($roll <= 55) {
  $artifactD00 = "You found a legendary item. ";
  $artifactD00 .= Roller($legendEffD00) . " but " . Roller($legendDetD00);
} elseif ($roll <= 64) {
  $artifactD00 = "You found a cursed item. ";
  $artifactD00 .= Roller($lesserDetD00);
} elseif ($roll <= 72) {
  $artifactD00 = "You found a cursed item. ";
  $artifactD00 .= Roller($lesserEffD00) . " but " . Roller($mediumDetD00);
} elseif ($roll <= 78) {
  $artifactD00 = "You found a cursed item. ";
  $artifactD00 .= Roller($mediumEffD00) . " but " . Roller($majorDetD00);
} elseif ($roll <= 84) {
  $artifactD00 = "You found a cursed item. ";
  $artifactD00 .= Roller($majorEffD00) . " but " . Roller($legendDetD00);
} elseif ($roll <= 89) {
  $artifactD00 = "You found a awful item. ";
  $artifactD00 .= Roller($mediumDetD00);
} elseif ($roll <= 93) {
  $artifactD00 = "You found a awful item. ";
  $artifactD00 .= Roller($lesserEffD00) . " but " . Roller($majorDetD00);
} elseif ($roll <= 96) {
  $artifactD00 = "You found a awful item. ";
  $artifactD00 .= Roller($mediumEffD00) . " but " . Roller($legendDetD00);
} elseif ($roll <= 98) {
  $artifactD00 = "You found a infamous item. ";
  $artifactD00 .= Roller($lesserEffD00) . " but " . Roller($legendDetD00);
} elseif ($roll <= 99) {
  $artifactD00 = "You found an infamous item. ";
  $artifactD00 .= Roller($majorDetD00);
} elseif ($roll == 100) {
  $artifactD00 = "You found a Legendary item. ";
  $artifactD00 .= Roller($legendDetD00);
}
$artifactD00 .= "";
?>


<html>
  <head>
    <meta charset="utf-8">
    <title> Magic Item </title>
  </head>
  <body>
    <hr><br>
    <div class="" style="background-color:red;color:white;padding:2%;">
      <b><snap><?=$artifactD00?></snap></b>.<br>
    </div>
    <hr><br>
    <hr><br>
    <div class="" style="overflow: hidden; clear: both;">
      <div class="" style="width: 46vw;display: inline-block;float: left;text-align: justify;padding:0px 1vw;">
        Magic Effect (Lesser):<br>
        <b><?=$lesserE?></b>.<br>
        <hr><br>
        Magic Effect (Medium):<br>
        <b><?=$mediumE?></b>.<br>
        <hr><br>
        Magic Effect (Major):<br>
        <b><?=$majorE?></b>.<br>
        <hr><br>
        Magic Effect (Legendary):<br>
        <b><?=$legendE?></b>.<br>
      </div>
      <div class="" style="width: 2px;height: 500px;display: inline-block;float: left;background-color:red"></div>
      <div class="" style="width: 46vw;display: inline-block;float: left;text-align: justify;padding:0px 1vw;">
        Magic Detriment (Lesser):<br>
        <b><?=$lesserD?></b>.<br>
        <hr><br>
        Magic Detriment (Medium):<br>
        <b><?=$mediumD?></b>.<br>
        <hr><br>
        Magic Detriment (Major):<br>
        <b><?=$majorD?></b>.<br>
        <hr><br>
        Magic Detriment (Legendary):<br>
        <b><?=$legendD?></b>.<br>
      </div>
    </div>

    <hr><br>
    <hr><br>
  </body>
</html>
