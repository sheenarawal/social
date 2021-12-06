<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table            = 'users';
    protected $allowedFields    = [
        'name','email','mobile','password','password_hash','role','username','photo',
        'address','address_proof','status','description','already_paid',
    ];
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getUser($key = false,$value=false)
    {
        if ($key === false && $value == false) {
            return $this->findAll();
        }

        return $this->where([$key => $value])->first();
    }

    public function getUsers($key = null,$value=null)
    {
        $data = [];
        $users =  $this->findAll();
        if ($key != null && $value != null ||$value == 0) {
            foreach ($users as $user){
                if ($user[$key] == $value){
                    $data[] = $user;
                }
            }
            return $data;
        }
        return $users;
    }

    public function userStatus($key=false)
    {
        $data = [
            0=>'pending',1=>'approve',2=>'reject',3=>'payment_pending',
        ];
        $value = $data;
        if ($key){
            $value = $data[$key];
        }
        return $value;
    }

    public function userDescription($id,$description)
    {
        $user = $this->where('id',$id)->first();
        $prev_description = '';
        if ($user['description']){
            $prev_description = implode(' \n ',json_decode($user['description'],true));

        }
        $description = [
            'prev'=>$prev_description,
            'status'=>$description,
        ];

        return json_encode($description,true);
    }
}
