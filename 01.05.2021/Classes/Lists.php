<?php


class Lists
{
    protected array $list;
    protected string $type;
    protected string $tagName = "";

    public function __construct($list)
    {
        $this->list = $list;
    }

    public function html(): string
    {
        $html = "<$this->tagName type='$this->type'>";
        foreach ($this->list as $value) {
            $html .= "<li>$value</li>";
        }
        $html .= "</$this->tagName>";
        return $html;
    }

    /**
     * @param string $type
     * @return Lists
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param string $tagName
     */
    public function setTagName(string $tagName): static
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * @param array $list
     */
    public function setList(array $list): static
    {
        $this->list = $list;
        return $this;
    }

}