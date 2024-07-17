<?php
// Multidimensional Associative arrays
$person1=[
    "firstName"=>"person1",
    "lastName"=>"Gates1",
    "age"=>"65",
    "gender"=>"male",
    "email"=>"gates1@gmail.com",
    "phone"=>"0123456789",
];

$person2=[
    "firstName"=>"person2",
    "lastName"=>"Gates2",
    "age"=>"65",
    "gender"=>"male",
    "email"=>"gates1@gmail.com",
    "phone"=>"0123456789",
];

$person3=[
    "firstName"=>"person3",
    "lastName"=>"Gates3",
    "age"=>"65",
    "gender"=>"male",
    "email"=>"gates1@gmail.com",
    "phone"=>"0123456789",
];


$All_Person=[$person1,$person2,$person3];
print_r($All_Person[2]['lastName']);
