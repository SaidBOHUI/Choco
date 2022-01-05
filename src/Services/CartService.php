<?php
namespace App\Services;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartService

{
    protected $session;
    protected $repoProduct;

    public function __construct(SessionInterface $session, ProductRepository $repoProduct)
    {
        $this->session = $session;
        $this->productRepository = $repoProduct;
    }



    /***
     * Add to sesssion (panier)
     * @param int $id
     * @return boolean
     */
    public function add(int $id){

        $cart = $this->session->get('cart',[]);


        // Si la cle correspondant à l'id du produit existe deja, ça veut dire qu'il a deja été ajouté au panier donc on augmente la quantité du prduit de 1
        if (array_key_exists($id, $cart)){
            $cart[$id]++;
        }
        // Si elle n'existe pas alors le produit n'est pas dans le panier donc on set la quantité à 1
        else {
            $cart[$id] = 1;
        }
        // On enregistre les changements dans la session
        $this->session->set('cart',$cart);

        return true; 
    }

    public function increment(int $id){

        if($this->session->has('cart')){

            $cart = $this->session->get('cart',[]);
            $cart[$id]++;
            $this->session->set('cart',$cart);

            return true;
        }
    }

    public function decrement(int $id){

        if($this->session->has('cart')){

    

            $cart = $this->session->get('cart',[]);

            if($cart[$id] <= 1){
                unset($cart[$id]);
            }
            else{
                $cart[$id]--;
            }
            $this->session->set('cart',$cart);
            return true;
        }
    }

    public function remove(int $id){

        if($this->session->has('cart')){

            $cart = $this->session->get('cart');
            unset($cart[$id]);
            $this->session->set('cart',$cart);
        }
        return true;
    }



    public function getTotal(){
        $total = 0;

        foreach($this->session->get('cart',[]) as $id =>$qty){

            $product = $this->productRepository->find($id);
            if(!$product){
                continue;
            }
                $total += ($product->getPrice() * $qty);
        }
        return $total;
    }


    public function getInfosCartItems(){
        if($this->session->has('cart')==true){
            
            $infosCart = [];
            foreach($this->session->get('cart') as $id =>$qty){
                $product = $this->productRepository->find($id);

                if ($product){
                    $infosCart[] = [
                        'id' => $product->getId(),
                        'name' => $product->getName(),
                        'price' => $product->getPrice(), 
                        'description' => $product->getDescription(),
                        'qty' => $qty
                    ];
                }
            }
            return $infosCart;
        }

       else{
            return false;
        }
    }

    public function cartReset(){

        $this->session->clear('cart');
    }
}

