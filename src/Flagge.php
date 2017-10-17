<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 25.09.2017
 * Time: 12:06
 */

namespace HTL3R\flaggen;

abstract class Flagge
{
    private $bezeichnung = "Eine wunderschöne Flagge.";
    private $farbe = "Keine Farbe";

    /**
     * Flagge constructor.
     * @param string $bezeichnung
     * @param string $farbe
     */
    public function __construct($bezeichnung, $farbe)
    {
        $this->bezeichnung = $bezeichnung;
        $this->farbe = $farbe;
    }

    /**
     * @return string Gibt den Flächeninhalt als String aus.
     */
    public function __toString(): string
    {
        $flaeche = $this->getFlaeche();
        return $this->bezeichnung . " " . $this->farbe . " " . $flaeche;
    }
}



