<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 08.10.2017
 * Time: 12:13
 */

namespace HTL3R\flaggen;

class Rechteck extends Flagge implements IFlagge
{
    private $länge;
    private $breite;

    /**
     * Rechteck constructor.
     * @param string $bezeichnung
     * @param string $farbe
     * @param int $länge
     * @param int $breite
     */
    public function __construct($bezeichnung, $farbe, $länge, $breite)
    {
        parent::__construct($bezeichnung, $farbe);
        $this->breite = $breite;
        $this->länge = $länge;
    }

    /**
     * @return float Flächeninhalt der Rechteckigen Flagge
     */
    public function getFlaeche():float
    {
        return $this->länge * $this->breite;
    }
}

