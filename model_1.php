<?php
    include __DIR__ .'/autoload.php';



    
    $dat = new DB();
    $sql1 = 'INSERT INTO `mainnew` (`text`, `time_now`) VALUES (:var1, :var2)';
    $times = time();
    $note2 = [':var1' => $info, ':var2' => $times];
    $sth = $dat->query($sql1, $note2);



?>