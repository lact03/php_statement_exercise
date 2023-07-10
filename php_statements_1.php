<?php 
$word1 = 'class';
$word2 = 'kodego';
$word3 = 'top';

$wordArray = array($word1, $word2, $word3);

foreach($wordArray as $item){
echo strlen($item) > 5 ? "$item is more than 5 char" : "$item is not more than 5";
echo "</br>";
};

?>