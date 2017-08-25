<?php require_once("math.php"); ?>
<?php
//Personality Traits
//d8 Personality Trait
$personalityD8 = [
  "I don’t run from evil. Evil runs from me",
  "I like to read and memorize poetry. It keeps me calm and brings me fleeting moments of happiness",
  "I spend money freely and live life to the fullest, knowing that tomorrow I might die",
  "I live for the thrill of the hunt",
  "I don’t talk about the thing that torments me. I’d rather not burden others with my curse",
  "I expect danger around every corner",
  "I refuse to become a victim, and I will not allow others to be victimized",
  "I put no trust in divine beings",
  ];
   $personality = Roller($personalityD8);
//Ideals
//d6 Ideal
$idealD6 = [
  "I try to help those in need, no matter what the personal cost. (Good)",
  "I’ll stop the spirits that haunt me or die trying. (Any)",
  "I kill monsters to make the world a safer place, and to exorcise my own demons. (Good)",
  "I have a dark calling that puts me above the law. (Chaotic)",
  "I like to know my enemy’s capabilities and weaknesses before rushing into battle. (Lawful)",
  "I’m a monster that destroys other monsters, and anything else that gets in my way. (Evil)",
  ];
   $ideal = Roller($idealD6);
//Harrowing Event
//d10 Event
$eventD10 = [
  "A monster that slaughtered dozens of innocent people spared your life, and you don’t know why",
  "You were born under a dark star. You can feel it watching you, coldly and distantly. Sometimes it beckons you in the dead of night",
  "An apparition that has haunted your family for generations now haunts you. You don’t know what it wants, and it won’t leave you alone",
  "Your family has a history of practicing the dark arts. You dabbled once and felt something horrible clutch at your soul, whereupon you fled in terror",
  "An oni took your sibling one cold, dark night, and you were unable to stop it",
  "You were cursed with lycanthropy and later cured. You are now haunted by the innocents you slaughtered",
  "A hag kidnapped and raised you. You escaped, but the hag still has a magical hold over you and fills your mind with evil thoughts",
  "You opened an eldritch tome and saw things unfit for a sane mind. You burned the book, but its words and images are burned into your psyche",
  "A fiend possessed you as a child. You were locked away but escaped. The fiend is still inside you, but now you try to keep it locked away",
  "You did terrible things to avenge the murder of someone you loved. You became a monster, and it haunts your waking dreams",
  ];
   $event = Roller($eventD10);
//Bonds
//d6 Bond
$bondD6 = [
  "I keep my thoughts and discoveries in a journal. My journal is my legacy",
  "I would sacrifice my life and my soul to protect the innocent",
  "My torment drove away the person I love. I strive to win back the love I’ve lost",
  "A terrible guilt consumes me. I hope that I can find redemption through my actions",
  "There’s evil in me, I can feel it. It must never be set free",
  "I have a child to protect. I must make the world a safer place for him (or her)",
  ];
   $bond = Roller($bondD6);
//Flaws
//d6 Flaw
$flawD6 = [
  "I have certain rituals that I must follow every day. I can never break them",
  "I assume the worst in people",
  "I feel no compassion for the dead. They’re the lucky ones",
  "I have an addiction",
  "I am a purveyor of doom and gloom who lives in a world without hope",
  "I talk to spirits that no one else can see",
  ];
   $flaw = Roller($flawD6);
