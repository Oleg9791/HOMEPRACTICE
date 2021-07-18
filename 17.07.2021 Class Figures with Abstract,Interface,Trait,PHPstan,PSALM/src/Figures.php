<?php


namespace App;


class Figures extends General implements IFigures
{

    use AreaSquareTrait;
    use PerimeterSquareTrait;
    use AreaRhombusTrait;
    use PerimeterRhombusTrait;
    use AreaTriangleTrait;
    use PerimeterTriangleTrait;
    use AreaRectangleTrait;
    use PerimeterRectangleTrait;
    use AreaTrapeziumTrait;
    use PerimeterTrapeziumTrait;
}