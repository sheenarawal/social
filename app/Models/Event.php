<?php

namespace App\Models;

use CodeIgniter\Model;

class Event extends Model
{

    protected $useSoftDeletes        = true;
    protected $table            = 'events';
    protected $allowedFields    = [
        'title','slug','location','tag','publish_date','publish_time',
        'description','media','status','created_at','deleted_at',
    ];
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getEvent($key = false,$value=false)
    {
        if ($key === false && $value == false) {
            return $this->findAll();
        }

        return $this->where([$key => $value])->first();
    }
}
