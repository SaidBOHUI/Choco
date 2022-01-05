<?php

namespace App\Controller;

use App\Entity\Page;
use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/article")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="article_index", methods={"GET"})
     * @IsGranted("ROLE_ADMIN", message = "You don't have permission to access this page")
     */
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('article/index.html.twig', [
            'articles' => $articleRepository->findAll(),
            'page' => $articleRepository->find('page')
            
        ]);
    }


    /**
     * @Route("/{id}/edit", name="article_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Article $article): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('image')->getData();

            if($image != null){
                if($article->getImage()!=null){
                $olderImage = $this->getParameter('images_directory') . $article->getImage();
                unlink($olderImage);
                }
        //Copie du fichier ds le dossier upload
            
                $newImageName = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move(
                    $this->getParameter('images_directory'),
                    $newImageName
                );
            $article->setImage($newImageName);
        }
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', "Your changes have been registered");
            return $this->redirectToRoute('article_index');
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="article_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Article $article): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {

            if($article->getImage() != null){
                $olderImage = $this->getParameter('images_directory') . $article->getImage();
                unlink($olderImage);
            }
        
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($article);
            $entityManager->flush();

            $this->addFlash('danger', "The article has been deleted");
            return $this->redirectToRoute('article_index');
        }
    }
}
