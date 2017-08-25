<?php require_once("math.php"); ?>
<?php
//1d100	Effect	Attack of Opportunity
$roll = rand(1,100)
$fail = if ($roll <= 19) {
  "Slip; roll Reflex DC 15, or slip and be Dazed for 1d4 rounds	this does not generate attack of oportunity.";
} elseif ($roll <= 33) {
  "Stumble; roll Reflex check DC 20, or stumble and be Dazed for 1d6 rounds	this does not generate attack of oportunity.",
} elseif ($roll <= 39) {
  "Trip; Shaken for 1d6 rounds	this does not generate attack of oportunity.",
} elseif ($roll <= 44) {
  "Off Balance; roll Dexterity Check DC 18, or no action next round, and Flat-footed	this does not generate attack of oportunity.",
} elseif ($roll <= 49) {
  "Lose grip on weapon; roll Reflex Save DC 20, or no attack next round and Flat-footed	this does not generate attack of oportunity.",
} elseif ($roll <= 54) {
  "Lose grip on weapon; roll Dexterity DC 20, or drop weapon	this generates attack of oportunity",
} elseif ($roll <= 59) {
  "Lose grip on weapon; drop weapon, Shaken for 1d4 rounds	this generates attack of oportunity",
} elseif ($roll <= 61) {
  "Dumbfounded by own ineptitude. Will Save DC 20 or Slowed for 1d4 rounds	this does not generate attack of oportunity.",
} elseif ($roll <= 63) {
  "Slip, knocked prone in current space taking 1d6 nonlethal damage	this generates attack of oportunity",
} elseif ($roll <= 65) {
  "Random Fluid gets in eyes. All opponents concealed (50% miss) and lose Dex bonus to AC for 1d6 rounds.	this does not generate attack of oportunity.",
} elseif ($roll <= 69) {
  "By a stroke of luck, avoid the crit fail, cancelling your current action. this does not generate attack of oportunity. more actions can be taken for the remainder of the current turn.	this does not generate attack of oportunity.",
} elseif ($roll <= 74) {
  "Your weapon takes 50% of it's base HP as damage, bypassing hardness.	this does not generate attack of oportunity.",
} elseif ($roll <= 77) {
  "Hit Self; ½ damage + Shaken 1d3 rounds	this does not generate attack of oportunity.",
} elseif ($roll <= 79) {
  "Hit self; normal damage + Dazed 1d3 rounds	this does not generate attack of oportunity.",
} elseif ($roll <= 80) {
  "Hit self; auto-critical + Stunned 1d3 rounds	this does not generate attack of oportunity.",
} elseif ($roll <= 83) {
  "Hit ally; ½ damage	this generates attack of oportunity",
} elseif ($roll <= 85) {
  "Hit ally; normal damage	this generates attack of oportunity",
} elseif ($roll <= 86) {
  "Hit ally; auto-critical	this generates attack of oportunity",
} elseif ($roll <= 88) {
  "Critical hit self + Slowed 1d2 rounds	this generates attack of oportunity",
} elseif ($roll <= 90) {
  "Critical hit ally + Stunned 1d2 rounds	this does not generate attack of oportunity.",
} elseif ($roll <= 92) {
  "Twist ankle; Slowed for 10 rounds, Dex check DC 20 or fall Prone.	this does not generate attack of oportunity.",
} elseif ($roll <= 95) {
  "Trip and Fall; Prone, Slowed for 1d3 minutes	this does not generate attack of oportunity.",
} elseif ($roll <= 97) {
  "Spectacular display renders you prone and Slowed for 1d6 rounds	this generates attack of oportunity",
} elseif ($roll <= 98) {
  "Knock yourself cold in a daring feat of incompetence. Helpless for 1d6 rounds.	this does not generate attack of oportunity.",
} elseif ($roll <= 99) {
  "Critical hit self, knocked unconscious 1d6 minutes	this generates attack of oportunity",
} elseif ($roll <= 100) {
  "Critical hit self, knocked unconscious 1d6 minutes and your weapon takes 50% of it's base HP as damage, bypassing hardness.	this generates attack of oportunity",
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Books </title>
  </head>
  <body>
    <h2> <b> Critical Failures </b> </h2>
    <main>
      <b><?=$fail?></b>.<br>
    </main>
  </body>
</html>
