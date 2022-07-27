<?php
class Movie {
    public $title;

    public $author;

    public $year;

    public function __construct($_title, $_author, $_year)
    {
        $this->title = $_title;

        $this->author = $_author;

        $this->year = $_year;
    }

    public function printInfo() {
        return $this->title . ' è stato diretto da ' . $this->author . ' ed è uscito nei cinema nel ' . $this->year; 
    }
}

$lotr = new Movie('Il Signore degli Anelli', 'Peter Jackson', '2001' );

$tsotl = new Movie('Il Silenzio degli Innocenti', 'Jonathan Demme', '1991');

echo $lotr->printInfo() . '<br>';

echo $tsotl->printInfo();

?>