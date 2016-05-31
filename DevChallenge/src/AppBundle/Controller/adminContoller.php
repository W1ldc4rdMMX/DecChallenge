<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/29
 * Time: 4:50 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class adminContoller extends Controller
{
    /**
     *@Route("/admin")
     */

    public function showAction()
    {
        $user = $this->getUser();
        
        return $this->render(':catalogue:admin.html.twig',[
            'user' => $user
        ]);
        //return new Response("<html><body>Admin Page - Welcome ".$user->getUsername()."</body></html>");
    }
}