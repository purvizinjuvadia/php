<?php

function booksByAuthorYear($tempAuthorName, $tempYear = 1910)
{
 echo $tempYear;
 echo "\n";
 echo $tempAuthorName;
 echo "\n";

}

function gerAuthor()
{
     return "Charles Dickens";

}
$year = 1920;
$authorName = gerAuthor();

booksByAuthorYear($authorName, $year);
//booksByAuthorYear($authorName);

 ?>
