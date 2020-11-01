<?php
    /*
    $fruits = [
        "apple" => "リンゴ",
        "banana" => "バナナ",
        "orange" => "オレンジ",
    ];
    var_dump($fruits);
    
    print $fruits["apple"];
    */
    var_dump( (1 == 1) && (2 == 2) );   // bool(true)
    var_dump( (1 == 1) && (1 == 2) );   // bool(false)
    var_dump( (1 == 2) || (2 == 2) );   // bool(true)
    var_dump( (1 == 2) || (3 == 2) );   // bool(false)
    var_dump( !(1 == 2) );              // bool(true)
    var_dump( !false );                 // bool(true)
?>