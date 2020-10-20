<?php

include_once('function.php');

$articles = getArticles();

// print_r($articles);

?>
<div class = 'articles'>
<? foreach ($articles as $id => $article):  ?>

    <div class='article'>
        <h3><?=$article['title']?></h3>
        <a href="function.php?id=<?=$id?>">Read more</a>
    </div>

   
 <?endforeach?>;


</div>

