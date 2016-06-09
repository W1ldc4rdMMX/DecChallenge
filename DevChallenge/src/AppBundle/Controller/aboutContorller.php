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
        $user1 = new stockUsers();
        $user2 = new stockUsers();

        $user1->setUsername('lear.pather');
        $user1->setEmail('lear.pather@gmail.com');
        $plainpass1 = 'w1ldc4rd';
        $encoder = $this->container->get('security.password_encoder');
        $encoder = $encoder->encodePassword($user1, $plainpass1);
        $user1->setPassword($encoder);
        $user1->setIsActive(true);
        $user1->setRoles(array('ROLE_ADMIN'));

        $user2->setUsername('ichigo.kurosaki');
        $user2->setEmail('ichigo@kurosaki.com');
        $plainpass2 = 'hellsBells';
        $encoder = $this->container->get('security.password_encoder');
        $encoder = $encoder->encodePassword($user2, $plainpass2);
        $user2->setPassword($encoder);
        $user2->setIsActive(true);
        $user2->setRoles(array('ROLE_USER'));

        $em = $em = $this->getDoctrine()->getManager();

        $em->persist($user1);
        $em->persist($user2);
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