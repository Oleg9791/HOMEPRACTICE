<?php

namespace App;

class Row implements IRow
{
    protected string $len;

    /**
     * @param string $len
     * @return $this
     */
    public function setLen(string $len): static
    {
        $this->len = $len;
        return $this;
    }

    public function getLengthRow(): int
    {
        return strlen($this->len);
    }

    use BottomTrait;
    use TopTrait;
    use NumericTrait;
    use PunctMarksTrait;
}
