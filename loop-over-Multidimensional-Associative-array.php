<?php
// How to loop over Multidimensional Associative arrays
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

$All_Person=[
    'one'=>$person1,
    'two'=>$person2,
    'three'=>$person3
];


foreach ($All_Person as $ParentKey=>$ParentValue) {

    foreach ($ParentValue as $ChildKey=>$ChildValue) {
            echo $ChildKey.": ".$ChildValue."<br>";
    }
}
