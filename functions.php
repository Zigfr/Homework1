<?php

function get_news($sth)
{
    foreach($sth as $index => $new)
    {
        echo $new['text'];
        echo '<br />';
        
    }
}