<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/shop', 'Shop::index');
$routes->get('/shop/product/(:segment)', 'Shop::product/$1');
$routes->add('product/(:any)', 'Shop::product/$1');
$routes->add('blog', 'Blog::index');
$routes->add('blog/post', 'Blog::post');
$routes->get('blog/new', 'Blog::new');

$routes->group('admin', function ($routes){
    $routes->add('user', 'Admin\Users::index');
    $routes->add('users', 'Admin\Users::getAllUsers');
    $routes->add('product/(:any)', 'Admin\Shop::product/$1');

    // Blog routes
    $routes->add('blog', 'Admin\Blog::index');
    $routes->get('blog/new', 'Admin\Blog::createNew');
    $routes->post('blog/new', 'Admin\Blog::saveBlog');
});
