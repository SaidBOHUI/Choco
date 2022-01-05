<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Purchase;
use App\Services\Config;
use App\Form\PurchaseType;
use App\Services\CartService;
use App\Repository\PurchaseRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @Route("/purchase")
 */
class PurchaseController extends AbstractController
{
    /**
     * @Route("/", name="purchase_index", methods={"GET"}, priority=1)
     * @IsGranted("ROLE_ADMIN", message = "You don't have permission to access this page")
     */
    public function index(PurchaseRepository $purchaseRepository): Response
    {
            
        return $this->render('purchase/index.html.twig', [
            'purchases' => $purchaseRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="purchase_new", methods={"GET","POST"}, priority=1)
     * @IsGranted("ROLE_USER", message = "You don't have permission to access this page")
     */
    public function new(Request $request, CartService $cartService, SessionInterface $session, Config $config, MailerInterface $mailer): Response
    {
        $user = $this->getUser();

        $purchase = new Purchase();
        $form = $this->createForm(PurchaseType::class, $purchase);
        $form->handleRequest($request);

        // $idUser = $this->$purchase->getId();

        $cartItems = $cartService->getInfosCartItems();
        $total = $cartService->getTotal();
        
        if($cartItems==null){
            
            $this->addFlash('danger', "You cannot confirm an order if your cart is empty");
            return new RedirectResponse($this->router->generate('cart_list'));
        }
        
        if ($form->isSubmitted() && $form->isValid()) {    

            $purchase->setProduit($cartItems);     
            $purchase->setTotal($total);
            $purchase->setUser($user);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($purchase);
            $entityManager->flush();
            
            // Je definie les options du pdf
            $pdfOptions = new Options();
            $pdfOptions->set('defaultFont', 'Helvetica');

            // On instancie la classe dompdf avec les options en parametres
            $dompdf = new Dompdf($pdfOptions);

            // on recupere le twig à mettre en pdf
            $html = $this->render('pdf/facture.html.twig', [
                'purchase' => $purchase,
                'title' => "Your order PDF"
            ]);

            // On charge le twig
            $dompdf->loadHtml($html->getContent());

            // On rend le twig en pdf
            $dompdf->render();
            $output = $dompdf->output();

            file_put_contents($this->getParameter('images_directory').'facture-'.$purchase->getId().'.pdf', $output);
            $facture = $this->getParameter('images_directory').'facture-'.$purchase->getId().'.pdf' ;


            $email = (new TemplatedEmail())
            ->from($config->SendingEmail())
            ->to($purchase->getEmail())
            ->subject('Your Chocometry command')
            ->htmlTemplate('emails/confirmation_email.html.twig')
            ->context([
                'fullName' => $purchase->getFullName(),
                'text' => "Congratulation, your command has been successfully registred, thank you for ordering on Chocometry's website. You will find in the pdf document attached to this email the informations relating to your order.", 
                'url_site' => $config->UrlSite()
            ])
            ->attachFromPath($facture);
            
            $mailer->send($email);

            
            $this->addFlash('success', "Your order has been registered");
            
            unlink($facture);
            $session->clear('cart');

            return $this->render('purchase/_confirmation_purchase.html.twig');            
        }
        
        return $this->render('purchase/new.html.twig', [
            'purchase' => $purchase,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}", name="purchase_confirm", methods={"GET"})
     */
    public function show(Purchase $purchase): Response
    {
        return $this->render('purchase/confirmation.html.twig', [
            'purchase' => $purchase
        ]);
    }

    /**
     * @Route("/{id}/edit", name="purchase_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Purchase $purchase): Response
    {
        $form = $this->createForm(PurchaseType::class, $purchase);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('purchase_index');
        }

        return $this->render('purchase/edit.html.twig', [
            'purchase' => $purchase,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="purchase_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Purchase $purchase): Response
    {
        if ($this->isCsrfTokenValid('delete'.$purchase->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($purchase);
            $entityManager->flush();
        }

        return $this->redirectToRoute('purchase_index');
    }

    /**
     * Affiche le bon de commande
     * @Route("/facture/{id}" , name="facture")
     */
    public function getFacture(Purchase $purchase)
    {  
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Helvetica');

        $html =  $this->render("pdf/facture.html.twig" , [
            'purchase' => $purchase,
            'title' => "Your order PDF"]); 
        $dompdf = new Dompdf($pdfOptions);
        $dompdf->loadHtml($html->getContent());
        $dompdf->setPaper('A4');
        $dompdf->render(); 
        $dompdf->stream("facture.pdf", ["Attachment" => true]);
    }
}

