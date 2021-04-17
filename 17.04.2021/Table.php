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

    public
    function tab()
    {

        $html = "";
        foreach ($this->data as $datum) {
//            for ($i = 0; $i <= count($datum); $i++) {
//            if (count($datum) > 3) {
            $html .= "<$this->innerText><td>$datum</td></$this->innerText>";
        }
//        }
        return "<table border='$this->border'>$html</table>";

//    }
    }
}
