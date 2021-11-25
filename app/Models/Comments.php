<?php

namespace App\Models;

use CodeIgniter\Model;

class Comments extends Model
{
    //protected $DBGroup          = 'default';
    protected $useSoftDeletes        = true;
    protected $table            = 'comments';
    protected $allowedFields    = [
        'user_id','type','title','rating','description','status',
    ];
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


    public function getcomment($key = false,$value=false)
    {
        if ($key === false && $value == false) {
            return $this->findAll();
        }

        return $this->where([$key => $value])->first();
    }
}
