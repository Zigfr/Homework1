<?php
include __DIR__ .'/autoload.php';

$dat = new DB();
$sql2 ='SELECT * FROM `mainnew` ORDER BY `time_now` DESC';
$sth = $dat->sellect($sql2);
