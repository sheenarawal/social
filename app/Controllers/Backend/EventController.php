<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Event;
use App\Models\Posts;
use App\Models\Users;
use CodeIgniter\I18n\Time;
use Myth\Auth\Password;

class EventController extends BaseController
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
        $model = new Event();
        $data = $model;
        if ($search){
            $data =$model->where("(title LIKE '%".$search."%' OR publish_date LIKE '%".$search."%' OR tag LIKE '%".$search."%')", NULL, FALSE);
        }
        $events = $data->paginate($show?$show:10);
        $pager =  $model->pager;
        return  view('pages/backend/event/index',compact('events','pager'));
    }

    public function create()
    {
        return  view('pages/backend/event/create');
    }

    public function store()
    {
        $rules = $this->postRoule();
        //dd($this->validate($rules));
        if($this->validate($rules)){
            $media = $this->request->getFile('media');
            if ($media->isValid() && !$media->hasMoved()){
                $media->move(ROOTPATH . 'public/uploads');
            }
            $postModal = new Event();
            $data = [
                'title'     => $this->request->getVar('title'),
                'slug'      => str_replace(' ','_',$this->request->getVar('title')),
                'location'  => $this->request->getVar('location'),
                'tag'       => $this->request->getVar('tag'),
                'publish_date'   => $this->request->getVar('publish_date'),
                'publish_time'   => $this->request->getVar('publish_time'),
                'description'    => $this->request->getVar('description'),
                'media'      => $media->isValid() ?$media->getName():'',
                'status'     => $this->request->getVar('status'),
                'created_at' => $this->current_time,
            ];
            $postModal->save($data);
            return redirect()->route('backend.event.index')->with('success','Event created successfully');
        }
        return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
    }

    public function edit($id)
    {
        $postModel = new Event();
        $event = $postModel->getEvent('id',$id);
        return view('pages/backend/event/edit',compact('event'));
    }

    public function postRoule()
    {
        $data = [
            'title'        => 'required|min_length[5]|max_length[190]|',
            'location'     => 'required|min_length[5]|max_length[190]|',
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

            $postModal = new Event();
            $post = $postModal->where('id',$id)->first();
            $media = $this->request->getFile('media');
            if ($media->isValid() && !$media->hasMoved()) {
                $media->move(ROOTPATH . 'public/uploads');
                $photo_name = $media->getName();
            }else{
                $photo_name =$post['media'];
            }
            $data = [
                'title'       => $this->request->getVar('title'),
                'slug'        => str_replace(' ','_',$this->request->getVar('slug')),
                'location'    => $this->request->getVar('location'),
                'tag'         => $this->request->getVar('tag'),
                'publish_date'   => $this->request->getVar('publish_date'),
                'publish_time'   => $this->request->getVar('publish_time'),
                'description'    => $this->request->getVar('description'),
                'media'       => $media ?$media->getName():'',
                'status'      => $this->request->getVar('status'),
            ];
            $postModal->update($id,$data);
            return redirect()->route('backend.event.index')->with('success','Event updated successfully');
        }
        return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
    }

    public function delete($id)
    {
        $postModel = new Event();
        $post = $postModel->where('id',$id)->delete();
        return redirect()->back()->with('success','Event deleted successfully');
    }

}
