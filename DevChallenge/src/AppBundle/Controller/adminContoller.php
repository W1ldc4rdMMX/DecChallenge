<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/29
 * Time: 4:50 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class adminContoller extends Controller
{
    /**
     * @Route("/admin")
     * @Method("post")
     */
    public function saveAction()
    {

    }

    /**
     *@Route("/admin")
     */
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("AppBundle:stockUsers")->findAll();
        
        return $this->render(':catalogue:admin.html.twig',[
            'users' => $users
        ]);
        //return new Response("<html><body>Admin Page - Welcome ".$user->getUsername()."</body></html>");
    }

    public function decodePass()
    {
        
    }
}