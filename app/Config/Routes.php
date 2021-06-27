<?php

namespace Config;

use PHPUnit\TextUI\XmlConfiguration\Group;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'App\Controllers\Home::index');
// $routes->get('/aboutus', 'Home::aboutus');

$routes->get('/', 'Home::home');
// $routes->get('/aboutus', 'Home::aboutus');

$routes->group('/abouts', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Abouts::index');
});

$routes->group('/news', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'News::index');
    $routes->get('page', 'News::index');
    $routes->get('page/(:num)', 'News::index/$1');
    $routes->get('category/(:any)/page/(:num)', 'News::byCategory/$1/$2');
    $routes->get('category/(:any)', 'News::byCategory/$1');
    $routes->get('tags/(:any)/page/(:num)', 'News::byTags/$1/$2');
    $routes->get('tags/(:any)', 'News::byTags/$1');
    $routes->get('read', 'News::index');
    $routes->get('(:any)', 'News::article');
});

$routes->group('/product', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'ProductCatalog::index');
    $routes->get('demo', 'ProductCatalog::index');
    $routes->get('(:any)', 'ProductCatalog::detailProduct');
});

$routes->group('/ruangadmin/login', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Login::index');
    $routes->post('action', 'Login::action');
    $routes->post('destroy', 'Login::destroy');
});

$routes->group('ruangadmin', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('/', 'Dashboard::index');
    $routes->get('dashboard', 'Dashboard::index');

    // user profile routes

    $routes->group('profile', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
        $routes->get('/', 'Profile::index');
        $routes->post('update', 'Profile::update');
    });

    // User Management routes
    $routes->group('users', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
        $routes->get('/', 'Users::index');
        $routes->post('store', 'Users::store');
        $routes->post('delete', 'Users::delete');
        $routes->post('update', 'Users::update');
        $routes->post('reset/(:any)', 'Users::reset_/$1');
        $routes->post('set/(:any)', 'Users::set_/$1');
        $routes->post('delete-multiple', 'Users::deleteMultiple');
        $routes->post('reset-multiple', 'Users::resetMultiple');
        $routes->post('set-multiple', 'Users::setMultiple');
    });

    // Category Management routes
    $routes->group('category', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
        $routes->get('/', 'Category::index');
        $routes->post('store', 'Category::store');
        $routes->post('delete', 'Category::delete');
        $routes->post('update', 'Category::update');
        $routes->post('delete-multiple', 'Category::deleteMultiple');
    });

    $routes->group('category-product', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
        $routes->get('/', 'CategoryProduct::index');
        $routes->post('store', 'CategoryProduct::store');
        $routes->post('delete', 'CategoryProduct::delete');
        $routes->post('update', 'CategoryProduct::update');
        $routes->post('delete-multiple', 'CategoryProduct::deleteMultiple');
    });

    // Jobs Management routes
    $routes->group('jobs', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
        $routes->get('/', 'Jobs::index');
        $routes->post('store', 'Jobs::store');
        $routes->post('delete', 'Jobs::delete');
        $routes->post('update', 'Jobs::update');
        $routes->post('delete-multiple', 'Jobs::deleteMultiple');
    });

    // Teams Management routes
    $routes->group('teams', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
        $routes->get('/', 'Teams::index');
        $routes->post('store', 'Teams::store');
        $routes->post('delete', 'Teams::delete');
        $routes->post('update', 'Teams::update');
        $routes->post('delete-multiple', 'Teams::deleteMultiple');
    });

    $routes->group('clients', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
        $routes->get('/', 'Clients::index');
        $routes->post('store', 'Clients::store');
        $routes->post('delete', 'Clients::delete');
        $routes->post('update', 'Clients::update');
        $routes->post('delete-multiple', 'Clients::deleteMultiple');
        $routes->post('set/(:any)', 'Clients::set_/$1');
        $routes->post('set-multiple', 'Clients::setMultiple');
    });

    $routes->group('article', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
        $routes->get('/', 'Article::index');
        $routes->post('check-title', 'Article::checkTitle');
        $routes->post('store', 'Article::store');
        $routes->post('update', 'Article::update');
        $routes->post('set/(:any)', 'Article::set_/$1');
        $routes->post('delete', 'Article::delete');
        $routes->post('uploads(:any)', 'Article::uploads');
        $routes->post('set/(:any)', 'Article::set_/$1');
        $routes->post('delete-multiple', 'Article::deleteMultiple');
        $routes->post('set-multiple', 'Article::setMultiple');
    });
});

$routes->group('api', ['namespace' => 'App\Controllers\Api'], function ($routes) {
    $routes->group('data', ['namespace' => 'App\Controllers\Api'], function ($routes) {
        $routes->post('options/(:any)', 'Admin::getDataOption/$1');
        $routes->post('users', 'Admin::dataUsers');
        $routes->post('category', 'Admin::dataCategory');
        $routes->post('category-product', 'Admin::dataCategoryProduct');
        $routes->post('jobs', 'Admin::dataJobs');
        $routes->post('teams', 'Admin::dataTeams');
        $routes->post('article', 'Admin::dataArticle');
        $routes->post('clients', 'Admin::dataClients');
        $routes->get('profile', 'Admin::dataProfile');
    });

    $routes->group('row', ['namespace' => 'App\Controllers\Api'], function ($routes) {
        $routes->post('users/(:any)', 'Admin::getRowUsers/$1');
        $routes->post('category/(:any)', 'Admin::getRowCategory/$1');
        $routes->post('category-product/(:any)', 'Admin::getRowCategoryProduct/$1');
        $routes->post('jobs/(:any)', 'Admin::getRowJobs/$1');
        $routes->post('teams/(:any)', 'Admin::getRowTeams/$1');
        $routes->post('article/(:any)', 'Admin::getRowArticle/$1');
        $routes->post('clients/(:any)', 'Admin::getRowClients/$1');
    });

    $routes->group('public', ['namespace' => 'App\Controllers\Api'], function ($routes) {
        $routes->group('get', ['namespace' => 'App\Controllers\Api'], function ($routes) {
            $routes->get('article', 'PublicApi::getArticle');
            $routes->get('category', 'PublicApi::getCategory');
            $routes->get('tags', 'PublicApi::getTags');
            $routes->get('teams', 'PublicApi::getTeams');
            $routes->get('clients', 'PublicApi::getClients');
        });
    });
});

// Test Route
$routes->group('test', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Test::test');
});


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
