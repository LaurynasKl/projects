<?php

namespace App\DB;

use App\DB\DataBase;
use PDO;

class MariaDB implements DataBase
{

    private $bankName, $pdo;

    public function __construct($bankName)
    {
        $host = '127.0.0.1';
        $db   = 'bank_u4';
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
        $this->bankName = $bankName;
    }



    public function create(object $userData): int
    {
        $sql = "
            INSERT INTO {$this->bankName} (id, name, surname, code, account, money)
            VALUES (?, ?, ?, ?, ?, ?)
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$userData->id, $userData->name, $userData->surname, $userData->code, $userData->account, $userData->money]);
        return $this->pdo->lastInsertId();
    }

    public function update(int $userId, object $userData): bool
    {
        $sql = "
            SELECT money
            FROM {$this->bankName} 
            WHERE id = ?
            
            UPDATE {$this->bankName} 
            SET money = ?
        ";
        $currentMoney = $userData->money;
        $newMoney = $currentMoney + $userData->money;

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$newMoney,$userId]);
    }

    // public function updateMinus(int $userId, object $userData): bool
    // {
    // }

    public function delete(int $userId): bool
    {
        $sql = "
        DELETE FROM {$this->bankName}
        WHERE id = ?
    ";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$userId]);
    }

    public function show(int $userId): object
    {
        $sql = "
            SELECT *
            FROM {$this->bankName}
            WHERE id = ?
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$userId]);
        return $stmt->fetch();
    }

    public function showAll(): array
    {
        $sql = "
            SELECT *
            FROM {$this->bankName}
    ";

        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll();
    }
}
