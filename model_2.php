<?php
include __DIR__ .'/autoload.php';

$dat = new DB();
$sql2 ='SELECT * FROM `mainnew` ORDER BY `time_now` DESC LIMIT 10';
$sth = $dat->sellect($sql2);
