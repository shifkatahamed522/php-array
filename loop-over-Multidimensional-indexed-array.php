<?php
//How to loop over Multidimensional indexed arrays
$fruits1=["apple1", "banana1", "cherry1"];
$fruits2=["apple2", "banana2", "cherry2"];
$fruits3=["apple3", "banana3", "cherry3"];
$fruits4=["apple4", "banana4", "cherry4"];
$All_fruits=[$fruits1, $fruits2, $fruits3, $fruits4];

foreach ($All_fruits as $ParentItem){
    foreach ($ParentItem as $ChildItem){
        echo $ChildItem."<br/>";
    }
}