<?php

require_once "classes/FirePokemon.php";
require_once "classes/WaterPokemon.php";
require_once "classes/FlyingPokemon.php";
require_once "classes/ElectricPokemon.php";
require_once "classes/Trainer.php";

// 6 pokemon maken

$charmander = new FirePokemon("Charmander",10,80,80);
$vulpix = new FirePokemon("Vulpix",8,70,70);

$squirtle = new WaterPokemon("Squirtle",9,70,70);
$psyduck = new WaterPokemon("Psyduck",7,65,65);

$pidgey = new FlyingPokemon("Pidgey",7,60,60);

$pikachu = new ElectricPokemon("Pikachu",12,75,75);


// Trainers maken

$ash = new Trainer("Ash");
$misty = new Trainer("Misty");


// Pokemon toevoegen

$ash->addPokemon($charmander);
$ash->addPokemon($pidgey);
$ash->addPokemon($pikachu);

$misty->addPokemon($squirtle);
$misty->addPokemon($psyduck);
$misty->addPokemon($vulpix);

?>

<!DOCTYPE html>
<html lang="nl">

<head>

<meta charset="UTF-8">
<title>Pokemon Battle System</title>

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="bg-gray-900 text-white min-h-screen p-10">

<!-- Titel -->

<h1 class="text-4xl font-bold text-center mb-10">
Pokemon Battle System
</h1>


<!-- Trainers -->

<div class="grid md:grid-cols-2 gap-10 mb-12">

<div class="bg-gray-800 p-6 rounded-xl shadow-lg">

<h2 class="text-2xl font-bold mb-4 text-yellow-400">
Ash Team
</h2>

<?php
$ash->showTeam();
?>

</div>


<div class="bg-gray-800 p-6 rounded-xl shadow-lg">

<h2 class="text-2xl font-bold mb-4 text-blue-400">
Misty Team
</h2>

<?php
$misty->showTeam();
?>

</div>

</div>


<!-- Attacks -->

<div class="bg-gray-800 p-6 rounded-xl shadow-lg mb-10">

<h2 class="text-2xl font-bold mb-4 text-red-400">
Attacks
</h2>

<?php

$charmander->attack();
$squirtle->specialMove();
$pidgey->fly();

?>

</div>


<!-- Evolutions -->

<div class="bg-gray-800 p-6 rounded-xl shadow-lg">

<h2 class="text-2xl font-bold mb-4 text-green-400">
Evolutions
</h2>

<?php

$ash->evolveAll();
$misty->evolveAll();

?>

</div>


</body>
</html>