<?php

namespace App\Controllers;

use App\Models\Users;
use Myth\Auth\Password;

class AuthController extends BaseController
{

    protected $auth;

    protected $config;

    protected $session;

    public function __construct()
    {
        $this->session = service('session');
    }

    public function login()
    {
        echo  view('template/header');
        echo  view('template/login');
        echo  view('template/script');
        //return view('template/header');
    }

    public function loginProceed()
    {
        //helper('auth');
        $rules = [
            'login'         => 'required|min_length[5]|max_length[100]|',
            'password'      => 'required|min_length[6]|max_length[20]',
        ];

        if($this->validate($rules)){
            $login = $this->request->getPost('login');
            $password = $this->request->getPost('password');
            $remember = (bool)$this->request->getPost('remember');

            // Determine credential type
            $type = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';

            $userModel = new Users();
            $user = $userModel->where([$type => $login])->first();
            if ($user && Password::verify($password,$user['password_hash']))
            {

                if ($user['status'] > 0){
                    $this->attamptLogin($user,$user['id']);
                    return  redirect()->route('backend.dashboard');
                }
                return redirect()->back()->withInput()->with('error','Access Denied ! Approval Pending');
            }
            return redirect()->back()->withInput()->with('errors', ['login'=>'Credentials not match']);
        }else{
            return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
        }
    }

    public function attamptLogin($data,$user_id)
    {
        $data =[
          'logged_in'=>$user_id,
          'auth'=>$data,
        ];
        $this->session->set('logged_in',$data);
        return true;
    }

    public function logout()
    {
        if ($this->session->get('logged_in'))
        {
            $this->session->remove('logged_in');
        }

        return redirect()->to('/');
    }
    public function register()
    {
        echo  view('template/header');
        echo  view('template/register');
        echo  view('template/script');
    }

    public function store()
    {

        helper(['form']);
        $rules = [
            'name'          => 'required|min_length[4]|max_length[50]',
            'email'         => 'required|min_length[5]|max_length[100]|valid_email|is_unique[users.email]',
            'mobile'         => 'required|min_length[10]|max_length[10]|is_unique[users.mobile]',
            'photo'          => 'uploaded[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]|max_size[photo,1024]',
            'address'          => 'required|min_length[4]|max_length[190]',
            'address_proof'          => 'uploaded[address_proof]|mime_in[address_proof,image/jpg,image/jpeg,image/png]|max_size[address_proof,1024]',
        ];

        if($this->validate($rules)){
            $username = $this->makeUsername($this->request->getVar('email'));
            $password = $this->makePassword($this->request->getVar('name'),$this->request->getVar('mobile'));
            $photo = $this->request->getFile('photo');
            if (!$photo->hasMoved()){
                $photo->move(WRITEPATH . 'uploads');
            }
            $address_proof = $this->request->getFile('photo');
            if (!$address_proof->hasMoved()){
                $address_proof->move(WRITEPATH . 'uploads');
            }
            $userModel = new Users();
            $data = [
                'name'          => $this->request->getVar('name'),
                'role'          => 1,
                'username'      => $username,
                'email'         => $this->request->getVar('email'),
                'mobile'        => $this->request->getVar('mobile'),
                'password_hash' => Password::hash($password),
                'password'      => $password,
                'photo'         => $photo->getName(),
                'address'       => $this->request->getVar('address'),
                'address_proof' => $address_proof->getName(),
            ];
            $userModel->save($data);

            return redirect()->route('login')->with('success','Registration Successfully please wait for President Approval');
        }else{
            return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
        }

    }

    public function makePassword($name,$mobile)
    {
        $pass = str_replace(' ','_',$name).'@'.substr($mobile, 0, 3);
        return $pass;
    }


    public function makeUsername($email)
    {
        $username = explode('@',$email);
        return $username['0'];
    }

}
