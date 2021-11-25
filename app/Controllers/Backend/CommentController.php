<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Comments;
use App\Models\Posts;
use App\Models\Users;
use CodeIgniter\I18n\Time;
use Myth\Auth\Password;

class CommentController extends BaseController
{


    protected $pager;
    protected $auth;
    protected $current_time;

    public function __construct()
    {
        $this->pager = service('pager');
        $this->current_time = new Time('now');
        $this->auth = session()->get('logged_in')['auth'];
    }

    public function index()
    {
        $data = '';
        $search = $this->request->getGet('search');
        $show = $this->request->getGet('show');
        $model = new Posts();
        $data = $model;
        if ($search){
            $data =$model->where("(title LIKE '%".$search."%' OR publish_date LIKE '%".$search."%' OR category LIKE '%".$search."%')", NULL, FALSE);
            //$data =$model->orLike('title',$search)->orLike('publish_date',$search)->orLike('category',$search);
        }
        $posts = $data->paginate($show?$show:10);
        $pager =  $model->pager;
        return  view('pages/backend/post/index',compact('posts','pager'));
    }

    public function create()
    {
        $type = $this->request->getGet('type');
        $id = $this->request->getGet('id');
        if ($type=='post')
        {
            $post_model = new Posts;
            $comment_for = $post_model->getpost('id',$id);
        }else{
            $comment_for = '1';
        }
        return  view('pages/backend/comment/create',compact('type','comment_for'));
    }

    public function store()
    {
        $rules = $this->postRoule();
        if($this->validate($rules)){

            $media = $this->request->getFile('media');
            if ($media && !$media->hasMoved()){
                $media->move(WRITEPATH . 'uploads');
            }
            $postModal = new Comments();
            $data = [
                'title'       => $this->request->getVar('title'),
                'type'        => $this->request->getVar('type'),
                'model_id'        => $this->request->getVar('model_id'),
                'user_id'     => $this->auth['id'],
                'rating'      => $this->request->getVar('publish_time'),
                'description' => $this->request->getVar('description'),
                'status'      => $this->request->getVar('status'),
                'created_at'  => $this->request->getVar('status'),
            ];
            $postModal->save($data);
            return redirect()->route('backend.post.index')->with('success','Comments created successfully');
        }
        return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
    }

    public function edit()
    {
        $id = $this->request->getGet('id');
        if ($id){
            $postModel = new Comments();
            $post = $postModel->getcomment('id',$id);
            return view('pages/backend/post/edit',compact('post'));
        }
        return redirect()->back()->with('error','please select a post');
    }

    public function postRoule()
    {
        $data = [
            'title'       => 'required|min_length[5]|max_length[190]|',
            'type'        => 'required|min_length[5]|max_length[190]|',
            'model_id'        => 'required|min_length[5]|max_length[190]|',
            'rating'      => 'required|min_length[5]|max_length[190]|',
            'description' => 'required|min_length[5]',
            'status'      => 'required',
        ];
        return $data;
    }
    public function update()
    {
        $id = $this->request->getVar('comment_id');
        if ($id){
            $rules = $this->postRoule();
            if($this->validate($rules)){
                $media = $this->request->getFile('media');
                if ($media && !$media->hasMoved()){
                    $media->move(WRITEPATH . 'uploads');
                }
                $postModal = new Comments();
                $data = [
                    'title'       => $this->request->getVar('title'),
                    'type'        => $this->request->getVar('type'),
                    'model_id'        => $this->request->getVar('model_id'),
                    'user_id'     => $this->auth['id'],
                    'rating'      => $this->request->getVar('publish_time'),
                    'description' => $this->request->getVar('description'),
                    'status'      => $this->request->getVar('status'),
                    'created_at'  => $this->request->getVar('status'),
                ];
                $postModal->update($id,$data);
                return redirect()->route('backend.post.index')->with('success','Post updated successfully');
            }
            return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
        }
        return redirect()->route('backend.post.index')->with('success','please select a Post');
    }

    public function delete()
    {
        $id = $this->request->getGet('id');
        if ($id){
            $postModel = new Posts();
            $post = $postModel->where('id',$id)->delete();
            return redirect()->back()->with('success','post deleted successfully');
        }
        return redirect()->back()->with('error','please select a post');
    }

}
