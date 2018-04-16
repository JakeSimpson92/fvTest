<?php

namespace AppBundle\Controller;
use AppBundle\Entity\User\User;
use AppBundle\Form\Type\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Method({"GET", "POST"})
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isValid())
        {

            $em = $this->getDoctrine()->getManager();

            dump($user);
            $em->persist($user);
            $em->flush();


            $this->addFlash('notice', array(
                'message' => 'New User Added!',
                'title'   => 'Success',
            ));

            return $this->redirectToRoute('homepage');
        }

        return $this->render('Homepage.html.twig', array(
            'form'                  => $form->createView(),
        ));

    }
}
