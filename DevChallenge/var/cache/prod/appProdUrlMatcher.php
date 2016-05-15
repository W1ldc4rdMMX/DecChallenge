<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // app_aboutcontorller_show
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_aboutcontorller_show');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\aboutContorller::showAction',  '_route' => 'app_aboutcontorller_show',);
        }

        // app_catalogue_show
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'AppBundle\\Controller\\catalogueController::showAction',  '_route' => 'app_catalogue_show',);
        }

        // app_update_show
        if ($pathinfo === '/update') {
            return array (  '_controller' => 'AppBundle\\Controller\\updateController::showAction',  '_route' => 'app_update_show',);
        }

        // app_view_show
        if ($pathinfo === '/view') {
            return array (  '_controller' => 'AppBundle\\Controller\\viewController::showAction',  '_route' => 'app_view_show',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
