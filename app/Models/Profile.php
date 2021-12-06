<?php

namespace App\Models;

use CodeIgniter\Model;

class Profile extends Model
{

    protected $useSoftDeletes        = true;
    protected $table            = 'profiles';
    protected $allowedFields    = [
        'user_id','ps','guardian','district','state','pin','land_mark','dob','age','sex',
        'qualification','curricular_activities','blood_group','occupation','other_society',
        'introduced_by','status','updated_at','created_at','deleted_at',
    ];
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getProfile($key = false,$value=false)
    {
        if ($key === false && $value == false) {
            return $this->findAll();
        }

        return $this->where([$key => $value])->first();
    }
}
