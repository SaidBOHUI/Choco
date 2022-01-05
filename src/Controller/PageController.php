<?php

namespace App\Controller;

use App\Entity\Page;
use App\Form\PageType;
use App\Entity\Article;
use Doctrine\ORM\Mapping\Entity;
use App\Repository\PageRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class PageController extends AbstractController
{
    /**
     * @Route("/page/", name="page_index", methods={"GET"})
     * @IsGranted("ROLE_ADMIN", message = "You don't have permission to access this page")
     */
    public function index(PageRepository $pageRepository): Response
    {
        return $this->render('page/index.html.twig', [
            'pages' => $pageRepository->findAll(),
        ]);
    }

    /**
     * @Route("/page/new", name="page_new", methods={"GET","POST"})
     * @IsGranted("ROLE_ADMIN", message = "You don't have permission to access this page")
     */
    public function new(Request $request): Response
    {
        $page = new Page();
        
        $form = $this->createForm(PageType::class, $page);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $tableImage=[];
            
            foreach($request->files as $data){

                foreach($data as $article){

                    foreach ($article as $image){

                        foreach($image as $img){

                            
                            
                            $tableImage[] = $img;

                            
                        }

                    }
                }
            }

            if(count($tableImage)>0){
            
                for($i=0; $i < count($tableImage); $i++){

                    $articles = $page->getArticle();

                    if($tableImage[$i != 0]){

                        $newImageName = md5(uniqid()) . '.' . $tableImage[$i]->guessExtension();
                            $articles[$i]->setImage($newImageName);


                            $tableImage[$i]->move(
                                $this->getParameter('images_directory'),
                                $newImageName
                        

                        );
                    }
                }
            }        

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($page);
            $entityManager->flush();

            $this->addFlash('success', "Your new page has been successfully created");
            return $this->redirectToRoute('page_index');
        }

        return $this->render('page/new.html.twig', [
            'page' => $page,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}", name="page_show", methods={"GET"})
     */
    public function show(Page $page): Response
    {
        return $this->render('page/show.html.twig', [
            'page' => $page,
        ]);
    }

    /**
     * @Route("/page/{id}/edit", name="page_edit", methods={"GET","POST"})
     * @IsGranted("ROLE_ADMIN", message = "You don't have permission to access this page")
     */
    public function edit(Request $request, Page $page): Response
    {
        $form = $this->createForm(PageType::class, $page);
        $form->handleRequest($request); 

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
     
            if($request->files != null){                            

                $tableImage=[];
            
                foreach($request->files as $data){
                    foreach($data as $article){
                        foreach ($article as $image){
                            foreach($image as $img){
                                $tableImage[] = $img;
                            }
                        }
                    }
                }

        

                if(count($tableImage)>0){
                
                    for($i=0; $i < count($tableImage); $i++){
                        
                        $articles = $page->getArticle();
                        // Supprimer l'ancienne image

                        if($tableImage[$i] != null){

                            if($articles[$i] != null){

                                if($articles[$i]->getImage() != null){
                                    $oldImage = $this->getParameter('images_directory') . $articles[$i]->getImage();
                                    unlink($oldImage);
                                }                
                                $newImageName = md5(uniqid()) . '.' . $tableImage[$i]->guessExtension();
                                $articles[$i]->setImage($newImageName);
                                
                                $tableImage[$i]->move(
                                    $this->getParameter('images_directory'),
                                    $newImageName
                                );
                            }
                        }
                    }        
                }
            

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($page);
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', "Your changes have been registered");
            return $this->redirectToRoute('page_index');
            
            }
        }

        return $this->render('page/edit.html.twig', [
            'page' => $page,
            'form' => $form->createView(),
        ]);
        
    }

    /**
     * @Route("/page/{id}", name="page_delete", methods={"DELETE"})
     * @IsGranted("ROLE_ADMIN", message = "You don't have permission to access this page")
     */
    public function delete(Request $request, Page $page): Response
    {
 
        if ($this->isCsrfTokenValid('delete'.$page->getId(), $request->request->get('_token'))) {
            

            if(count($page->getArticle())>0){
                foreach ($page->getArticle() as $article ){
                    if($article->getImage() != null){
                         $olderImage = $this->getParameter('images_directory') . $article->getImage();
                         unlink($olderImage);
                     }
                 }
             }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($page);
            $entityManager->flush();

            $this->addFlash('danger', "The page has been deleted");
            return $this->redirectToRoute('page_index');
            
            
        }
    }
}
