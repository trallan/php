<?php

header("Content-Type: application/json");

$users = [
    ["id" => 1,"name"=> "David"],
    ["id"=> 2,"name"=> "John"],
    ["id"=> 3,"name"=> "Eric"],
    ["id"=> 4,"name"=> "Greg"],
    ["id"=> 5,"name"=> "Bob"],
    ["id"=> 6,"name"=> "Johnny"],
    ["id"=> 7,"name"=> "Adam"],
    ["id"=> 8,"name"=> "Claes"],
];

echo json_encode($users);

?>