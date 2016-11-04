<?php 

	include("ParentClass.php");
	include("ChildClass.php");
	
	$myFirstFighter = new ParentClass("X-Wing", "Red");
	$fleet1 = new ChildClass("A-Wing","Black");
	$fleet2 = new ChildClass("Y-Wing","Green");
	$fleet3 = new ChildClass("TIE-Interceptor","Gold");
	$fleet4 = new ChildClass("TIE-Bomber","Yellow");
	$fleet5 = new ChildClass("B-Wing","White");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="CSS/assignment3.css">
</head>
<body>
  <section id="intro">
    Last year I decided to purchase my very first starfighter, so I purchased an X-Wing. You should check out its stats:
  </section>
  <?= $myFirstFighter; ?>
  <section class="myFleet">
    But then I wanted to trade it in for a different starfighter, so I talked to my friend who owns a used fighter dealer-ship. He has an A-Wing:
  </section>
  <?= $fleet1; ?>
  <br><br>
  <section class="myFleet">
    a Y-Wing: 
  </section>
  <?= $fleet2; ?>
  <br><br>
  <section class="myFleet">
    a B-Wing:
  </section>
  <?= $fleet5; ?>
  <br><br>
  <section class="myFleet">
    a TIE-Interceptor:
  </section>
  <?= $fleet3; ?>
  <br><br>
  <section class="myFleet">
    and a TIE-Bomber:
  </section>
  <?= $fleet4; ?>
  <br><br>
  <section class="myFleet">
    I really liked the design of the both the B-Wing and the TIE-Interceptor, but I couldn't afford the B-Wing so I went with the TIE-Interceptor, however, I did have enough money to make a few upgrades. The first thing I did was replace the shield system and reinforce the hull with better material. I also wanted to paint it Black, so I did.
  </section>
  <?= $fleet3->changeDurability(6); $fleet3->changeColor("Black"); ?>
  <?= $fleet3; ?>
  <br><br>
  <section class="myFleet">
    This reduced the manuverability a bit, so while I was at it I also upgraded the laser cannons and added some proton torpedo tubes.
  </section>
  <?= $fleet3->changeManuverability(7); $fleet3->changeDamage(12); ?>
  <?= $fleet3; ?>
</body>
</html>