<?php


echo '<h2> This is a newest news </h2>';
$i = 1;
foreach($sth as $index => $new)
{
    $news = $new['text'];
    $name = cut_short($news);
    $name = $name.'...';
    echo '<ul><li><a href="/NewHomework1/controllers/controller_3.php?id='.$i.'">'.$name.'</a></li></ul>';
    $i++;
}

?>
<br />
<br />
<a href="form.php"> Add news you might here </a>
