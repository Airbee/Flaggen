<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 08.10.2017
 * Time: 12:13
 */

require_once "Flagge.php";
require_once "IFlagge.php";

class Rechteck extends Flagge
{
    private $länge;
    private $breite;

    public function __construct($bezeichnung, $farbe, $länge, $breite)
    {
        parent::__construct($bezeichnung, $farbe);
        $this->breite = $breite;
        $this->länge = $länge;
    }

    public function getFlaeche():float
    {
        return $this->länge * $this->breite;
    }
}