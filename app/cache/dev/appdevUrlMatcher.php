<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // alivinatu_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'alivinatu_homepage');
            }

            return array (  '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\ControladorController::indexAction',  '_route' => 'alivinatu_homepage',);
        }

        // articulo_listar
        if ($pathinfo === '/articulos/listar') {
            return array (  '_controller' => 'AlivinatuBundle:Articulos:listar',  '_route' => 'articulo_listar',);
        }

        // comentarioListar
        if ($pathinfo === '/comentarios/listar') {
            return array (  '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\ComentariosController::listarComentariosAction',  '_route' => 'comentarioListar',);
        }

        // articulo_crear
        if (0 === strpos($pathinfo, '/articulos/crear') && preg_match('#^/articulos/crear/(?<n>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'AlivinatuBundle:Articulos:crear',)), array('_route' => 'articulo_crear'));
        }

        // articulo_editar
        if (0 === strpos($pathinfo, '/articulos/editar') && preg_match('#^/articulos/editar/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'AlivinatuBundle:Articulos:editar',)), array('_route' => 'articulo_editar'));
        }

        // articulo_visualizar
        if (0 === strpos($pathinfo, '/articulos/visualizar') && preg_match('#^/articulos/visualizar/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'AlivinatuBundle:Articulos:visualizar',)), array('_route' => 'articulo_visualizar'));
        }

        // articulo_borrar
        if (0 === strpos($pathinfo, '/articulos/borrar') && preg_match('#^/articulos/borrar/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'AlivinatuBundle:Articulos:borrar',)), array('_route' => 'articulo_borrar'));
        }

        // comentario_crear
        if ($pathinfo === '/comentarios/crear') {
            return array (  '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\ComentariosController::crearAction',  '_route' => 'comentario_crear',);
        }

        // registroAdmin
        if ($pathinfo === '/admin/registro') {
            return array (  '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\UsuarioController::registroAdminAction',  '_route' => 'registroAdmin',);
        }

        // registroCliente
        if ($pathinfo === '/user/registro') {
            return array (  '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\UsuarioController::registroClienteAction',  '_route' => 'registroCliente',);
        }

        // menuAdmin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\AdminController::menuAdminAction',  '_route' => 'menuAdmin',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\UsuarioController::loginAction',  '_route' => 'login',);
        }

        // check_path
        if ($pathinfo === '/check') {
            return array('_route' => 'check_path');
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        // adminCliente
        if ($pathinfo === '/admin/cliente') {
            return array (  '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\AdminController::adminClienteAction',  '_route' => 'adminCliente',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
