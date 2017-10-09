<?php

/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 08.10.2017
 * Time: 12:13
 */

require_once "Flagge.php";
require_once "IFlagge.php";

class Quadrat extends Flagge
{
    private $seite;

    public function __construct($bezeichnung, $farbe, $seite)
    {
        parent::__construct($bezeichnung, $farbe);
        $this->seite = $seite;
    }

    public function getFlaeche():float
    {
        return pow($this->seite, 2);
    }
}