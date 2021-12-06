<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Faq;
use App\Models\Posts;
use App\Models\Users;
use CodeIgniter\I18n\Time;
use Myth\Auth\Password;

class FaqController extends BaseController
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
        $model = new Faq();
        $data = $model;
        if ($search){
            $data =$model->where("(title LIKE '%".$search."%' OR description LIKE '%".$search."%')", NULL, FALSE);
            //$data =$model->orLike('title',$search)->orLike('publish_date',$search)->orLike('category',$search);
        }
        $faqs = $data->paginate($show?$show:10);
        $pager =  $model->pager;
        return  view('pages/backend/faq/index',compact('faqs','pager'));
    }

    public function create()
    {
        return  view('pages/backend/faq/create');
    }

    public function store()
    {
        $rules = $this->postRoule();
        if($this->validate($rules)){
            $postModal = new Faq();
            $data = [
                'user_id'      => session('logged_in')?session('logged_in')['auth']['id']:1,
                'title'      => $this->request->getVar('question'),
                'description'    => $this->request->getVar('answer'),
                'status'     => $this->request->getVar('status'),
                'created_at'     => $this->current_time,
            ];
            $postModal->save($data);
            return redirect()->route('backend.faq.index')->with('success','Faq created successfully');
        }
        return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
    }

    public function edit($id)
    {
        $faqModel = new Faq();
        $faq = $faqModel->get_faq('id',$id);
        return view('pages/backend/faq/edit',compact('faq'));
    }

    public function postRoule()
    {
        $data = [
            'question'        => 'required|min_length[5]|max_length[190]|',
            'answer'       => 'required|min_length[5]',
            'status'       => 'required',
        ];
        return $data;
    }
    public function update($id)
    {
        $rules = $this->postRoule();
        if($this->validate($rules)){
            $faqModal = new Faq();
            $data = [
                'user_id'      => session('logged_in')?session('logged_in')['auth']['id']:1,
                'title'      => $this->request->getVar('question'),
                'description'    => $this->request->getVar('answer'),
                'status'     => $this->request->getVar('status'),
            ];
            $faqModal->update($id,$data);
            return redirect()->route('backend.faq.index')->with('success','Faq updated successfully');
        }
        return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
    }

    public function delete($id)
    {
        $faqModel = new Faq();
        $faq = $faqModel->where('id',$id)->delete();
        return redirect()->back()->with('success','Faq deleted successfully');
    }

}
