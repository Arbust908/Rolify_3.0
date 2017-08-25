<?php require_once("math.php"); ?>

<?php
//Table 7–56: Things Found on the Roadside
$foundD00 = [
  "an abandoned cartwheel",
  "a holy man meditating at a roadside shrine",
  "a newly constructed traveler’s waystation",
  "a caravan of gypsies waiting for a birth",
  "a statue of a two-headed goat",
  "a covered well",
  "a squashed hedgehog",
  "a hermit’s cave",
  "a teahouse",
  "an abandoned barn",
  "the remnants of a campfire",
  "a dead sheep",
  "an old road, now overgrown and abandoned",
  "a footpath leading away",
  "a tumbled-down rock wall",
  "a tree adorned in prayer flags",
  "an oak tree split by lightning",
  "the ruins of a croft",
  "a standing stone",
  "a tiny roadside tavern",
  "an old blind woman begging for alms",
  "a coin",
  "signs of a fight",
  "an abandoned cartwheel",
  "a holy man meditating at a roadside shrine",
  "a newly constructed traveler’s waystation",
  "a caravan of gypsies waiting for a birth",
  "a statue of a two-headed goat",
  "a covered well",
  "a squashed hedgehog",
  "a hermit’s cave",
  "a teahouse",
  "an abandoned barn",
  "the remnants of a campfire",
  "a dead sheep",
  "an old road, now overgrown and abandoned",
  "a footpath leading away",
  "a tumbled-down rock wall",
  "a tree adorned in prayer flags",
  "an oak tree split by lightning",
  "the ruins of a croft",
  "a standing stone",
  "a tiny roadside tavern",
  "an old blind woman begging for alms",
  "a coin",
  "signs of a fight",
  "an abandoned cartwheel",
  "a holy man meditating at a roadside shrine",
  "a newly constructed traveler’s waystation",
  "a caravan of gypsies waiting for a birth",
  "a statue of a two-headed goat",
  "a covered well",
  "a squashed hedgehog",
  "a hermit’s cave",
  "a teahouse",
  "an abandoned barn",
  "the remnants of a campfire",
  "a dead sheep",
  "an old road, now overgrown and abandoned",
  "a footpath leading away",
  "a tumbled-down rock wall",
  "a tree adorned in prayer flags",
  "an oak tree split by lightning",
  "the ruins of a croft",
  "a standing stone",
  "a tiny roadside tavern",
  "an old blind woman begging for alms",
  "a coin",
  "signs of a fight",
  "a totem depicting foxes and wolves chasing owls",
  "a boarded-up mineshaft",
  "an overgrown graveyard",
  "a broken, rusty halberd",
  "a scarecrow",
  "three dead foxes strung up in a tree",
  "a mangy old dog",
  "the carcass of a giant, picked clean by vultures",
  "an abandoned child",
  "a gallows with a dead victim",
  "a coaching inn",
  "the corpse of a criminal in a hanging cage",
  "a road repair gang",
  "a pile of flagstones waiting to be laid",
  "a milestone",
  "a totem depicting foxes and wolves chasing owls",
  "a boarded-up mineshaft",
  "an overgrown graveyard",
  "a broken, rusty halberd",
  "a scarecrow",
  "three dead foxes strung up in a tree",
  "a mangy old dog",
  "the carcass of a giant, picked clean by vultures",
  "an abandoned child",
  "a gallows with a dead victim",
  "a coaching inn",
  "the corpse of a criminal in a hanging cage",
  "a road repair gang",
  "a pile of flagstones waiting to be laid",
  "a milestone",
  "a huge footprint"
  ];
   $found = Roller($foundD00);

