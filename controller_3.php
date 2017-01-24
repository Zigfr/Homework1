<?php
include 'model_2.php';
include 'functions.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    include 'views/view_2_large.php';
    
}