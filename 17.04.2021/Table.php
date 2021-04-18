<?php


class Table
{
    protected array $data;
    protected float $border;
    protected float|string $innerText = "";

    /**
     * @param array $data
     * @return Table
     */
    public function setData(array $data): Table
    {
        $this->data = $data;
        return $this;
    }


    /**
     * @param float $border
     * @return Table
     */
    public function setBorder(float $border): Table
    {
        $this->border = $border;
        return $this;
    }

    /**
     * @param float|string $innerText
     * @return Table
     */
    public function setInnerText(float|string $innerText): Table
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function tab()
    {

        $html = "<table border='$this->border'>";
        foreach ($this->data as $datum) {

            $html .= "<$this->innerText>";
            foreach ($datum as $value) {

                $html .= "<td>$value</td>";
            }
            $html .= "</$this->innerText>";
        }
        $html .= "</table>";

        return "$html";
    }

    public function tab1()
    {

        $html = "<table border='$this->border'><$this->innerText>";
        foreach ($this->data as $datum) {


            $html .= "<td>$datum</td>";
        }
        return "$html</$this->innerText></table>";
    }

}
