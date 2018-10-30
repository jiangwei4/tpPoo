<?php
namespace App\Event;

use App\Entity\Blog;
use Symfony\Component\EventDispatcher\Event;

class BlogRegisteredEvent extends Event {
    const NAME = 'movie.registered';

    protected $blog;

    public function __construct(Blog $blog)
    {
        $this->blog =$blog;
    }
    public function getBlog(): Blog{
        return $this->blog;
    }
}