<?php

namespace App\Controller;

use App\Entity\Page;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $page = $this->getDoctrine()
        ->getRepository(Page::class)
        ->find(2);

        return $this->render('page/show.html.twig', [
            'page' => $page,
        ]);
    }
}
