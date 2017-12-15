<?php
    // 测试PDO
    // host的值就是在docker-compose.yml里面指定的db容器的名称。
    $pdo = new PDO('mysql:host=db;dbname=app', 'root', 'Bojan');
    echo $pdo->exec("insert into user(name) values('Bojan')");