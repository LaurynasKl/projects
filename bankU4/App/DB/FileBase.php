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
        $id = $this->indexData;
        $this->indexData++;

        $userData->id = $id;
        $this->fileData[] = $userData;
        return $id;
    }

    public function update(int $userId, object $userData): bool
    {
        foreach ($this->fileData as $key => $file) {
            if ($file->id == $userId) {
                if (isset($file->money)) {
                    (float)$file->money += (float)$userData->money;
                    $this->fileData[$key] = $file;
                    return true;
                }
            }
        }
        return false;
    }
    
    public function updateMinus(int $userId, object $userData): bool
    {
        foreach ($this->fileData as $key => $file) {
            if ($file->id == $userId) {
                if ($file->money >= $userData->money) {
                    if (isset($file->money)) {
                        ceil($file->money = (float)$file->money - (float)$userData->money);
                        $this->fileData[$key] = $file;
                        return true;
                    }
                    return false;
                }
            }
        }
        return false;
    }

    public function delete(int $userId): bool
    {
        foreach ($this->fileData as $key => $file) {
            if ($file->id == $userId) {
                unset($this->fileData[$key]);
                $this->fileData = array_values($this->fileData);
                return true;
            }
        }

    }

    public function show(int $userId): object
    {
        foreach ($this->fileData as $file) {
            if ($file->id == $userId) {
                return $file;
            }
        }
    }

    public function showAll(): array
    {
        return $this->fileData;
    }
}