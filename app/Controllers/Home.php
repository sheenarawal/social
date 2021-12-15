<?php

namespace App\Controllers;
use App\Models\Posts;
use App\Models\Faq;
use App\Models\Event;
use App\Models\Gallery;
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
        $data = '';
        $show=100;
        $show_main=2;
        $show_up_banner=3;
        $show_below_banner=4;
        $model = new Posts();
        $data =$model->where('status',1);
        $event_model = new Event();
        $data_events =$event_model->where('status',1);
        $posts = $data->paginate($show?$show:100);
        $pager =  $model->pager;
        $posts_main = $data->paginate($show_main?$show_main:2);
        $posts_up_banner = $data->paginate($show_up_banner?$show_up_banner:3);
        $posts_down_banner = $data->paginate($show_below_banner?$show_below_banner:4);
        $events = $data_events->paginate($show?$show:100);
        echo  view('pages/index',compact('posts','pager','posts_main','posts_up_banner','posts_down_banner','events'));
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
    public function gallery()
    {
        echo  view('template/header');
        echo  view('template/navbar');
        $data = '';
        $show=100;
        $model = new Gallery();
        $data =$model->where('status',1);
        $gallery = $data->paginate($show?$show:100);
        echo  view('pages/gallery',compact('gallery'));
        echo  view('template/footer');
        echo  view('template/script');
    }
    public function faq()
    {
        echo  view('template/header');
        echo  view('template/navbar');
        $data = '';
        $show=100;
        $model = new Faq();
        $data =$model->where('status',1);
        $faq = $data->paginate($show?$show:100);
        echo  view('pages/faq',compact('faq'));
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
    public function event_single($id)
    {
        echo  view('template/header');
        echo  view('template/navbar');
        $data = '';
        $show=10;
        $model = new Event();
        $where = array(
          'id' => $id,
          'status'   => 1
        );
        $recent_show=3;
        $recent_post =$model->where('status',1);
        $recent_posts = $recent_post->paginate($recent_show?$recent_show:3);
        $data =$model->where($where);
        $posts = $data->paginate($show?$show:10);
        echo  view('pages/event_details',compact('posts','recent_posts'));
        echo  view('template/footer');
        echo  view('template/script');
    }
    public function events()
    {
        echo  view('template/header');
        echo  view('template/navbar');
        $data = '';
        $show=2;
        $model = new Event();
        $data =$model->where('status',1);
        $events = $data->paginate($show?$show:2);
        $pager = $model->pager;
        echo  view('pages/events',compact('events','pager'));
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