<?php require_once("math.php"); ?>
<?php
//FIRST NAME, PT. I
$name1D00 = [
  "Ad","Al","Am","Ar","Aud","Az","Ba","Bak","Bar","Bi","Bo","Bom","Bro","Brue","Bur","Da","Dag","Dar","Del","Die","Dis","Do","Du","Dwa","Eb","Ed","Ein","El","Fa","Fi","Fin","Flin","Flo","Fra","Fre","Fro","Ful","Fun","Gam","Gar","Gehr","Gim","Glo","Gor","Grim","Gro","Gun","Gur","Har","Hel","Hil","Hli","Ho","Hor","Ib","Il","Kar","Kath","Khi","Ki","Kil","Kri","Lif","Lo","Mar","Mi","Mor","Na","Nar","No","Nor","O","Or","Os","Ran","Ris","Ru","San","Tak","Tar","Tel","Ten","Tha","Theo","Thor","Thora","Thra","Thro","Tor","Tra","Trau","Ulf","Veit","Vik","Vil","Vin","Vis","Von","Vul","Wulf",];
//FIRST NAME,. II
$name2D00 = [
  "ak","an","ar","bal","bek","ber","berk","bon","bun","bur","char","da","dain","dak","dal","dan","dar","dek","den","dik","din","dis","dor","drak","dred","dro","dryk","dryn","el","en","ern","fark","fer","fur","gar","gart","gehr","gga","ghal","gra","gran","grar","grim","grin","grod","gryn","heim","hild","him","ik","il","in","kar","ken","khar","kil","kin","kis","kus","lek","li","lin","mik","mil","mir","mor","nal","nar","ni","nor","ra","rak","ren","ri","rik","rin","rok","ron","row","runn","sen","sik","tak","tor","tra","vak","vald","var","vard","varn","vi","vig","vik","vil","viln","vin","vok","weir","wik","win",];
//CLAN NAME, PT. I
$clanName1D00 = [
  "Amber","Ashen","Bald","Battle","Black","Blue","Bold","Brass","Brave","Brawn","Bright","Bristle","Broken","Bronze","Burly","Char","Copper","Crag","Dank","Dawn","Deep","Dented","Diamond","Dour","Dun","Dusk","Ebon","Ember","Evening","Fierce","Fire","Flame","Flint","Frost","Fury","Glass","Gleam","Glimmer","Glint","Glower","Golden","Granite","Grave","Gray","Great","Green","Grim","Hale","Half","Hard","Hearty","Hind","Holy","Iron","Jade","Keen","Lead","Liege","Light","Lode","Marble","Metal","Mighty","Moon","Morning","Noble","Oaken","Opal","Pale","Quarter","Quartz","Red","Regal","Rock","Royal","Ruby","Ruddy","Rumble","Scorch","Shadow","Sharp","Shatter","Shimmer","Shining","Silver","Singe","Stark","Steel","Stone","Storm","Strong","Sun","Sunder","Surly","Swift","Thunder","Tor","Under","War","White",];
//CLAN NAME, PT. II
$clanName2D00 = [
  "anvil","arm","arrow","axe","back","bar","beard","bellow","blade","block","bluff","bolt","boot","brawler","breaker","brewer","brow","builder","carver","caster","cave","chain","chalice","chest","chisel","climber","cloak","club","crafter","crown","crystal","dagger","delver","dirk","drinker","eye","fighter","finder","fist","forge","furnace","gart","gem","globe","glow","grappler","guard","guide","hammer","hand","heim","helm","hilt","hood","horde","horn","hunter","ingot","jewel","killer","kiln","lantern","maker","mask","mason","master","mortar","nail","piper","pool","quarry","rift","ring","roamer","robe","saddle","scaler","scout","scroll","seeker","shaper","shield","singer","slayer","smith","spear","spike","spring","staff","star","striker","sword","tong","tooth","torch","totem","weaver","wielder","worker","wright",];
$fullName = Roller($name1D00) . Roller($name2D00) . " " . Roller($clanName1D00) . Roller($clanName2D00);
?>

<?php
$randColorD0 = [
  "#16a085","#2980b9","#8e44ad","#2c3e50","#d35400","#c0392b",
];
$randColor = $randColorD0[rand(0,5)];
?>

<html>
  <head>
    <meta charset="utf-8">
    <title> Dwarven Names </title>
  </head>
  <body>
    <hr><br>
    <div style="background-color:<?=$randColor?>;color:white;padding:2%;text-align: center;font-size: 3em;font-variant: small-caps;text-decoration: underline;">
      <b><?=$fullName?></b><br>
    </div>
  </body>
</html>
