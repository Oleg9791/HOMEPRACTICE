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
//            return $rows;

            $table = [];
            foreach ($rows as $value) {
                $rowBuf = explode(";", $value);
//            return $rowBuf;
                for ($i = 1; $i < count($rowBuf); $i++) {
                    $elementBuf = explode(":", $rowBuf[$i]);
//                return $elementBuf;
                    $table[$rowBuf[0]][$elementBuf[0]] = $elementBuf[1];
                }
            }
            return $table;
        } else {
            return [];
        }
    }

    public function delete(int $id): static
    {
        $table = $this->read();
        unset($table[$id]);
        $this->save($table);
        return $this;
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

    public function save($table): void
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