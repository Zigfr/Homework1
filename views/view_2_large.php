<?php

foreach($sth as $index => $new)
{
    if($index == $id-1)
    {
        $news = $new['text'];
        echo $news;
    }
}