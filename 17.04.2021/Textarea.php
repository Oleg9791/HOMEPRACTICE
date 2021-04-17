<?php


class Textarea
{
    protected float $cols;
    protected float $rows;
    protected string $name;
    protected string $innerText;

    /**
     * @param float $cols
     * @return Textarea
     */
    public function setCols(string $cols): static
    {
        $this->cols = $cols;
        return $this;
    }

    /**
     * @param float $rows
     * @return Textarea
     */
    public function setRows(string $rows): static
    {
        $this->rows = $rows;
        return $this;

    }

    /**
     * @param string $name
     * @return Textarea
     */
    public function setName(string $name): Textarea
    {
        $this->name = $name;
        return $this;

    }

    /**
     * @param string $innerText
     * @return Textarea
     */
    public function setInnerText(string $innerText): Textarea
    {
        $this->innerText = $innerText;
        return $this;

    }

    public function html()
    {
        return "<textarea name='$this->name' rows='$this->rows' cols='$this->cols'>$this->innerText</textarea>";
    }
}