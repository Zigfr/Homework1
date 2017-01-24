<?php
    if(isset($_POST['info']) && !empty($_POST['info']) && trim($_POST['info'] != ''))
    {
        $info = $_POST['info'];
        include __DIR__ . '/../models/model_1.php';
        header('location: ../news.php');
        exit();
    }else{
        header('location: ../news.php');
        exit();
    }

?>

