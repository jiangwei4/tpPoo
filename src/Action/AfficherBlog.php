<?php
declare(strict_types=1);
namespace App\Action;

use App\Repository\Blog;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Zend\Expressive\Template\TemplateRendererInterface;

interface Affichable {
    public function affiche();
}

final Class AfficherBlog {
    public $blog;
    public function __construct(TemplateRendererInterface $renderer, Blog $blog)
    {
        $this->renderer = $renderer;
        $this->blog = $blog;
    }
    public function affiche() {
        echo $this->blog;
    }
    public function handle(Request $request): Response
    {
        $value = $request->query->get('param1');
        $this->blog->find($value);

        return new Response($this->renderer->render('helloworld.html.twig'));
    }
}

$test = new AfficherBlog(new Blog('date','titre','auteur','text'));
$test->affiche();