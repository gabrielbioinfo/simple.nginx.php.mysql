<?php

namespace App;

class User{

    static function getUser(){

        echo "<pre>";
        var_dump("App\User::getUser");
        echo "</pre>";

        $host = 'mysql';
        $db   = 'moodle';
        $user = 'root';
        $pass = 'root';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $PDO = new \PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

        $stmt = $PDO->query('SELECT now() as name');
        while ($row = $stmt->fetch())
        {
            Lib\Util::dumpObject($row['name']);
        }
        
    }

}


?>