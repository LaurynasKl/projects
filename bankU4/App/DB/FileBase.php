<?php

namespace App\DB;

use App\DB\DataBase;

class FileBase implements DataBase{

    private $file, $fileData, $fileIndex, $indexData;

    public function __construct($asd)
    {
        $this->file = ROOT . 'data/' . $asd .  '.json';
        $this->fileIndex = ROOT . 'data/' . $asd .  '-index.json';

        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode([]));
            file_put_contents($this->fileIndex, json_encode(1));
        }

        $this->fileData = json_decode(file_get_contents($this->file));
        $this->indexData = json_decode(file_get_contents($this->fileIndex));
    }

    public function __destruct()
    {
        file_put_contents($this->file, json_encode($this->fileData));
        file_put_contents($this->fileIndex, json_encode($this->indexData));
    }


    public function create(object $userData): int
    {
        
    }

    // public function update(int $userId, object $userData): bool
    // {
        
    // }

    // public function delete(int $userId): bool
    // {
        
    // }

    // public function show(int $userId): object
    // {
        
    // }

    // public function showAll(): array
    // {
        
    // }
}