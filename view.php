<?php
    //datos del server
    $dbh = new PDO("mysql:host=localhost; dbname=demo", "root", "");
    //execucion de la vista
    $id = isset($_GET['id'])? $_GET['id'] : "";
    $stat = $dbh->prepare("select * from myblob2 where id = ?");
    $stat->bindParam(1, $id);//stat se executa con solo el numero de ID
    $stat->execute();
    $row = $stat->fetch();
    header('Content-Type:'.$row['mime']);       //dependiendo de que tipo de archivo sea, se muestra en el browser
    echo $row['data'];//impresion del archivo

?>