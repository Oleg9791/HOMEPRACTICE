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
        $table = $this->read();
        $table[$id] = $row;
        $this->save($table);
        return $this;


    }

    public function delete(int $ed): static
    {
        $table = $this->read();
        unset($table[$ed]);
        $this->save($table);
        return $this;

    }


    public function save(array $tab): void
    {
        file_put_contents($this->fileName, json_encode($tab, JSON_FORCE_OBJECT));
    }

}