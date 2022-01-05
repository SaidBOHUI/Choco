<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\LoginType;
use App\Entity\Purchase;
use App\Form\UserEditType;
use App\Entity\EditPassword;
use App\Form\EditPasswordType;
use App\Form\UserEditPasswordType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/user", priority = 1)
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="user_index", methods={"GET"})  
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
            
        ]);
    }

    /**
     * @Route("/new", name="user_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $pw = $user->getPassword();
            $hash = $passwordEncoder->encodePassword($user, $pw);
            $user->setPassword($hash);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_login');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
      */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(UserEditType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}/edit/password", name="user_password_edit", methods={"GET","POST"})
     * @IsGranted("ROLE_ADMIN", message = "You don't have permission to access this page")
     */
    public function ChangePassword(Request $request, User $user, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $editPassword = new EditPassword;
        $form = $this->createForm(EditPasswordType::class, $editPassword);
        $form->handleRequest($request);
 
        if ($form->isSubmitted() && $form->isValid()) {

            $oldPassword = $editPassword->getOldPassword();
            $verif = \password_verify($oldPassword, $user->getPassword());

            if($verif == true){

                $newPassword = $editPassword->getNewPassword();

                $hash = $passwordEncoder->encodePassword($user, $newPassword);
                $user->setPassword($hash);
            

                $this->getDoctrine()->getManager()->flush();

                $this->addFlash('success', "Your password has been sucessfully changed
                ");

                return $this->redirectToRoute('user_show',['id'=>$user->getId()]);
            }

            else{ 
                $this->addFlash('alert', "former password unknown
                ");
                
            }
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"DELETE"})
     * @IsGranted("ROLE_ADMIN", message = "You don't have permission to access this page")
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index');
    }
}