<?php


namespace App;


class JsonTable
{
    protected string $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    public function read(): array
    {
        if (file_exists($this->fileName)) {
            return json_decode(file_get_contents($this->fileName), true);
        } else {
            return [];
        }
    }

    public function insert(array $row): static
    {
        $table = $this->read();
        $table[] = $row;
        $this->save($table);
        return $this;
    }

    public function update(int $id, array $row): static
    {
        $tab = $this->read();
        $tab[$id] = $row;
        $this->save($tab);
        return $this;
    }

    public function delete(int $id): static
    {
        $arr = $this->read();
        unset($arr[$id]);
        $this->save($arr);
        return $this;

    }

    public function save(array $arr)
    {
        file_put_contents($this->fileName, json_encode($arr, JSON_FORCE_OBJECT));
    }
}