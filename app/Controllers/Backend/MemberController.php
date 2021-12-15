<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Profile;
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

    public function edit($id)
    {
        $postModel = new Users();
        $user = $postModel->where('id', $id)->first();
        $description = '';
        if ($user['description'] && $this->isJson($user['description'])){
            $description = implode(' \n ',json_decode($user['description'],true));
        }
        return view('pages/backend/member/edit', compact('user','description'));
    }
    public function profile($id)
    {
        $postModel = new Profile();
        $user = $postModel->where('user_id', $id)->first();
        return view('pages/backend/member/profile', compact('user','id'));
    }

    public function updateProfile($id)
    {
        $profileModel = new Profile();
        $profile = $profileModel->where('user_id',$id)->first();
        $profileData = [
            'ps' => $this->request->getVar('ps'),
            'guardian' => $this->request->getVar('guardian'),
            'district' => $this->request->getVar('district'),
            'state' => $this->request->getVar('state'),
            'pin' => $this->request->getVar('pin'),
            'land_mark' => $this->request->getVar('land_mark'),
            'dob' => $this->request->getVar('dob'),
            'age' => $this->request->getVar('age'),
            'sex' => $this->request->getVar('sex'),
            'qualification' => $this->request->getVar('qualification'),
            'curricular_activities' => $this->request->getVar('curricular_activities'),
            'blood_group' => $this->request->getVar('blood_group'),
            'occupation' => $this->request->getVar('occupation'),
            'other_society' => $this->request->getVar('other_society'),
            'introduced_by' => $this->request->getVar('introduced_by'),
            'status'   => '0',
        ];

        $profileModel->update($profile['id'],$profileData);
        return redirect()->route('backend.member.index')->with('success', 'Member Profile update successfully');
    }


    public function update($id)
    {
        $userModel = new Users();
        $user = $userModel->where('id',$id)->first();
        $rules = $this->valid($id);
        if ($this->validate($rules)) {
            $username = $this->makeUsername($this->request->getVar('email'));
            $password = $this->makePassword($this->request->getVar('name'), $this->request->getVar('mobile'));
            $status = $user['status'];
            if (session('logged_in')['auth']['role']==0){
                $status = $this->request->getVar('status');
            }
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
            $description[] = $this->request->getVar('description');
            $data = [
                'name' => $this->request->getVar('name'),
                'role' => 1,
                'username' => $user['username'],
                'email' => $this->request->getVar('email'),
                'mobile' => $this->request->getVar('mobile'),
                'password_hash' => Password::hash($password),
                'password' => $user['password'],
                'photo' => $photo_name,
                'address' => $this->request->getVar('address'),
                'description' => json_encode($description),
                'status' => $status,
                'address_proof' => $address_proof_name,
            ];
            $update = $userModel->update($id, $data);
            if (session('logged_in')&& session('logged_in')['auth']['id'] == $this->current_route()){
                return redirect()->back()->with('success', 'Profile update successfully');
            }
            return redirect()->route('backend.member.index')->with('success', 'Member update successfully');
        }else{
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function valid($id)
    {
        $rules = [
            'name' => 'required|min_length[4]|max_length[50]',
            'email' => 'required|min_length[5]|max_length[100]|valid_email|is_unique[users.email,id,'.$id.']',
            'mobile' => 'required|min_length[10]|max_length[10]|is_unique[users.mobile,id,'.$id.']',
            'photo' => 'permit_empty|uploaded[photo]|mime_in[photo,application/pdf,image/jpg,image/jpeg,image/png]|max_size[photo,1024]',
            'address' => 'required|min_length[4]|max_length[190]',
            'address_proof' => 'permit_empty|uploaded[address_proof]|mime_in[address_proof,application/pdf,image/jpg,image/jpeg,image/png]|max_size[address_proof,1024]',
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

    function isJson($string)
    {
        json_decode($string);
        return json_last_error() === JSON_ERROR_NONE;
    }

    public function delete($id)
    {
        dd($id);
    }

    public function sendmail()
    {
        $to = 'sahilyadav8884@gmail.com';
        $subject = 'you are approved';
        $this->send_approve_mail($to,$subject);

        return 'success';
    }

    public function send_approve_mail($to,$subject,$message_data=null)
    {
        $email = \Config\Services::email();
        $message = view('email/approve_mail',compact('message_data'));
        $email->setTo($to);
        $email->setFrom('sahilyadav.inwave@gmail.com', 'Contact Email');
        $email->setSubject($subject);
        $email->setMessage($message);

        if ($email->send()) {
            $response = true;
        }
        else
        {
            $data = $email->printDebugger(['headers']);
            $response =false;
        }
        return $response;
    }
    public function send_reject_mail($to,$subject,$message_data=null)
    {
        $email = \Config\Services::email();
        $message = view('email/reject_mail',compact('message_data'));
        $email->setTo($to);
        $email->setFrom('sahilyadav.inwave@gmail.com', 'Contact Email');
        $email->setSubject($subject);
        $email->setMessage($message);

        if ($email->send()) {
            $response = true;
        }
        else
        {
            $data = $email->printDebugger(['headers']);
            $response =false;
        }
        return $response;
    }

    public function email()
    {
        $model = new Users();
        $message_data = $model->where('id',6)->first();
        return view('email/reject_mail.php',compact('message_data'));
    }
    public function current_route()
    {
        $urls = explode('/',current_url());
        return end($urls);
    }

    public function status()
    {
        $id = $this->request->getVar('status_member_id');
        if ($id){
            $userModel = new Users();
            $user = $userModel->where('id',$id)->first();
            $description = $userModel->userDescription($id,$this->request->getVar('description'));
            $status = $this->request->getVar('status');
            $data = [
                'status' => $status,
                'description' => $description,
            ];
            $message = 'Send email is not available';
            if ($status == 1){
                $subject = 'Member approved confirmation';
                $response = $this->send_approve_mail($user['email'],$subject,$user);
                $message = 'mail not send successfully';
                if ($response){
                    $message = 'mail sent successfully';
                }
            }
            if ($status == 2){
                $subject = 'Member not approved confirmation';
                $response = $this->send_reject_mail($user['email'],$subject,$user);
                $message = 'mail not send successfully';
                if ($response){
                    $message = 'mail sent successfully';
                }
            }
            $update = $userModel->update($id, $data);
            return redirect()->back()->with('success','member Status Update ! '.$message);
        }
        return redirect()->back()->with('error','member not found');
    }

    public function send_sms2($numbers,$message)
    {
        $local_api = 'NTE2NzVhNTY2MTZiNGU2MjM5MzM3NDY3NTczOTZkNjk=';
        $server_api = 'MzU0NzZiNzY3MTZiNjk1NjZiNDI0MjVhNjc2NzMwNTc==';

        // Account details
        $apiKey = urlencode($local_api);
        // Message details
        //$numbers = array();

        $sender = urlencode('WLTNED');
        $message = rawurlencode($message);
        $numbers = implode(', ', $numbers);

        // Prepare data for POST request
        $data = array('apikey' => $apiKey, 'numbers' => $numbers, 'sender' => $sender, 'message' => $message);

        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        // Process your response here
        return $response;
    }

}
