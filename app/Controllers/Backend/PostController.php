<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Posts;
use App\Models\Users;
use CodeIgniter\I18n\Time;
use Myth\Auth\Password;

class PostController extends BaseController
{

    protected $pager;
    protected $current_time;

    public function __construct()
    {
        $this->pager = service('pager');
        $this->current_time = new Time('now');
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
        return  view('pages/backend/post/create');
    }

    public function store()
    {
        $rules = $this->postRoule();
        //dd($this->validate($rules));
        if($this->validate($rules)){

            $media = $this->request->getFile('media');
            if ($media && !$media->hasMoved()){
                $media->move(WRITEPATH . 'uploads');
            }
            $postModal = new Posts();
            $data = [
                'title'      => $this->request->getVar('title'),
                'slug'      => str_replace(' ','_',$this->request->getVar('slug')),
                'category'      => $this->request->getVar('category'),
                'tag'      => $this->request->getVar('tag'),
                'publish_date'      => $this->request->getVar('publish_date'),
                'publish_time'      => $this->request->getVar('publish_time'),
                'description'      => $this->request->getVar('description'),
                'media'      => $media ?$media->getName():'',
                'status'      => $this->request->getVar('status'),
            ];
            $postModal->save($data);
            return redirect()->route('backend.post.index')->with('success','Post created successfully');
        }
        return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
    }

    public function edit($id)
    {
        $postModel = new Posts();
        $post = $postModel->getpost('id',$id);
        return view('pages/backend/post/edit',compact('post'));
    }

    public function postRoule()
    {
        $data = [
            'title'        => 'required|min_length[5]|max_length[190]|',
            'slug'         => 'required|min_length[5]|max_length[190]|',
            'category'     => 'required|min_length[5]|max_length[190]|',
            'tag'          => 'required|min_length[5]|max_length[190]|',
            'publish_date'      => 'required|min_length[5]|max_length[190]|',
            'publish_time'      => 'required|min_length[5]|max_length[190]|',
            'media'        => 'permit_empty|uploaded[media]|mime_in[media,image/jpg,image/jpeg,image/png]|max_size[media,1024]',
            'description'       => 'required|min_length[5]',
            'status'       => 'required',
        ];
        return $data;
    }
    public function update($id)
    {
        $rules = $this->postRoule();
        if($this->validate($rules)){
            $media = $this->request->getFile('media');
            if ($media && !$media->hasMoved()){
                $media->move(ROOTPATH . 'public/uploads');
            }
            $postModal = new Posts();
            //$post = $postModal->getpost('id',$id);
            $data = [
                'title'      => $this->request->getVar('title'),
                'slug'      => str_replace(' ','_',$this->request->getVar('slug')),
                'category'      => $this->request->getVar('category'),
                'tag'      => $this->request->getVar('tag'),
                'publish_date'      => $this->request->getVar('publish_date'),
                'publish_time'      => $this->request->getVar('publish_time'),
                'description'      => $this->request->getVar('description'),
                'media'      => $media ?$media->getName():'',
                'status'      => $this->request->getVar('status'),
            ];
            $postModal->update($id,$data);
            return redirect()->route('backend.post.index')->with('success','Post updated successfully');
        }
        return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
    }

    public function delete($id)
    {
        $postModel = new Posts();
        $post = $postModel->where('id',$id)->delete();
        return redirect()->back()->with('success','post deleted successfully');
    }

}
