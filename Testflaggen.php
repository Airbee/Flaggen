<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 25.09.2017
 * Time: 12:27
 */
require_once "Flagge.php";
require_once "Kreis.php";
require_once "Quadrat.php";
require_once "Rechteck.php";

$flaggen[] = new Rechteck("Eine Flagge", "Blau", 6.0, 4.0);
$flaggen[] = new Quadrat("Eine andere Flagge", "Rot", 5.0);
$flaggen[] = new Kreis("Eine ganz andere Flagge", "Grün", 10.0);

foreach ($flaggen as $flagge){
    echo $flagge ."<br>";
}
