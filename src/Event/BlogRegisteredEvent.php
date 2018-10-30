<?php
namespace App\Event;

use App\Entity\BlogEntity;
use Symfony\Component\EventDispatcher\Event;

class BlogRegisteredEvent extends Event {
    const NAME = 'movie.registered';

    protected $blog;

    public function __construct(BlogEntity $blog)
    {
        $this->blog =$blog;
    }
    public function getBlog(): BlogEntity{
        return $this->blog;
    }
}