<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Users;
use Myth\Auth\Password;

class MemberController extends BaseController
{


    public function index()
    {
        $data = '';
        $search = $this->request->getGet('search');
        $show = $this->request->getGet('show');
        $model = new Users();
        $data = $model;
        if ($search) {
            $data = $model->where("(name LIKE '%" . $search . "%' OR username LIKE '%" . $search . "%' OR mobile LIKE '%" . $search . "%')", NULL, FALSE);
            //$data =$model->orLike('title',$search)->orLike('publish_date',$search)->orLike('category',$search);
        }
        $users = $data->paginate($show ? $show : 10);
        $pager = $model->pager;
        return view('pages/backend/member/index', compact('users', 'pager'));
    }

    public function edit()
    {
        //public/uploads
        $id = $this->request->getGet('id');
        if ($id) {
            $postModel = new Users();
            $user = $postModel->where('id', $id)->first();
            return view('pages/backend/member/edit', compact('user'));
        }
        return redirect()->back()->with('error', 'please select a post');

    }

    public function update()
    {
        $id = $this->request->getVar('user_id');
        if ($id) {
            $userModel = new Users();
            $user = $userModel->where('id',$id)->first();
            $rules = $this->valid($id);
            if ($this->validate($rules)) {
                $username = $this->makeUsername($this->request->getVar('email'));
                $password = $this->makePassword($this->request->getVar('name'), $this->request->getVar('mobile'));
                $photo = $this->request->getFile('photo');
                if ($photo->isValid() && !$photo->hasMoved()) {
                    $photo->move(ROOTPATH . 'public/uploads');
                    $photo_name = $photo->getName();
                }else{
                    $photo_name =$user['photo'];
                }
                $address_proof = $this->request->getFile('address_proof');
                if ($address_proof->isValid() && !$address_proof->hasMoved()) {
                    $address_proof->move(ROOTPATH . 'public/uploads');
                    $address_proof_name = $address_proof->getName();
                }else{
                    $address_proof_name =$user['address_proof'];
                }
                $data = [
                    'name' => $this->request->getVar('name'),
                    'role' => 1,
                    'username' => $username,
                    'email' => $this->request->getVar('email'),
                    'mobile' => $this->request->getVar('mobile'),
                    'password_hash' => Password::hash($password),
                    'password' => $password,
                    'photo' => $photo_name,
                    'address' => $this->request->getVar('address'),
                    'address_proof' => $address_proof_name,
                ];
                $userModel->update($id, $data);

                return redirect()->route('backend.member.index')->with('success', 'Member update successfully');
            } else {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }
        }
        return redirect()->back()->with('error','Please select a member');

    }

    public function valid($id)
    {
        $rules = [
            'name' => 'required|min_length[4]|max_length[50]',
            'email' => 'required|min_length[5]|max_length[100]|valid_email|is_unique[users.email,id,'.$id.']',
            'mobile' => 'required|min_length[10]|max_length[10]|is_unique[users.mobile,id,'.$id.']',
            'photo' => 'permit_empty|uploaded[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]|max_size[photo,1024]',
            'address' => 'required|min_length[4]|max_length[190]',
            'address_proof' => 'permit_empty|uploaded[address_proof]|mime_in[address_proof,image/jpg,image/jpeg,image/png]|max_size[address_proof,1024]',
        ];
        return $rules;
    }

    public function makePassword($name, $mobile)
    {
        $pass = str_replace(' ', '_', $name) . '@' . substr($mobile, 0, 3);
        return $pass;
    }


    public function makeUsername($email)
    {
        $username = explode('@', $email);
        return $username['0'];
    }


}
