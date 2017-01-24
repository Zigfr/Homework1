<?php

foreach($sth as $index => $new)
{
    if($index == $id-1)
    {
        $news = $new['text'];
        echo $news;
    }
}

?>
<br />
<br />
<a href ='news.php'>Back to all news </a>
