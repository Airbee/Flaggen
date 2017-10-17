<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 08.10.2017
 * Time: 12:13
 */

namespace HTL3R\flaggen;

class Kreis extends Flagge implements IFlagge
{
    private $radius;

    /**
     * Kreis constructor.
     * @param string $bezeichnung
     * @param string $farbe
     * @param int $radius
     */
    public function __construct($bezeichnung, $farbe, $radius)
    {
        parent::__construct($bezeichnung, $farbe);
        $this->radius = $radius;
    }

    /**
     * @return float Berechnet die Fläche der Kreisförmigen Flagge
     */
    public function getFlaeche():float
    {
        return pow($this->radius, 2) * pi();
    }
}