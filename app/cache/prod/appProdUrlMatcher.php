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

        // wbj_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'wbj_user_homepage')), array (  '_controller' => 'WBJ\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/user')) {
            // wbj_user_add
            if ($pathinfo === '/user/add') {
                return array (  '_controller' => 'WBJ\\UserBundle\\Controller\\UserController::addAction',  '_route' => 'wbj_user_add',);
            }

            // wbj_user_login
            if ($pathinfo === '/user/login') {
                return array (  '_controller' => 'WBJ\\UserBundle\\Controller\\UserController::loginAction',  '_route' => 'wbj_user_login',);
            }

        }

        // wbj_user_home
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'WBJ\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'wbj_user_home',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // wbj_user_nuevoUsuario
            if ($pathinfo === '/user/nuevo') {
                return array (  '_controller' => 'WBJ\\UserBundle\\Controller\\UserController::nuevoUsuarioAction',  '_route' => 'wbj_user_nuevoUsuario',);
            }

            if (0 === strpos($pathinfo, '/user/home')) {
                // wbj_user_userHome
                if ($pathinfo === '/user/homeusuario') {
                    return array (  '_controller' => 'WBJ\\UserBundle\\Controller\\UserController::userHomeAction',  '_route' => 'wbj_user_userHome',);
                }

                // wbj_user_userHomeAdmin
                if ($pathinfo === '/user/homeadmin') {
                    return array (  '_controller' => 'WBJ\\UserBundle\\Controller\\UserController::userHomeAdminAction',  '_route' => 'wbj_user_userHomeAdmin',);
                }

            }

            // wbj_user_editinfoAdmin
            if (rtrim($pathinfo, '/') === '/user/admin/editinfo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'wbj_user_editinfoAdmin');
                }

                return array (  '_controller' => 'WBJ\\UserBundle\\Controller\\UserController::edifinfoAction',  '_route' => 'wbj_user_editinfoAdmin',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
