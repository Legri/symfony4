<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/hello", name="home hello")
     */
    public function hello()
    {
        return $this->render('home/hello.html.twig', [
            'controller_name' => 'HomeController',
            'controller_func' => 'hello',
        ]);
    }
}
