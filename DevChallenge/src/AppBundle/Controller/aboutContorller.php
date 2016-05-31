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
        /*
         $user = new stockUsers();
        $user->setUserFName("Lear");
        $user->setUserLName("Pather");
        $user->setUserEmail("lear.pather@gmail.com");
        $user->setUserPass("b00nD0ck5");

        $perm = new stockPermissions();
        $perm->setPermAdd(true);
        $perm->setPermDel(true);
        $perm->setPermEdit(true);
        $perm->setPermDel(true);
        $perm->setPermOrder(true);
        $perm->setPermSU(true);
        $perm->setStockUsers($user);

        $em =$this->getDoctrine()->getManager();
        $em->persist($user);
        $em->persist($perm);
        $em->flush();

        return new Response("<html><body>User created!</body></html>");*/

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