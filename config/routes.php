<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    /**
     * Routage des offres
     */
    $routes->connect('/index/', ['controller' => 'Ads', 'action' => 'index']);
    $routes->connect('/offres/liste/*', ['controller' => 'Offres', 'action' => 'liste']);
    $routes->connect('/offres/detail/*', ['controller' => 'Offres', 'action' => 'view']);
    $routes->connect('/offres/ajouter', ['controller' => 'Offres', 'action' => 'add']);
    /**
     * Routage des partenaires
     */
    $routes->connect('/deconnexion/', ['controller' => 'Users', 'action' => 'logout']);
    $routes->connect('/connexion/', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/inscription/', ['controller' => 'Users', 'action' => 'add']);
    //$routes->connect('/details/*', ['controller' => 'Users', 'action' => 'view']);
    $routes->connect('/profil/*', ['controller' => 'Users', 'action' => 'view']);
    $routes->connect('/valider/*', ['controller' => 'Users', 'action' => 'validate']);
    /**
     * Routage infos
     */
    $routes->connect('/info/cgv/', ['controller' => 'Infos', 'action' => 'cgv']);
    $routes->connect('/info/mentions/', ['controller' => 'Infos', 'action' => 'mentions']);
    $routes->connect('/info/contact/', ['controller' => 'Infos', 'action' => 'contact']);
    /**
     * Routage erreurs
     */
    $routes->connect('/erreur/500/', ['controller' => 'Erreurs', 'action' => '500']);
    $routes->connect('/erreur/403/', ['controller' => 'Erreurs', 'action' => '403']);
    $routes->connect('/erreur/404/', ['controller' => 'Erreurs', 'action' => '404']);
    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks('DashedRoute');
});

/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
