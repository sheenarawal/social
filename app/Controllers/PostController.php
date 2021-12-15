<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Posts;
use App\Models\Users;
use CodeIgniter\I18n\Time;
use Myth\Auth\Password;

class PostController extends BaseController
{

    protected $pager;
    protected $db;
    protected $current_time;

    public function __construct()
    {
        $this->pager = service('pager');
        $this->current_time = new Time('now');
        $this->db = db_connect();
    }

    public function index()
    {
        $search = $this->request->getGet('search');
        $show = $this->request->getGet('show');
        $model = new Posts();
        $data = $model;
        if ($search){
            $data =$model->where("(title LIKE '%".$search."%' OR publish_date LIKE '%".$search."%' OR category LIKE '%".$search."%')", NULL, FALSE);
        }
        $posts = $data->paginate($show?$show:10);
        $latest = $data->orderBy('id','DESC')->get()->getResultArray();

        //$category = $model->groupBy('category')->findAll();
        $pager =  $model->pager;
        //dd($category);
        return  view('pages/post',compact('posts','pager'));
    }

    public function show($id)
    {
        $postModel = new Posts();
        $post = $postModel->where('id',$id)->first();
        $prev = $postModel->get()->getPreviousRow();
        $next = $postModel->get()->getNextRow();
        return  view('pages/post-details',compact('post','next','prev'));
    }

}
