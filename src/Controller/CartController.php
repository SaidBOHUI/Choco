<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Entity\Product;
use App\Repository\ProductRepository;
use App\Services\CartService;
use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Validator\Constraints\Json;

class CartController extends AbstractController
{
    
    /**
     * @Route("/cart/add/{id}", name="cart_add" )
     */
    public function add( ProductRepository $repoProduct, CartService $cartService , Request $request)
    {
        
        $product = $repoProduct->find($request->get('id'));

        if($product){
            $response = $cartService->add($product->getId());
            if($response){
                return new JsonResponse(['message' => "Item added" ] , 201);
            }else{
                return new JsonResponse(['message' => "Error." ] , 500);
            }
        
        }else{
            return new JsonResponse(['message' => "not found"] , 404);
        }

    }

    /**
     * @Route("/cart", name="cart_show")
     */
    public function show(CartService $cartService): Response
    {
        $infosCart = $cartService->getInfosCartItems();
        $total = $cartService->getTotal();

        return $this->render('cart/show.html.twig', [
            'items' => $infosCart,
            'total' => $total
        ]);
    }
    
    /**
     * @Route("/getCartList", name="cart_list" , methods={"GET"}) 
     */
    public function getData(CartService $cartService)
    {
        $infosCart = $cartService->getInfosCartItems();
        $total = $cartService->getTotal();

        return new JsonResponse(['list' =>  $infosCart , 'total' => $total] , 200);
    }

    /**
     * @Route("/cart/increment/{id}", name="cart_increment", methods={"GET"})
     */
    public function increment(CartService $cartService, Request $request){

        $intId = (int) $request->get('id');
        $cartService->increment($intId);

        return new JsonResponse(200);
    }

    /**
     * @Route("/cart/decrement/{id}", name="cart_decrement", methods={"GET"})
     */
    public function decrement(CartService $cartService, Request $request){

        $intId = (int) $request->get('id');
        $cartService->decrement($intId);

        return new JsonResponse(200);
    }

    /**
     * @Route("/cart/delete/{id}", name="cart_delete", methods={"GET"})
     */
    public function delete(CartService $cartService, Request $request){        
        $intId = (int) $request->get('id');

        $supp = $cartService->remove($intId);

        if ($supp){

            $panier = $cartService->getInfosCartItems();

            return new JsonResponse(['message' => "item deleted.", 'panier' => $panier] ,200);
        };
    }

    /**
     * @Route("/cart/reset", name="cart_reset")
     */
    public function killCart(CartService $cartService){

        $cartService->cartReset();
        $this->addFlash('success', 'Your cart has been reset');

        return $this->render('cart/show.html.twig');
    }
}