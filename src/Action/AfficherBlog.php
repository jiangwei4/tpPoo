<?php
declare(strict_types=1);
namespace App\Action;

use App\Event\BlogRegisteredEvent;
use App\Repository\Blog;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Zend\Expressive\Template\TemplateRendererInterface;

Class AfficherBlog {
    private $blog;
    private $renderer;

    public function __construct(TemplateRendererInterface $renderer, Blog $blog)
    {
        $this->renderer = $renderer;
        $this->blog = $blog;
    }

    public function handle(Request $request,EventDispatcherInterface $eventDispatcher , Blog $blog): Response
    {
        $value = $request->query->get('param1');
        $this->blog->find($value);
        $event = new BlogRegisteredEvent($blog);
        $eventDispatcher->dispatch(BlogRegisteredEvent::NAME,$event);
        return new Response($this->renderer->render('Blog.html.twig'));
    }

}
