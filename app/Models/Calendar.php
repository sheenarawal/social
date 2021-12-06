<?php

namespace App\Models;

use CodeIgniter\Model;

class Calendar extends Model
{

    protected $useSoftDeletes        = true;
    protected $table            = 'calendar_updates';
    protected $allowedFields    = [
        'type','title','description','start_date','start_time','end_date',
        'end_time','file','status','created_at','updated_at','deleted_at'
    ];
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    /*
     *
     * if type == complaint & query
     * then model_id is about 0 or post and event id
     *
     * if type == reply
     * then  model_id is the id of complaint & quary id (contact_admin data id)
     *
    */


    public function getCalendarUpdate($key = false,$value=false)
    {
        if ($key === false && $value == false) {
            return $this->findAll();
        }

        return $this->where([$key => $value])->first();
    }
}
