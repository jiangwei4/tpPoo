<?php

declare(strict_types=1);

namespace App\Repository;



final class Blog{
    private $date;
    private $titre;
    private $auteur;
    private $text;

    public function __construct(string $date, string $titre,string $auteur, string $text)
    {
        $this->date = $date;
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->text = $text;
    }

    public function __toString()
    {
        return 'date : '.$this->date.' titre : '. $this->titre.' auteur : '.$this->auteur.'  text : '.$this->text;
    }


}