<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/22
 * Time: 8:57 AM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\stockMeta;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class securityController extends Controller
{

    /**
     * @Route("/login", name="login")
     */

    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        //get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        
        $lastUsername = $authenticationUtils->getLastUsername();
        if (($error == null) && ($this->getUser() != null))
        {
            $this->updateMeta("LOGGED IN","logon");
        }
        //return new Response("<html><body><h1>Login page!</h1></body></html>");
        return $this->render(
            ':security:login.html.twig',
            array(
                //last username entered by user
                'last_username' => $lastUsername,
                'error' => $error
            )
        );
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        //return new Response("<html><body><h1>Logged off!</h1></body></html>");
        $this->updateMeta("LOGGED OUT","log off");
       return $this->render(":catalogue:about.html.twig");
    }

    public function updateMeta($action, $desc)
    {
        $userMeta = new stockMeta();
        $user = $this->getUser();
        $date = date('Y-m-d');

        $em = $this->getDoctrine()->getManager();
        $userMeta->setMetaDate(new \DateTime($date));
        $userMeta->setMetaUser($user->getUsername());
        $userMeta->setMetaDesc($desc);
        $userMeta->setMetaAction($action);
        $userMeta->setStockUsers($user);

        $em->persist($userMeta);
        $em->flush();
    }
}