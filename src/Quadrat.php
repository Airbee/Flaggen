<?php

/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 08.10.2017
 * Time: 12:13
 */

namespace HTL3R\flaggen;

class Quadrat extends Flagge implements IFlagge
{
    private $seite;

    /**
     * Quadrat constructor.
     * @param string $bezeichnung
     * @param string $farbe
     * @param int $seite
     */
    public function __construct($bezeichnung, $farbe, $seite)
    {
        parent::__construct($bezeichnung, $farbe);
        $this->seite = $seite;
    }

    /**
     * @return float Berechnet die Fläche der Quadratischen Flagge
     */
    public function getFlaeche():float
    {
        return pow($this->seite, 2);
    }
}