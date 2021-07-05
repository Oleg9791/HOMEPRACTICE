<?php


namespace App;


class TxtTable
{
    protected string $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    public function read(): array
    {
        if (file_exists($this->fileName)) {
            $rows = explode("\n", file_get_contents($this->fileName));
            $elementBuf = [];
            foreach ($rows as $row) {
                $rowBuf = explode(";", $row);
                for ($i = 1; $i < count($rowBuf); $i++) {
                    $buf = explode(":", $rowBuf[$i]);
                    $elementBuf[$rowBuf[0]][$buf[0]] = $buf[1];
                }
            }
            return $elementBuf;
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

    public function save(array $table): void
    {
        $txt = "";
        foreach ($table as $key => $value) {
            $txt .= "$key";
            foreach ($value as $id => $item) {
                $txt .= ";$id:$item";

            }
            $txt .= "\n";

        }
        file_put_contents($this->fileName, $txt);
    }
}