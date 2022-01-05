<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/product", priority = 1)
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/", name="product_index", methods={"GET"})
     * @IsGranted("ROLE_ADMIN", message = "You don't have permission to access this page")
     */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('product/index.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="product_new", methods={"GET","POST"})
     * @IsGranted("ROLE_ADMIN", message = "You don't have permission to access this page")
     */
    public function new(Request $request): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imgProduct = $form->get('imgProduct')->getData();
            
            if($imgProduct!=null){
                $fichierImg = md5(uniqid()) . '.' . $imgProduct->guessExtension();

                $imgProduct->move(
                    $this->getParameter('images_directory'),
                    $fichierImg
                );


                $product->setImgProduct($fichierImg);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($product);
                $entityManager->flush();

                $this->addFlash('success', "Your new product has been successfully added");
                return $this->redirectToRoute('product_index');
            }

            else{
                $this->addFlash('danger', "Please complete all the fields");
                return $this->redirectToRoute('product_new');
               
                }
            }

        return $this->render('product/new.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="product_show", methods={"GET"})
     */
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="product_edit", methods={"GET","POST"})
     * @IsGranted("ROLE_ADMIN", message = "You don't have permission to access this page")
     */
    public function edit(Request $request, Product $product): Response
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imgProduct = $form->get('imgProduct')->getData();
            

            if($imgProduct!=null){

                $olderImgProduct = $this->getParameter('images_directory') . $product->getImgProduct();
                unlink($olderImgProduct);

                $fichierImg = md5(uniqid()) . '.' . $imgProduct->guessExtension();

                $imgProduct->move(
                    $this->getParameter('images_directory'),
                    $fichierImg
                );
                $product->setImgProduct($fichierImg);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            $this->addFlash('success', "Your changes have been registered");

            return $this->redirectToRoute('product_index');

        }
        return $this->render('product/edit.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="product_delete", methods={"DELETE"})
     * @IsGranted("ROLE_ADMIN", message = "You don't have permission to access this page")
     */
    public function delete(Request $request, Product $product): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {

            $olderImgProduct = $this->getParameter('images_directory') . $product->getImgProduct();
            unlink($olderImgProduct);
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($product);
            $entityManager->flush();

            $this->addFlash('danger', "The product has been deleted");

        }

        return $this->redirectToRoute('product_index');
    }
}
