<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => '_profiler_search_results',    'token' => 'empty',    'ip' => '',    'url' => '',    'method' => '',    'limit' => '10',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),),
        'alivinatu_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\ControladorController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        'articulo_listar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AlivinatuBundle:Articulos:listar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/articulos/listar',    ),  ),),
        'comentarioListar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AlivinatuBundle:Comentarios:listarComentarios',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comentarios/listar',    ),  ),),
        'articulo_crear' => array (  0 =>   array (    0 => 'n',  ),  1 =>   array (    '_controller' => 'AlivinatuBundle:Articulos:crear',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'n',    ),    1 =>     array (      0 => 'text',      1 => '/articulos/crear',    ),  ),),
        'articulo_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AlivinatuBundle:Articulos:editar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/articulos/editar',    ),  ),),
        'articulo_visualizar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AlivinatuBundle:Articulos:visualizar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/articulos/visualizar',    ),  ),),
        'articulo_borrar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AlivinatuBundle:Articulos:borrar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/articulos/borrar',    ),  ),),
        'comentario_crear' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AlivinatuBundle:Comentarios:crear',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comentarios/crear',    ),  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\UsuarioController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),),
        'check_path' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/check',    ),  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),),
        'registroAdmin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\UsuarioController::registroAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/registro',    ),  ),),
        'registroCliente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\UsuarioController::registroClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/registro',    ),  ),),
        'menuAdmin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\AdminController::menuAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),),
        'adminCliente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\AdminController::adminClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/cliente',    ),  ),),
        'editarCliente' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\AdminController::editarClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => 'e',      2 => '[^e]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/editarClient',    ),  ),),
        'adminSala' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\AdminController::adminSalaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/sala',    ),  ),),
        'registroSala' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\AdminController::registroSalaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/registroSala',    ),  ),),
        'editarSala' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\AdminController::editarSalaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => 'a',      2 => '[^a]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/editarSal',    ),  ),),
        'adminServicio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\AdminController::adminServicioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/servicio',    ),  ),),
        'registroServicio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\AdminController::registroServicioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/registroServicio',    ),  ),),
        'editarServicio' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\AdminController::editarServicioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => 'o',      2 => '[^o]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/editarServici',    ),  ),),
        'adminPromocion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\AdminController::adminPromocionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/promocion',    ),  ),),
        'registroPromocion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\AdminController::registroPromocionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/registroPromocion',    ),  ),),
        'editarPromocion' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Alivinatu\\AlivinatuBundle\\Controller\\AdminController::editarPromocionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => 'n',      2 => '[^n]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/editarPromocio',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
