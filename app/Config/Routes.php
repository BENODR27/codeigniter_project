<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\ProductController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('products', function ($routes) {
    $routes->get('browse', 'ProductController::browse');
    $routes->get('add', 'ProductController::add');
    $routes->post('save', 'ProductController::save');
    $routes->post('update', 'ProductController::update');

    $routes->get('edit/(:num)', 'ProductController::edit/$1'); // Use (:num) to capture a numeric parameter
    $routes->get('view/(:num)', 'ProductController::view/$1');
    $routes->get('delete/(:num)', 'ProductController::delete/$1');
});

service('auth')->routes($routes);



// Certainly! In addition to route groups and parameter capturing, CodeIgniter 4 provides several other features and options for handling routes. Here are some additional concepts and examples related to routes:

//     ### 1. **Named Routes:**
    
//     You can assign names to routes, making it easier to reference them in your application:
    
//     ```php
//     $routes->get('products/browse', 'ProductController::browse', ['as' => 'products.browse']);
//     ```
    
//     You can then generate URLs for named routes using the `route_to` function:
    
//     ```php
//     $url = route_to('products.browse');
//     ```
    
//     ### 2. **Controller Namespace:**
    
//     If your controllers are organized into namespaces, you can reflect this in your routes:
    
//     ```php
//     $routes->group('admin', ['namespace' => 'Admin'], function ($routes) {
//         $routes->get('dashboard', 'DashboardController::index');
//     });
//     ```
    
//     ### 3. **HTTP Verbs:**
    
//     Specify the HTTP verbs for routes:
    
//     ```php
//     $routes->post('products', 'ProductController::create');
//     $routes->put('products/(:num)', 'ProductController::update/$1');
//     $routes->delete('products/(:num)', 'ProductController::delete/$1');
//     ```
    
//     ### 4. **Wildcard Routes:**
    
//     Capture any URI segment with a wildcard:
    
//     ```php
//     $routes->get('products/(:any)', 'ProductController::show/$1');
//     ```
    
//     ### 5. **Regex Constraints:**
    
//     Define custom regex constraints for parameters:
    
//     ```php
//     $routes->get('products/([a-z]+)', 'ProductController::show/$1');
//     ```
    
//     ### 6. **Subdomain Routing:**
    
//     Route based on subdomains:
    
//     ```php
//     $routes->group('api', ['subdomain' => 'api'], function ($routes) {
//         $routes->get('products', 'ApiController::index');
//     });
//     ```
    
//     ### 7. **Route Filters:**
    
//     Apply filters to routes for middleware-like functionality:
    
//     ```php
//     $routes->get('admin/dashboard', 'AdminController::dashboard', ['filter' => 'auth']);
//     ```
    
//     ### 8. **Closure Routes:**
    
//     Define routes using closure functions:
    
//     ```php
//     $routes->add('welcome', function () {
//         return 'Welcome to my website!';
//     });
//     ```
    
//     ### 9. **Global Constraints:**
    
//     Define global constraints for route parameters:
    
//     ```php
//     $routes->add('{locale}/products/(:num)', 'ProductController::show/$2', ['locale' => 'en|fr']);
//     ```
    
//     These are just a few examples, and the CodeIgniter 4 documentation provides comprehensive information on routing: [CodeIgniter 4 - Routing](https://codeigniter4.github.io/CodeIgniter4/incoming/routing.html). Explore the documentation for more advanced routing features and options that suit your application's needs.