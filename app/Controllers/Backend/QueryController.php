<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Posts;
use App\Models\Query;
use App\Models\Users;
use CodeIgniter\I18n\Time;
use Myth\Auth\Password;

class QueryController extends BaseController
{

    protected $pager;
    protected $current_time;
    protected $auth;

    public function __construct()
    {
        $this->pager = service('pager');
        $this->current_time = new Time('now');
        $this->auth = session()->get('logged_in')['auth'];
    }


    public function index()
    {
        $type = $this->current_route(3);
        $data = '';
        $search = $this->request->getGet('search');
        $show = $this->request->getGet('show');
        $model = new Query();
        $data = $model->where('type',$type);
        if ($search){
            $data =$model->where("(name LIKE '%".$search."%' OR subject LIKE '%".$search."%' OR description LIKE '%".$search."%')", NULL, FALSE);
        }
        $queries = $data->paginate($show?$show:10);
        $pager =  $model->pager;
        return  view('pages/backend/query/index',compact('queries','pager','type'));
    }

    public function create()
    {
        $type = $this->current_route(3);
        if (!in_array($type,['query','reply','notice'])){
            return redirect()->route('backend.query.index',$type)->with('error','please select a valid type');
        }

        $model_id = 0;
        if ($type=='reply'){
            $model_id = $this->request->getVar('model_id');
        }
        $userModel = new Users();
        $users = $userModel->where('role',1)->findAll();
        return  view('pages/backend/query/create',compact('model_id','users','type'));
    }

    public function store()
    {
        $type = $this->current_route(3);
        $rules = $this->postRoule();
        if($this->validate($rules)){
            $model_id = $this->request->getVar('model_id')?$this->request->getVar('model_id'):0;
            $postModal = new Query();
            $data = [
                'name'        => $this->request->getVar('name'),
                'subject'     => $this->request->getVar('subject'),
                'description' => $this->request->getVar('description'),
                'type'        => $type,
                'status'      => 0,
                'send_by'     => $this->auth['id'],
                'send_to'     => $this->request->getVar('send_to'),
                'model_id'     => $model_id,
                'created_at'  => $this->current_time,
            ];
            //dd($data);
            $postModal->save($data);
            return redirect()->route('backend.query.index',[$type])->with('success',ucfirst($type).'created successfully');
        }
        return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
    }

    public function edit($id=0)
    {
        $type = $this->current_route(3);
        if ($id){
            $postModel = new Query();
            $query = $postModel->get_query('id',$id);
            $userModel = new Users();
            $users = $userModel->where('role',1)->findAll();
            $send = $query['send_by']==1?$query['send_to']:$query['send_by'];
            $user = $userModel->where('id',$send)->first();
            //$type = $this->type;
            return view('pages/backend/query/edit',compact('query','users','user','type','id'));
        }
        return redirect()->back()->with('error','please select a'.$type);
    }

    public function postRoule()
    {
        $data = [
            'name'        => 'required|min_length[2]|max_length[190]|',
            'subject'         => 'required|min_length[5]|max_length[190]|',
            'send_to'     => 'required|max_length[190]|',
            'description'       => 'required|min_length[5]',
        ];
        return $data;
    }
    public function update($id)
    {
        $type = $this->current_route(3);
        //$id = $this->request->getVar('query_id');
        if ($id){
            $rules = $this->postRoule();
            $user_role = $this->auth['role'] == 0?'admin':'member';
            if($this->validate($rules)){
                $media = $this->request->getFile('media');
                if ($media && !$media->hasMoved()){
                    $media->move(WRITEPATH . 'uploads');
                }
                $postModal = new Query();
                $data = [
                    'name'        => $this->request->getVar('name'),
                    'subject'     => $this->request->getVar('subject'),
                    'description' => $this->request->getVar('description'),
                    'send_by'     => $this->auth['id'],
                    'send_to'     => $this->request->getVar('send_to'),
                    'status'     => $user_role =='admin'? $this->request->getVar('status'):0,
                    'created_at'  => $this->current_time,
                ];
                //dd($data);
                $postModal->update($id,$data);
                return redirect()->route('backend.query.index',[$type])->with('success','Query updated successfully');
            }
            return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
        }
        return redirect()->route('backend.query.index',$type)->with('success','please select a Query');
    }

    public function delete($id)
    {

        //$id = $this->request->getGet('id');
        if ($id){
            $postModel = new Query();
            $post = $postModel->where('id',$id)->delete();
            return redirect()->back()->with('success','Query deleted successfully');
        }
        return redirect()->back()->with('error','please select a Query');
    }
    public function current_route($key=null)
    {
        $urls = explode('/',current_url());
        if ($key)
        {
            return $urls[$key] ;
        }
        return end($urls);
    }

}
