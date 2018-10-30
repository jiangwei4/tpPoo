<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\Validator\Constraints\Date;

final class Blog{
    private $date;
    private $titre;
    private $auteur;
    private $text;

    public function __construct(Date $date, string $titre, string $auteur, string $text)
    {
        $this->date = $date;
        $this->auteur = $auteur;
        $this->text = $text;
        $this->titre = $titre;
    }

    /**
     * @return Date
     */
    public function getDate(): Date
    {
        return $this->date;
    }

    /**
     * @param Date $date
     */
    public function setDate(Date $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getAuteur(): string
    {
        return $this->auteur;
    }

    /**
     * @param string $auteur
     */
    public function setAuteur(string $auteur): void
    {
        $this->auteur = $auteur;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }


}