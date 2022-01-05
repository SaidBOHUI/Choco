<?php

namespace App\Controller;

use App\Entity\TextArticle;
use App\Form\TextArticleType;
use App\Repository\TextArticleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/text/article")
 * @IsGranted("ROLE_ADMIN", message = "You don't have permission to access this page")
 */
class TextArticleController extends AbstractController
{
    /**
     * @Route("/", name="text_article_index", methods={"GET"})
     */
    public function index(TextArticleRepository $textArticleRepository): Response
    {
        return $this->render('text_article/index.html.twig', [
            'text_articles' => $textArticleRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="text_article_show", methods={"GET"})
     */
    public function show(TextArticle $textArticle): Response
    {
        return $this->render('text_article/show.html.twig', [
            'text_article' => $textArticle,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="text_article_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TextArticle $textArticle): Response
    {
        $form = $this->createForm(TextArticleType::class, $textArticle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', "Your changes have been registered");
            return $this->redirectToRoute('text_article_index');
        }

        return $this->render('text_article/edit.html.twig', [
            'text_article' => $textArticle,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="text_article_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TextArticle $textArticle): Response
    {
        if ($this->isCsrfTokenValid('delete'.$textArticle->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($textArticle);
            $entityManager->flush();

            $this->addFlash('danger', "The text-article has been deleted");
        }
            
        return $this->redirectToRoute('text_article_index');
    }
}
