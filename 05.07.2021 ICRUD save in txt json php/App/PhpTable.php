<?php


namespace App;


class PhpTable
{
    protected string $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    public function read(): array
    {
        if (file_exists($this->fileName)) {
            return include $this->fileName;
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
        file_put_contents($this->fileName, "<?php return " . var_export($tab, true) . ";");
    }

}