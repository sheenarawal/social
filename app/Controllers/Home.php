<?php

namespace App\Controllers;

class Home extends BaseController
{
    function __construct() {
        //parent::__construct();

        // Load url helper
        //$this->load->helper('url');
    }

    public function index()
    {
        echo  view('template/header');
        echo  view('template/navbar');
        echo  view('pages/index');
        echo  view('template/footer');
        echo  view('template/script');
    }
    public function about()
    {
        echo  view('template/header');
        echo  view('template/navbar');
        echo  view('pages/about');
        echo  view('template/footer');
        echo  view('template/script');
    }
    public function faq()
    {
        echo  view('template/header');
        echo  view('template/navbar');
        echo  view('pages/faq');
        echo  view('template/footer');
        echo  view('template/script');
    }
    public function contact()
    {
        echo  view('template/header');
        echo  view('template/navbar');
        echo  view('pages/contact');
        echo  view('template/footer');
        echo  view('template/script');
    }
    public function events()
    {
        echo  view('template/header');
        echo  view('template/navbar');
        echo  view('pages/events');
        echo  view('template/footer');
        echo  view('template/script');
    }
    public function home()
    {

        echo  view('template/backend/header');
        echo  view('template/backend/sidebar');
        echo  view('pages/backend/dashboard');

        echo  view('template/backend/copyright');
        echo  view('template/backend/footer');
        echo  view('template/backend/script');
    }
}
