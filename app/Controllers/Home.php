<?php

namespace App\Controllers;
use App\Models\Posts;
use App\Models\Faq;
use App\Models\Event;
use PhpParser\Node\Expr\AssignOp\Mod;

class Home extends BaseController
{
    function __construct() {
        //parent::__construct();
        // Load url helper
        //$this->load->helper('url');
    }

    public function index()
    {
        $postModel = new Posts();
        $eventModel = new Event();
        $posts = $postModel->where('status',1)->paginate(5);;
        $events = $eventModel->where('status',1)->paginate(4);
        return  view('pages/index',compact('posts','events'));
    }
    public function about()
    {
        return  view('pages/about');
    }
    public function faq()
    {
        $data = '';
        $show=100;
        $model = new Faq();
        $data =$model->where('status',1);
        $faq = $data->paginate($show?$show:100);
        return  view('pages/faq',compact('faq'));
    }
    public function contact()
    {
        return  view('pages/contact');
    }
    public function event_single($id)
    {
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
        return  view('pages/event_details',compact('posts','recent_posts'));
    }
    public function events()
    {
        $data = '';
        $show=2;
        $model = new Event();
        $data =$model->where('status',1);
        $events = $data->paginate($show?$show:2);
        $pager = $model->pager;
        return  view('pages/events',compact('events','pager'));
    }
    public function home()
    {
        return view('pages/backend/dashboard');

    }
}