<?php


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
