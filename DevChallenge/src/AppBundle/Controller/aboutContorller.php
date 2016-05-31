<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/14
 * Time: 1:05 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\stockPermissions;
use AppBundle\Entity\stockUsers;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class aboutContorller extends Controller
{
    /**
     * @Route("/new")
     */
    public function newAction()
    {
        
         $user = new stockUsers();

        $user->setUsername('lear.pather');
        $user->setEmail('lear.pather@gmail.com');
        $plainpass = 'w1ldc4rd';
        
        $encoder = $this->container->get('security.password_encoder');
        $encoder = $encoder->encodePassword($user, $plainpass);
        $user->setPassword($encoder);
        $user->setIsActive(true);
        $user->setRoles(array('ROLE_ADMIN'));
        $em = $em = $this->getDoctrine()->getManager();

        $em->persist($user);
        $em->flush();

        return new Response("<html><body>User created!</body></html>");

    }



    /**
     * @Route("")
     *
     */

    public function showAction()
    {

       return $this->render('catalogue/about.html.twig',[
            'users' => $this->showUser()
        ]);
    }

    public function showUser()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:stockUsers')->findAll();
        return $users;

    }
}