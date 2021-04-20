<?php


class Table
{
    protected array $data = [];
    protected string $style = "";

    /**
     * @param array $data
     * @return $this
     */
    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param string $style
     * @return $this
     */
    public function setStyle(string $style): static
    {
        $this->style = $style;
        return $this;
    }

    public function html()
    {

        $html = "<table>";
        foreach ($this->data as $row) {

            $html .= "<tr>";
            foreach ($row as $cell) {

                $html .= "<td style='$this->style'>$cell</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";

        return $html;
    }

}