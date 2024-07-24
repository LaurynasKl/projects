<?php

namespace App\DB;

use App\DB\DataBase;
use PDO;

class MariaBase implements DataBase
{
    private $pdo, $tableName;

    public function __construct($tableName)
    {
        $host = '127.0.0.1';
        $db   = 'login_registration';
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
        $this->tableName = $tableName;
    }

    public function create(object $data): int
    {
    }

    public function update(int $id, object $data): bool
    {
    }

    public function delete(int $id): bool
    {
    }

    public function show(int $id): object
    {
        $sql = "
        SELECT *
        FROM {$this->tableName}
        WHERE id = ?
        ";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function showAll(): array
    {
        $sql = "
        SELECT *
        FROM {$this->tableName};
        ";

        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }
}
