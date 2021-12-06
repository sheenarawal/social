<?php

namespace Config;

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
$routes->get('/', 'Home::index',['as'=>'frontend.index']);
$routes->get('/about', 'Home::about',['as'=>'frontend.about']);
$routes->get('/events', 'Home::events',['as'=>'frontend.events']);
$routes->get('/faq', 'Home::faq',['as'=>'frontend.faq']);
$routes->get('/contact', 'Home::contact',['as'=>'frontend.contact']);

$routes->get('/payment/view', 'AuthController::paymentView',['as'=>'payment.view']);
$routes->post('/signup/payment/store', 'AuthController::paymentStore',['as'=>'register.payment.store']);

$routes->get('/login-redirect' ,function (){
    $auth = session('logged_in')?session('logged_in')['auth']:false;
    if ($auth){
        return redirect()->route('backend.dashboard')->with('success','Welcome Back');
    }else{
        return redirect()->route('login')->with('error','Login First');
    }
},['as'=>'login_redirect']);

$routes->group('/', ['filter' => 'guest'], function($routes){
    $routes->get('/login', 'AuthController::login',['as'=>'login']);
    $routes->get('/signup', 'AuthController::register',['as'=>'register']);
    $routes->post('/signup/store', 'AuthController::store',['as'=>'register.store']);
    $routes->post('/login/store', 'AuthController::loginProceed',['as'=>'login.store']);
});
$routes->group('/', ['filter' => 'login'], function($routes){

    $routes->get('/logout', 'AuthController::logout',['as'=>'logout']);
    $routes->get('dashboard', 'Backend/DashboardController::dashboard',['as'=>'backend.dashboard']);
    $routes->get('profile', 'Backend/DashboardController::profile',['as'=>'backend.profile']);
    $routes->group('post',['namespace' => 'App\Controllers\Backend'], function($routes){
        $routes->get('index', 'PostController::index',['as'=>'backend.post.index']);
        $routes->get('create', 'PostController::create',['as'=>'backend.post.create']);
        $routes->post('store', 'PostController::store',['as'=>'backend.post.store']);
        $routes->post('update/(:num)', 'PostController::update/$1',['as'=>'backend.post.update']);
        $routes->get('edit/(:num)', 'PostController::edit/$1',['as'=>'backend.post.edit']);
        $routes->get('delete/(:num)', 'PostController::delete/$1',['as'=>'backend.post.delete']);
    });
    $routes->group('event',['namespace' => 'App\Controllers\Backend'], function($routes){
        $routes->get('index', 'EventController::index',['as'=>'backend.event.index']);
        $routes->get('create', 'EventController::create',['as'=>'backend.event.create']);
        $routes->post('store', 'EventController::store',['as'=>'backend.event.store']);
        $routes->post('update/(:num)', 'EventController::update/$1',['as'=>'backend.event.update']);
        $routes->get('edit/(:num)', 'EventController::edit/$1',['as'=>'backend.event.edit']);
        $routes->get('delete/(:num)', 'EventController::delete/$1',['as'=>'backend.event.delete']);
    });
    /*$routes->group('comment', ['namespace' => 'App\Controllers\Backend'],function($routes){
        $routes->get('index', 'Backend/CommentController::index',['as'=>'backend.comment.index']);
        $routes->get('create', 'Backend/CommentController::create',['as'=>'backend.comment.create']);
        $routes->post('store', 'Backend/CommentController::store',['as'=>'backend.comment.store']);
        $routes->post('update', 'Backend/CommentController::update',['as'=>'backend.comment.update']);
        $routes->get('edit', 'Backend/CommentController::edit',['as'=>'backend.comment.edit']);
        $routes->get('delete', 'Backend/CommentController::delete',['as'=>'backend.comment.delete']);
    });*/
    $routes->group('faq',['namespace' => 'App\Controllers\Backend'], function($routes){
        $routes->get('index', 'FaqController::index',['as'=>'backend.faq.index']);
        $routes->get('create', 'FaqController::create',['as'=>'backend.faq.create']);
        $routes->post('store', 'FaqController::store',['as'=>'backend.faq.store']);
        $routes->post('update/(:num)', 'FaqController::update/$1',['as'=>'backend.faq.update']);
        $routes->get('edit/(:num)', 'FaqController::edit/$1',['as'=>'backend.faq.edit']);
        $routes->get('delete/(:num)', 'FaqController::delete/$1',['as'=>'backend.faq.delete']);
    });
    $routes->group('notice',['namespace' => 'App\Controllers\Backend'], function($routes){
        $routes->add('index', 'QueryController::index',['as'=>'backend.notice.index']);
        $routes->get('create', 'QueryController::create',['as'=>'backend.notice.create']);
        $routes->post('store', 'QueryController::store',['as'=>'backend.notice.store']);
        $routes->post('update/(:num)', 'QueryController::update/$1',['as'=>'backend.notice.update']);
        $routes->add('edit/(:num)', 'QueryController::edit/$1',['as'=>'backend.notice.edit']);
        $routes->get('delete/(:num)', 'QueryController::delete/$1',['as'=>'backend.notice.delete']);
    });
    $routes->group('query',['namespace' => 'App\Controllers\Backend'], function($routes){
        $routes->add('index', 'QueryController::index',['as'=>'backend.query.index']);
        $routes->get('create', 'QueryController::create',['as'=>'backend.query.create']);
        $routes->post('store', 'QueryController::store',['as'=>'backend.query.store']);
        $routes->post('update/(:num)', 'QueryController::update/$1',['as'=>'backend.query.update']);
        $routes->add('edit/(:num)', 'QueryController::edit/$1',['as'=>'backend.query.edit']);
        $routes->get('delete/(:num)', 'QueryController::delete/$1',['as'=>'backend.query.delete']);
    });
    $routes->group('calendar',['namespace' => 'App\Controllers\Backend'], function($routes){
        $routes->add('index', 'CalendarController::index',['as'=>'backend.calendar.index']);
        $routes->add('view', 'CalendarController::view',['as'=>'backend.calendar.view']);
        $routes->get('create', 'CalendarController::create',['as'=>'backend.calendar.create']);
        $routes->post('store', 'CalendarController::store',['as'=>'backend.calendar.store']);
        $routes->post('update/(:num)', 'CalendarController::update/$1',['as'=>'backend.calendar.update']);
        $routes->add('edit/(:num)', 'CalendarController::edit/$1',['as'=>'backend.calendar.edit']);
        $routes->get('delete/(:num)', 'CalendarController::delete/$1',['as'=>'backend.calendar.delete']);
    });
    $routes->group('member',['namespace' => 'App\Controllers\Backend'], function($routes){
        $routes->get('dashboard', 'DashboardController::dashboard',['as'=>'member.dashboard']);
        $routes->get('sendemail', 'MemberController::sendmail',['as'=>'backend.member.sendemail']);
        $routes->get('email', 'MemberController::email',['as'=>'backend.member.email']);
        $routes->get('index', 'MemberController::index',['as'=>'backend.member.index']);
        $routes->get('create', 'MemberController::create',['as'=>'backend.member.create']);
        $routes->post('store', 'MemberController::store',['as'=>'backend.member.store']);
        $routes->post('status', 'MemberController::status',['as'=>'backend.member.status']);
        $routes->post('update/(:num)', 'MemberController::update/$1',['as'=>'backend.member.update']);
        $routes->get('edit/(:num)', 'MemberController::edit/$1',['as'=>'backend.member.edit']);
        $routes->get('delete/(:num)', 'MemberController::delete/$1',['as'=>'backend.member.delete']);

      /*  $routes->group('(:alpha)',['namespace' => 'App\Controllers\Backend'], function($routes){
            $routes->add('index', 'QueryController::index/$1',['as'=>'backend.query.index']);
            $routes->get('create', 'QueryController::create/$1',['as'=>'backend.query.create']);
            $routes->post('store', 'QueryController::store/$1',['as'=>'backend.query.store']);
            $routes->post('update/(:num)', 'QueryController::update/$1/$2',['as'=>'backend.query.update']);
            $routes->add('edit/(:num)', 'QueryController::edit/$1/$2',['as'=>'backend.query.edit']);
            $routes->get('delete/(:num)', 'QueryController::delete/$1/$2',['as'=>'backend.query.delete']);
        });*/
    });
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
