<?php
// How to loop over Associative arrays
$bilGates=[
    "firstName"=>"Bill",
    "lastName"=>"Gates",
    "age"=>"65",
    "gender"=>"male",
    "email"=>"gates@gmail.com",
    "phone"=>"0123456789",
];
foreach ($bilGates as $key=>$value){
    echo $key.":".$value."<br>";
}