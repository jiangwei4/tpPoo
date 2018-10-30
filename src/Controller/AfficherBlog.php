<?php

namespace App\Controller;

interface Affichable {
    public function affiche();
}

Class AfficherBlog implements  Affichable{
    protected $blog;
    public function __construct(\App\Controller\Blog $blog) {
        $this->blog = $blog;
    }
    public function affiche() {
        echo $this->blog;
    }


}
