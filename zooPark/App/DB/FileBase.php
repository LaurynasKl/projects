<?php

namespace App\DB;

use App\DB\DataBase;

class FileBase implements DataBase {

    private $file, $data, $index, $fileIndex;

    public function __construct($name)
    {
        $this->file = ROOT . "data/$name.json";
        $this->fileIndex = ROOT . "data/$name-index.json";

        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode([]));
            file_put_contents($this->fileIndex, json_encode(1));
        }

        $this->data = json_decode(file_get_contents($this->file));
        $this->index = json_decode(file_get_contents($this->fileIndex));

    }

    public function __destruct()
    {
        file_put_contents($this->file, json_encode($this->data));
        file_put_contents($this->fileIndex, json_encode($this->index));
    }


    public function create(object $userData): int
    {

        $id = $this->index;
        $this->index++;
        $userData->id = $id;
        $this->data[] = $userData;
        return $id;

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