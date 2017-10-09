<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 08.10.2017
 * Time: 12:13
 */

require_once "Flagge.php";
require_once "IFlagge.php";

class Kreis extends Flagge
{
    private $radius;

    public function __construct($bezeichnung, $farbe, $radius)
    {
        parent::__construct($bezeichnung, $farbe);
        $this->radius = $radius;
    }

    public function getFlaeche():float
    {
        return pow($this->radius, 2) * pi();
    }
}