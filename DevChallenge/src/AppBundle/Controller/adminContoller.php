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
        $checkKeys = array_keys($_POST);
        switch ($checkKeys[0]) {
            case 'editUserName':
                return new Response("<html><body>".print_r($_POST)."</body></html>");
                /*user = new stockUsers();                

                $user->setUsername('lear.pather');
                $user->setEmail('lear.pather@gmail.com');
                $plainpass = 'w1ldc4rd';
                $encoder = $this->container->get('security.password_encoder');
                $encoder = $encoder->encodePassword($user, $plainpass);
                $user->setPassword($encoder);
                $user->setIsActive(true);
                $user->setRoles(array('ROLE_ADMIN'));*/
                break;
            default:
                break;
        }
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("AppBundle:stockUsers")->findAll();

        return $this->render(':catalogue:admin.html.twig',[
            'users' => $users
        ]);
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