//Gothic Trinkets
//d100 Trinket
$trinketD00 = [
  "A picture you drew as a child of your imaginary friend",
  "A lock that opens when blood is dripped in its keyhole",
  "Clothes stolen from a scarecrow",
  "A spinning top carved with four faces: happy, sad, wrathful, and dead",
  "The necklace of a sibling who died on the day you were born",
  "A wig from someone executed by beheading",
  "The unopened letter to you from your dying father",
  "A pocket watch that runs backward for an hour every midnight",
  "A winter coat stolen from a dying soldier",
  "A bottle of invisible ink that can only be read at sunset",
  "A wineskin that refills when interred with a dead person for a night",
  "A set of silverware used by a king for his last meal",
  "A spyglass that always shows the world suffering a terrible storm",
  "A cameo with the profile’s face scratched away",
  "A lantern with a black candle that never runs out and that burns with green flame",
  "A teacup from a child’s tea set, stained with blood",
  "A little black book that records your dreams, and yours alone, when you sleep",
  "A necklace formed of the interlinked holy symbols of a dozen deities",
  "A hangman’s noose that feels heavier than it should",
  "A birdcage into which small birds fly but once inside never eat or leave",
  "A lepidopterist’s box filled dead moths with skulllike patterns on their wings",
  "A jar of pickled ghouls’ tongues",
  "The wooden hand of a notorious pirate",
  "A urn with the ashes of a dead relative",
  "A hand mirror backed with a bronze depiction of a medusa",
  "Pallid leather gloves crafted with ivory fingernails",
  "Dice made from the knuckles of a notorious charlatan",
  "A ring of keys for forgotten locks",
  "Nails from the coffin of a murderer",
  "A key to the family crypt",
  "An bouquet of funerary flowers that always looks and smells fresh",
  "A switch used to discipline you as a child",
  "A music box that plays by itself whenever someone holding it dances",
  "A walking cane with an iron ferule that strikes sparks on stone",
  "A flag from a ship lost at sea",
  "Porcelain doll’s head that always seems to be looking at you",
  "A wolf’s head wrought in silver that is also a whistle.",
  "A small mirror that shows a much older version of the viewer",
  "Small, worn book of children’s nursery rhymes.",
  "A mummified raven claw",
  "A broken pendent of a silver dragon that’s always cold to the touch",
  "A small locked box that quietly hums a lovely melody at night but you always forget it in the morning",
  "An inkwell that makes one a little nauseous when staring at it",
  "An old little doll made from a dark, dense wood and missing a hand and a foot",
  "A black executioner’s hood",
  "A pouch made of flesh, with a sinew drawstring",
  "A tiny spool of black thread that never runs out",
  "A tiny clockwork figurine of a dancer that’s missing a gear and doesn’t work",
  "A black wooden pipe that creates puffs of smoke that look like skulls",
  "A vial of perfume, the scent of which only certain creatures can detect",
  ];
   $trinket = Roller($trinketD00);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Restless Undead | TE</title>
  </head>
  <body>
    <h2> Restless Undead </h2>
    <div class="">
      <h3>Haunted One</h3><br>
      <p>You are haunted by something so terrible that you dare not speak of it. You’ve tried to bury it and flee from it, to no avail. This thing that haunts you can’t be slain with a sword or banished with a spell. It might come to you as a shadow on the wall, a bloodcurdling nightmare, a memory that refuses to die, or a demonic whisper in the dark. The burden has taken its toll, isolating you from others and making you question your sanity. You must find a way to overcome it before it destroys you.</p>
      <hr><br>
      <p><b>Skill Proficiencies:</b> Choose two from among Arcana, Investigation, Religion, and Survival
      Languages: Choose one exotic language <i>(Abyssal, Celestial, Deep Speech, Draconic, Infernal, Primordial, Sylvan, or Undercommon)</i></p><br>
      <hr><br>
      <p><b>Equipment:</b> A monster hunter’s pack (see the sidebar), a set of common clothes, and one trinket of special significance (choose one or roll on the Gothic Trinkets table after this background).</p><br>
      <hr><br>
      <h4><b>Feature: Heart of Darkness</b></h4><br>
      <p>Those who look into your eyes can see that you have faced unimaginable horror and that you are no stranger to darkness. Though they might fear you, commoners will extend you every courtesy and do their utmost to help you. Unless you have shown yourself to be a danger to them, they will even take up arms to fight alongside you, should you find yourself facing an enemy alone.</p><br>
      <hr><br>
      <h4><b>Harrowing Event</b></h4><br>
      <p>Prior to becoming an adventurer, your path in life was defined by one dark moment, one fateful decision, or one tragedy. Now you feel a darkness threatening to consume you, and you fear there may be no hope of escape.
      Choose a harrowing event that haunts you, or roll one on the Harrowing Events table.</p><br>
      <hr><br>
      <h4><b>Suggested Characteristics</b></h4><br>
      <p>You have learned to live with the terror that haunts you. You are a survivor, who can be very protective of those who bring light into your darkened life.</p><br>
      <hr><br>
      <hr><br>
      <h4>Personality Traits</h4>
      <b><?=$personality?></b><br>
      <h4>Ideals</h4>
      <b><?=$ideal?></b><br>
      <h4>Harrowing Event</h4>
      <b><?=$event?></b><br>
      <h4>Bonds</h4>
      <b><?=$bond?></b><br>
      <h4>Flaws</h4>
      <b><?=$flaw?></b><br>
      <h4>Gothic Trinkets</h4>
      <b><?=$trinket?></b><br>
    </div>
    </p><br>
  </body>
</html>
