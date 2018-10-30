<?php
namespace App\Subscriber;

use App\Event\BlogRegisteredEvent;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class BlogRegistered implements EventSubscriberInterface {
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public static function getSubscribedEvents()
    {
        return [BlogRegisteredEvent::NAME=>'onBlogRegisteredEvent'];
    }

    public function onBlogRegisteredEvent(BlogRegisteredEvent $blogRegisteredEvent){
        $blog = $blogRegisteredEvent->getBlog();
        $this->logger->info('afichage du blog !  '.$blog);
    }
}