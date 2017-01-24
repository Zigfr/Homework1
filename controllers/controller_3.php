<?php
include __DIR__ . '/../models/model_2.php';
include __DIR__ . '/../functions.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    include __DIR__ . '/../views/view_2_large.php';
    
}