<?php
$nameUsers = ["Oleg", "Anton", "Alena", "Mark", "Andrei"];

$jsonArray = json_encode($nameUsers);

file_put_contents("users.json", $jsonArray );



