<?php

namespace App\Controller;

use App\Services\Config;
use App\Entity\ResetPassword;
use App\Form\ResetPasswordType;
use App\Repository\UserRepository;
use App\Form\ForgottenPasswordType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class ForgottenPasswordController extends AbstractController
{
    /**
     * @Route("/forgotten/password", name="forgotten_password")
     */
    public function ForgottenPass(Request $request, UserRepository $repoUser, MailerInterface $mailer, TokenGeneratorInterface $tokenGenerator, Config $config
    ): Response
    {
            // création du formulaire
            $form = $this->createForm(ForgottenPasswordType::class);
            $form->handleRequest($request);
            $error = false;

        if($form->isSubmitted() && $form->isValid()){

            // recuperation des données, champ email
            $datas = $form->getData();
            $user = $repoUser->findOneByEmail($datas['email']);

            // Si l'User existe,on génère un token qu'on attribue à la propriété token de l'entité User, puis persist et flush
            if($user){
                $genToken = $tokenGenerator->generateToken();
                $user->setToken($genToken);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();

                // On génére un Url qui prendra en paramètre le token
                $url = $this->generateUrl('reset_pass',array('token'=>$genToken), UrlGeneratorInterface::ABSOLUTE_URL);

                // On crée l'email
                $email = (new TemplatedEmail())
                    ->from($config->SendingEmail())
                    ->to($user->getEmail())
                    ->subject('Reset password mail')
                    ->htmlTemplate('emails/forgot_email.html.twig')
                    ->context([
                        'url' => $url,
                        'firstName' => $user->getFirstName(),
                        'text' => 'We received a request to reset the password for your account. To reset your password, please click on the button below.',
                        'url_site' => $config->UrlSite()


                    ]);

                    $mailer->send($email);

                // On redirige vers la page de confirmation de l'envoie du mail
                return $this->redirectToRoute('forgotten_mail');
            }
            else{$error = 'This email is unknown';}
        }
            return $this->render('forgotten_password/forgotten_password.html.twig',[
                'error' => $error,
                'form' => $form->createView(),
            ]);
    }
    
    /**
     * @Route("/forgotten/mail", name="forgotten_mail")
     */
    public function ConfirmationMail(){

        return $this->render('forgotten_password/confirmation_forgotten_password.html.twig');
    }

    /**
    * @Route("/reset/pass/{token}", name="reset_pass", methods={"POST","GET"})
    */
    public function resetPassword(Request $request, UserRepository $repoUser, UserPasswordEncoderInterface $passwordEncoder, Config $config, MailerInterface $mailer){


        // on va chercher ds le repo l'utilisateur qui correspond au token de l'url
        // Si l'utilisateur existe 
        $token = $request->get('token');

        $user = $repoUser->findOneBy(['token'=>$token]);
        $resetPassword = new ResetPassword();
        $form = $this->createForm(ResetPasswordType::class, $resetPassword);
        $form->handleRequest($request);
        $error = false;
        
        if($user != null){

            if ($form->isSubmitted() && $form->isValid()) {
                
                $newPassword = $form->get('newPassword')->getData();
                // On supprime le token
                // $user->setToken(null);

                $user->setPassword($passwordEncoder->encodePassword($user,$newPassword));
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();


                $email = (new TemplatedEmail())
                ->from($config->SendingEmail())
                ->to($user->getEmail())
                ->subject('Reset password mail')
                ->htmlTemplate('emails/forgot_email.html.twig')
                ->context([
                    'firstName' => $user->getFirstName(),
                    'text' => 'Congratulation, your password has been changed',
                    'url_site' => $config->UrlSite()
                ]);
                
                $mailer->send($email);
                ;


                $this->addFlash('success', "Your password has been sucessfully changed");
                return $this->redirectToRoute('admin_homepage');
                


            }
        }
        else{
            $error = true;
        }
        return $this->render('forgotten_password/reset_password.html.twig',[
            'error'=>$error,
            'form'=>$form->createView()
        ]);

        
    }
}
