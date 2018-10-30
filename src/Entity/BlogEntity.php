<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BlogRepository")
 */
class BlogEntity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $auteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $text;

    public function __toString()
    {
        return ' TODO: Implement __toString() method.';
    }
public function __construct(string $id, string $date, string $titre, string $auteur, string $text)
{
    $this->text = $text;
    $this->id = $id;
    $this->titre = $titre;
    $this->date = $date;
    $this->auteur = $auteur;
}
public function getTitre(){
        return $this->titre;
}
}
