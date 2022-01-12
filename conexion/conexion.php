<?php
try {
    $dbname="pockemon";
    $user="root";
    $password="";
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e){
    echo $e->getMessage();
}

//$pdo = new PDO('mysql:host=localhost;dbname=pockemon','root','');

?>
