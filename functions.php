<?php

function cut_short($article)
{
    $rest = substr($article, 0, 80);
    return $rest;

}

?>