//Table 7–57: Types of Weather
//[
  // (Balmy)
  // (Blizzard)
  // (Bluster)
  // (Breeze)
  // (Calm)
  // (Chill)
  // (Cool)
  // (Cyclone)
  // (Damp)
  // (Deluge)
  // (Dew)
  // (Downpour)
  // (Draft)
  // (Drizzle)
  // (Drought)
  // (Dust)
  // (Fair)
  // (Fog)
  // (Freezing rain
  // (Frigid)
  // (Frost)
  // (Gale)
  // (Hail)
  // (Haze)
  // (Heat wave
  // (Humid)
  // (Hurricane)
  // (Mild)
  // (Mist)
  // (Monsoon)
  // (Muggy)
  // (Overcast)
  // (Pea)
  // (Rain)
  // (Rainfall)
  // (Sleet)
  // (Smog)
  // (Snow)
  // (Snowstorm)
  // (Squall)
  // (Storm)
  // (Sunny)
  // (Temperate)
  // (Thunderstorm)
  // (Tornado)
  // (Tropical storm
  // (Typhoon)
  // (Warm)
  // (Whirlwind)
  // (Whiteout)
  //]
$weatherD00 = [
  " mild and pleasant weather",
  " dense snowstorm",
  " strong wind",
  " light wind",
  " light wind",
  " unpleasantly cold",
  " moderately cold",
  " violent, destructive storm",
  " moisture in the air",
  " sudden heavy rainfall",
  " condensation forming just above the ground",
  " heavy rainfall",
  " current of air",
  " fine rain",
  " continuous dry weather",
  " severe windstorm lifting dust and sand",
  " pleasant weather",
  " thick mist or cloud",
  " rain that freezes when it lands",
  "n intensely cold",
  " frozen dew",
  " strong wind",
  " pellets of frozen rain",
  " condensing ground vapor caused by heat",
  " prolonged period of warm weather",
  " warm, moist air",
  " windstorm moving around a central point",
  " moderately warm weather without rain",
  " water vapor in the air",
  " heavy, prolonged seasonal rain",
  " damp, warm, oppressive weather",
  " heavy cloud cover",
  " soup: thick yellow fog",
  " shower: short period of rainfall",
  " prolonged period of rain",
  "n ice pellets mixed with rain or snow",
  " smoky fog",
  " short period of light snow",
  " prolonged heavy snow",
  " sudden, localized storm",
  " violet wind and rain",
  " bright, clear weather",
  " without extremes of warm or cold",
  " storm with thunder and lightning",
  " destructive, rotating windstorm",
  " cyclonic storm from the tropics",
  " violent cyclonic storm",
  " moderately hot temperature",
  " violent wind moving in a circular motion",
  " heavy snow, causing visibility problems"
  ];
   $weather = Roller($weatherD00);

//Table 7–58: Scenic Spots
$scenicD00 = [
  "a tumbling waterfall cascades into a deep pond",
  "a bent willow tree provides shelter",
  "a ruined bridge carved with dancing angels",
  "a quaint wishing-well",
  "a limestone gorge filled with ancient trees",
  "a lone tree upon a moor",
  "mighty stones have weathered into incredible shapes",
  "carved millstones lie abandoned in a flower meadow",
  "a stone outcropping that looks like a dragon",
  "the ruins of a once-majestic manor house",
  "a crumbling hillside",
  "a farmed valley with lush grass",
  "the still waters of a pool reflect an ancient dolmen",
  "a natural tower of broken, weathered stone",
  "sunlight suddenly strikes the purple heather",
  "the sun picks out the hillside in a blaze of color",
  "a ruined croft with the chimney still intact",
  "a crumbling gatepost leading to a ruined croft",
  "a cobbled track worn smooth with age",
  "a standing stone in a hollow",
  "curious weathered stones tumble down the hillside",
  "an old ruined chapel wreathed in ivy",
  "a shallow cave with a moss-covered floor",
  "a stone trough filled with flowers, overlooking a lake",
  "an old stone bridge with a small religious shrine",
  "a cairn with a wide panorama of the countryside",
  "a weathered flagstone path leads to a rustic barn",
  "a ruined tower surrounded by heather",
  "ancient trees gather on a small knoll",
  "a fine bridge over a cool swimming hole",
  "a stone circle in a forest clearing",
  "an empty old burial cairn on the edge of a hillside",
  "a forest clearing bathed in sunshine",
  "an abandoned house by a river",
  "a ruined mill surrounded by cascading waterfalls",
  "a mighty oak towers over the path",
  "a village pond with ducks and dragonflies",
  "a holly bush with a ruined house within",
  "a statue of a man with a cloak of flowers",
  "a meadow filled with buttercups",
  "an old graveyard at the foot of a cliff",
  "a flagged ford across a river",
  "an outcrop of rock that looks like an owl",
  "three intertwined apple trees",
  "a curious rocky tor rising from a small copse of trees",
  "a pond clogged with watercress and lilies",
  "a green lane surrounded by ancient sycamore trees",
  "a natural seat under a cliff, draped with kudzu",
  "bright red berries swing from the arch of a tree",
  "a hollow holds three graves, surrounded by ivy"
  ];
   $scenic = Roller($scenicD00);

