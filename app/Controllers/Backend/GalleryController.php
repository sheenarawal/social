<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Gallery;
use App\Models\Users;
use CodeIgniter\I18n\Time;
use Myth\Auth\Password;

class GalleryController extends BaseController
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
        $model = new Gallery();
        $data = $model;
        if ($search){
            $data =$model->where("(title LIKE '%".$search."%' OR publish_date LIKE '%".$search."%' OR category LIKE '%".$search."%')", NULL, FALSE);
            //$data =$model->orLike('title',$search)->orLike('publish_date',$search)->orLike('category',$search);
        }
        $gallery = $data->paginate($show?$show:10);
        $pager =  $model->pager;
        return  view('pages/backend/gallery/index',compact('gallery','pager'));
    }

    public function create()
    {
        return  view('pages/backend/gallery/create');
    }

    public function store()
    {
        $rules = $this->postRoule();
        //dd($this->validate($rules));
        if($this->validate($rules)){

            $media = $this->request->getFile('media');
            if ($media && !$media->hasMoved()){
                $media->move(ROOTPATH . 'public/uploads');
            }
            $galleryModal = new Gallery();
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
            $galleryModal->save($data);
            return redirect()->route('backend.gallery.index')->with('success','Gallery Image created successfully');
        }
        return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
    }

    public function edit($id)
    {
        $galleryModel = new Gallery();
        $image = $galleryModel->getgallery('id',$id);
        return view('pages/backend/gallery/edit',compact('image'));
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

            $postModal = new Gallery();
            $post = $postModal->where('id',$id)->first();
            $media = $this->request->getFile('media');
            if (!empty($media) && $media->isValid() && !$media->hasMoved()) {
                $media->move(ROOTPATH . 'public/uploads');
                $photo_name = $media->getName();
            }else{
                $photo_name =$post['media'];
            }
            $data = [
                'title'       => $this->request->getVar('title'),
                'slug'        => str_replace(' ','_',$this->request->getVar('slug')),
                'category'    => $this->request->getVar('category'),
                'tag'         => $this->request->getVar('tag'),
                'publish_date'   => $this->request->getVar('publish_date'),
                'publish_time'   => $this->request->getVar('publish_time'),
                'description'    => $this->request->getVar('description'),
                'media'       => $media ?$media->getName():'',
                'status'      => $this->request->getVar('status'),
            ];
            $postModal->update($id,$data);
            return redirect()->route('backend.gallery.index')->with('success','Gallery Image updated successfully');
        }
        return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
    }

    public function delete($id)
    {
        $galleryModel = new Gallery();
        $gallery = $galleryModel->where('id',$id)->delete();
        return redirect()->back()->with('success','Gallery Image Deleted Successfully');
    }

}
