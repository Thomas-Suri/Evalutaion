<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogPostController extends AbstractController
{
    /**
     * @Route("/blog/post", name="blog_post")
     */
    public function index()
    {
        return $this->render('blog_post/index.html.twig', [
            'controller_name' => 'BlogPostController',
        ]);
    }

    /**
     * @Route("/blog/list")
     */
    public function listPostAction(){

    }

    /**
     * @Route("/blog/{id}")
     * @Route("/blog/slug")
     * @Route("/blog/date/slug")
     */
    public function showPostAction(){

    }
}
