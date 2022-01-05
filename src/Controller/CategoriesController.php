<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Form\CategoriesType;
use App\Repository\CategoriesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/categories")
 */
class CategoriesController extends AbstractController
{
    /**
     * @Route("/", name="categories_index", methods={"GET"})
     */
    public function index(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('categories/index.html.twig', [
            'categories' => $categoriesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="categories_new", methods={"GET","POST"})
     * @IsGranted("ROLE_ADMIN", message = "You don't have permission to access this page")
     */
    public function new(Request $request): Response
    {
        $category = new Categories();
        $form = $this->createForm(CategoriesType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();
            $banner = $form->get('banner')->getData();

            if($image!=null && $banner != null){
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();
                //Copie du fichier ds le dossier upload
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );

                $fichierBanner = md5(uniqid()) . '.' . $banner->guessExtension();
                //Copie du fichier ds le dossier upload
                $banner->move(
                    $this->getParameter('images_directory'),
                    $fichierBanner
                );
                $category->setBanner($fichierBanner);
                $category->setImage($fichier);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($category);
                $entityManager->flush();



                $this->addFlash('success', "Your new category has been successfully added");
                return $this->redirectToRoute('categories_index');
            }

              else{
                $this->addFlash('danger', "Please complete all the fields");
                return $this->redirectToRoute('categories_new');
                    }
        }

        return $this->render('categories/new.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categories_show", methods={"GET"})
     */
    public function show(Categories $category): Response
    {
        return $this->render('categories/show.html.twig', [
            'category' => $category,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="categories_edit", methods={"GET","POST"})
     * @IsGranted("ROLE_ADMIN", message = "You don't have permission to access this page")
     */
    public function edit(Request $request, Categories $category): Response
    {
        $form = $this->createForm(CategoriesType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();
            $banner = $form->get('banner')->getData();

            if ($image != null) {
                $olderImage = $this->getParameter('images_directory') . $category->getImage();
                unlink($olderImage);


                $fichier = md5(uniqid()) . '.' . $image->guessExtension();
                //Copie du fichier ds le dossier upload
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
                $category->setImage($fichier);
            }

            if ($banner != null) {
                $olderBanner = $this->getParameter('images_directory') . $category->getBanner();
                unlink($olderBanner);

                $fichierBanner = md5(uniqid()) . '.' . $banner->guessExtension();
                //Copie du fichier ds le dossier upload
                $banner->move(
                    $this->getParameter('images_directory'),
                    $fichierBanner
                );
                $category->setBanner($fichierBanner);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($category);
            $entityManager->flush();

            $this->addFlash('success', "Your changes have been registered
            ");

            return $this->redirectToRoute('categories_index');
        }

        return $this->render('categories/edit.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categories_delete", methods={"DELETE"})
     * @IsGranted("ROLE_ADMIN", message = "You don't have permission to access this page")
     */
    public function delete(Request $request, Categories $category): Response
    {
        if ($this->isCsrfTokenValid('delete' . $category->getId(), $request->request->get('_token'))) {

            $olderImage = $this->getParameter('images_directory') . $category->getImage();
            unlink($olderImage);
        

            $olderBanner = $this->getParameter('images_directory') . $category->getBanner();
            unlink($olderBanner);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($category);
            $entityManager->flush();

            $this->addFlash('danger', "The category has been deleted");
        }
        return $this->redirectToRoute('categories_index');
    }
}