<?php
$a = 'quest';
$b = 'sky';

$final = <<< HEREDOC
"my name is {$b}"
HEREDOC;
$c = `dir`;
$d = $a . $b;
var_dump($final);
var_dump($c);