//Table 7–59: Terrain Types
$terrainD00 = [
  "an Antarctic region (southerly area of extreme cold)",
  "an Arctic region (northerly area of intense cold)",
  "a Basin (tract of land drained by a river)",
  "a Beach (shoreline along a body of water)",
  "a Bog (wet ground made up of decayed vegetation)",
  "a Butte (isolated hill with steep sides)",
  "a Caldera (cauldron-like bowl caused by a volcano)",
  "a Canyon (deep gorge or ravine with steep sides)",
  "a Cave (small subterranean opening)",
  "a Cavern (large subterranean chamber)",
  "a Cliff (steep-sided rock formation)",
  "a Coast (tidal shore)",
  "a Crater lake (lake formed in crater of a volcano)",
  "a Desert (arid, barren land)",
  "a Dunes (hills of sand in deserts)",
  "a Farmland (agricultural land, often enclosed)",
  "a Fen (low marshy or flooded area of land)",
  "a Forest, coniferous (chiefly evergreen forest)",
  "a Forest, deciduous (forest of trees that shed leaves)",
  "a Glacier (slow-moving mass or river of ice)",
  "Hills (landforms that rise above the surrounding land)",
  "an Icecap (permanent covering of thick ice)",
  "an Isthmus (narrow strip of land connecting two areas)",
  "a Jungle (land overgrown with vegetation)",
  "a Knoll (small natural hill)",
  "a Lake (large, inland body of water)",
  "Limestone upland (exposed limestone outcrop on hill)",
  "a Meadow (land that periodically floods)",
  "a Mesa (elevated area of flat land)",
  "a Mire (swampy ground)",
  "a Moors (upland landmass usually covered in heather)",
  "a Mountain (prominent landmass of exposed rock)",
  "a high Mountain (mountain with permanent glaciers)",
  "a Mountain pass (saddle point between mountains)",
  "an Ocean (large body of water)",
  "an Oxbow lake (U-shaped body of water)",
  "a Peninsula (point of land almost surrounded by water)",
  "Plains (level tract of land)",
  "a Plateau (elevated tract of relatively flat land)",
  "a Ravine (small valley)",
  "a Ridge (a continuous elevated crest)",
  "a River (large watercourse)",
  "a Scree (broken rock fragments at a mountain’s base)",
  "a Stream (small watercourse)",
  "a Subterranean path (below the surface, usually caverns)",
  "a Swamp (wet, spongy ground)",
  "a Tundra (vast, treeless region in arctic or antarctic area)",
  "a Valley (long depression or hollow between hills)",
  "a Volcanic region (region with volcanic activity)",
  "Wetlands (wet, soggy, seasonally waterlogged area)"
  ];
   $terrain = Roller($terrainD00);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Roadtrip | Pathfinder | TE</title>
  </head>
  <body>
    <h2>  </h2>
    <p>
      While traveling through <b><?=$terrain?></b> with a<b><?=$weather?></b>, you find <b><?=$found?></b> while gazeing <b><?=$scenic?></b>.<br>
    </p><br>
  </body>
</html>
