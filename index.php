<?php

$a = 1.10;
$b = 'eeee';

// var_dump(isset ($a));
// первый масив
$arr = array(1, 'ewq', false);
// второй масив
$arr2 = [
    'age'=>30,
    'name'=>'Cawko',
    'mail' => true,
    'arr'=> [
        'a' => 1,
        'b' => '2'
    ]
    ];
// var_dump($arr);
// var_dump($arr2); 

// обьект
$obj = new stdClass;
$obj -> a = 'i am a';

var_dump($obj);