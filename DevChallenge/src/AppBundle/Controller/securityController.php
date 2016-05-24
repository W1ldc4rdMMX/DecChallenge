<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/22
 * Time: 8:57 AM
 */

namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class securityController extends Controller
{
/*
    /**
     * @Route("/login", name="Login")
     */

    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        //get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig',
            array(
                //last username entered by user
                'last_username' => $lastUsername,
                'error' => $error
            )
        );
    }

}