<?php require_once("math.php"); ?>

<?php
//Table 7–16: Wild Magic Effects
$roll = rand(1,100);
$effect = "";
if ($roll <= 19) {
  $effect = "The spell rebounds on its caster with normal effect. If the spell cannot affect the caster, it simply fails.";
} elseif ($roll <= 23) {
  $effect = "A circular pit 15 feet wide opens under the caster’s feet; it is 10 feet deep per level of the caster.";
} elseif ($roll <= 27) {
  $effect = "The spell fails, but the target or targets of the spell are pelted with a rain of small objects (anything from flowers to rotten fruit), which disappear upon striking. The barrage continues for 1 round. During this time the targets are blinded and must make concentration checks (DC 15 + spell level) to cast spells.";
} elseif ($roll <= 31) {
  $effect = "The spell affects a random target or area. Randomly choose a different target from among those in range of the spell or center the spell at a random place within range of the spell. To generate direction randomly, roll 1d8 and count clockwise around the compass, starting with south. To generate range randomly, roll 3d6. Multiply the result by 5 feet for close-range spells, 20 feet for medium-range spells, or 80 feet for long-range spells.";
} elseif ($roll <= 35) {
  $effect = "The spell functions normally, but any material components are not consumed. The spell is not expended from the caster’s mind (the spell slot or prepared spell can be used again). Similarly, an item does not lose charges, and the effect does not count against an item’s or spell-like ability’s use limit.";
} elseif ($roll <= 39) {
  $effect = "The spell does not function. Instead, everyone (friend or foe) within 30 feet of the caster receives the effect of a heal spell.";
} elseif ($roll <= 43) {
  $effect = "The spell does not function. Instead, a deeper darkness effect and a silence effect cover a 30-foot radius around the caster for 2d4 rounds.";
} elseif ($roll <= 47) {
  $effect = "The spell does not function. Instead, a reverse gravity effect covers a 30-foot radius around the caster for 1 round.";
} elseif ($roll <= 51) {
  $effect = "The spell functions, but shimmering colors swirl around the caster for 1d4 rounds. Treat this as a glitterdust effect with a save DC of 10 + the level of the spell that generated this result.";
} elseif ($roll <= 59) {
  $effect = "Nothing happens. The spell does not function. Any material components are used up. The spell or spell slot is used up, an item loses charges, and the effect counts against an item’s or spell-like ability’s use limit.";
} elseif ($roll <= 71) {
  $effect = "Nothing happens. The spell does not function. Any material components are not consumed. The spell is not expended from the caster’s mind (a spell slot or prepared spell can be used again). An item does not lose charges, and the effect does not count against an item’s or spell-like ability’s use limit.";
} elseif ($roll <= 98) {
  $effect = "The spell functions normally.";
} else {
  $effect = "The spell functions strongly. Saving throws against the spell incur a –2 penalty. The spell has the maximum possible effect, as if it were cast with the Maximize Spell feat. If the spell is already maximized with the feat, there is no further effect.";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Wild Magic | Pathfinder | TE</title>
  </head>
  <body>
    <h2>Wild Magic Result</h2>
    <h4><?=$effect?></h4>
  </body>
</html>
