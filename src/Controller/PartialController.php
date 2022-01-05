<?php

namespace App\Controller;

use App\Entity\Page;
use App\Entity\Categories;
use App\Repository\PageRepository;
use App\Repository\ProductRepository;
use App\Repository\CategoriesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PartialController extends AbstractController
{
    /**
     * affichage des catégories
     */
    public function findAllCategories(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('/partial/findCategories.html.twig', [
            'categories' => $categoriesRepository->findAll(),
        ]);
    }

    public function categoriesSlider(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('/partial/categories_slider.html.twig', [
            'categories' => $categoriesRepository->findAll()
        ]);
    }
    public function findAllProduct(ProductRepository $productRepository): Response
    {
        return $this->render('/partial/findProduct.html.twig', [
            'product'=> $productRepository->findAll()
        ]);
    }

    public function top(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Page::class);
        $top = $repository->findBy([
            'location'=>'top'
        ]);

        return $this->render('partial/top.html.twig', [
            'top'=>$top
        ]);

    }

    public function bottom(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Page::class);
        $bottom = $repository->findBy([
            'location'=>'bottom'
        ]);

        return $this->render('partial/bottom.html.twig', [
            'bottom'=>$bottom
        ]);
    }

}
