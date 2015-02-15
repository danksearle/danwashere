<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'DanWasHereBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'DanWasHereBundle\\Controller\\ContactController::indexAction',  '_route' => '_contact',);
        }

        // _flash_history
        if ($pathinfo === '/flash_history') {
            return array (  '_controller' => 'DanWasHereBundle\\Controller\\FlashHistoryController::indexAction',  '_route' => '_flash_history',);
        }

        // _portfolio
        if ($pathinfo === '/portolio') {
            return array (  '_controller' => 'DanWasHereBundle\\Controller\\PortfolioController::indexAction',  '_route' => '_portfolio',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
