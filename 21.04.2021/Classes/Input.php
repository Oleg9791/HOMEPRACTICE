<?php


class Input extends TagName
{
    protected string $type;
    protected string $value;
    protected string $placeholder;

    /**
     * @param string $type
     * @return Input
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param string $value
     * @return Input
     */
    public function setValue(string $value): static
    {
        $this->value = $value;
        return $this;

    }

    /**
     * @param string $placeholder
     * @return Input
     */
    public function setPlaceholder(string $placeholder): static
    {
        $this->placeholder = $placeholder;
        return $this;

    }

    public function html(): string
    {
        return "<input style='$this->style' class='$this->class' type='$this->type' value='$this->value' placeholder='$this->placeholder'>";
    }

}
