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
$routes->add('blog/post/(:any)', 'Blog::post/$1');
$routes->get('blog/new', 'Blog::new');
$routes->post('blog/new', 'Blog::new');
$routes->add('blog/delete/(:any)', 'Blog::delete/$1');
$routes->get('blog/edit/(:any)', 'Blog::edit/$1');
$routes->post('blog/edit/(:any)', 'Blog::edit/$1');
$routes->get('posts', 'Posts::index');
$routes->get('posts/where', 'Posts::where');

$routes->group('admin', function ($routes){
    $routes->add('user', 'Admin\Users::index');
    $routes->add('users', 'Admin\Users::getAllUsers');
    $routes->add('product/(:any)', 'Admin\Shop::product/$1');

    // Blog routes
    $routes->add('blog', 'Admin\Blog::index');
    $routes->get('blog/new', 'Admin\Blog::createNew');
    $routes->post('blog/new', 'Admin\Blog::saveBlog');
});
