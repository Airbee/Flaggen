<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 25.09.2017
 * Time: 12:06
 */

abstract class Flagge
{
    private $bezeichnung = "Eine wunderschöne Flagge.";
    private $farbe = "Keine Farbe";

    public function __construct($bezeichnung, $farbe)
    {
        $this->bezeichnung = $bezeichnung;
        $this->farbe = $farbe;
    }

    public function __toString(): string
    {
        $flaeche = $this->getFlaeche();
        return $this->bezeichnung . " " . $this->farbe . " " . $flaeche;
    }
}



