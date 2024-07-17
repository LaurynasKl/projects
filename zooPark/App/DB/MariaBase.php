<?php

namespace App\DB;

use App\DB\DataBase;
use PDO;

class MariaBase implements DataBase {

    private $pdo, $name;


    public function __construct($name)
    {
        $host = '127.0.0.1';
        $db   = 'zoo_park';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';
        
        
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $this->pdo = new PDO($dsn, $user, $pass, $options);
        $this->name = $name;
    }



    public function create(object $userData): int
    {
        $sql = "
        INSERT INTO {$this->name} (animalName, howMany)
        VALUES (?, ?) 
    ";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$userData->animalName, $userData->howMany]);
    return $this->pdo->lastInsertId();
    
    }

    public function update(int $userId, object $userData): bool
    {
        $sql = "
    UPDATE {$this->name}
    SET animalName = ?, howMany = ?
    WHERE id = ?;
    ";
    $stmt = $this->pdo->prepare($sql);
    return $stmt->execute([
        $userData->animalName,
        $userData->howMany,
        $userId,
    ]);


    }

    public function delete(int $userId): bool
    {
        $sql = "
    DELETE FROM {$this->name} 
    WHERE id = ?; 
    ";

    $stmt = $this->pdo->prepare($sql);
    return $stmt->execute([$userId]);

    
    }

    public function show(int $userId): object
    {
        $sql = "
    SELECT id, animalName, howMany
    FROM {$this->name};
    ";
    
    $stmt = $this->pdo->query($sql);
    return $stmt->fetch();

    }

    public function showAll(): array
    {
        $sql = "
    SELECT id, animalName, howMany
    FROM {$this->name};
    ";
    
    $stmt = $this->pdo->query($sql);
    return $stmt->fetchAll();
    }
}