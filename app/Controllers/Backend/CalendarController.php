<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Calendar;
use CodeIgniter\I18n\Time;

class CalendarController extends BaseController
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
        $model = new Calendar();
        $data = $model;
        if ($search){
            $data =$model->where("(title LIKE '%".$search."%' OR description LIKE '%".$search."%')", NULL, FALSE);
            //$data =$model->orLike('title',$search)->orLike('publish_date',$search)->orLike('category',$search);
        }
        $calendars = $data->paginate($show?$show:10);
        $pager =  $model->pager;
        return  view('pages/backend/calendar/index',compact('calendars','pager'));
    }

    public function view()
    {
        $calendar_view = [];
        $model = new Calendar();
        $calendar = $model->getCalendarUpdate();
        foreach ($calendar as $data){
            $view[]= [
                'title'=>$data['title'],
                'start'=>$data['start_date'].'T'.$data['start_time'],
                'end'=>$data['end_date'].'T'.$data['end_time']
            ];
        }
        $calendar_view = json_encode($view,true);
        return  view('pages/backend/calendar/view',compact('calendar_view'));
    }


    public function create()
    {
        return  view('pages/backend/calendar/create');
    }

    public function store()
    {
        $rules = $this->postRoule();
        if($this->validate($rules)){
            $calendarModel = new Calendar();
            $data = [
                'title'      => $this->request->getVar('title'),
                'start_date'      => $this->request->getVar('start_date'),
                'start_time'      => $this->request->getVar('start_time'),
                'end_date'      => $this->request->getVar('end_date'),
                'end_time'      => $this->request->getVar('end_time'),
                'description'    => $this->request->getVar('description'),
                'status'     => $this->request->getVar('status'),
                'created_at'     => $this->current_time,
            ];
            $calendarModel->save($data);
            return redirect()->route('backend.calendar.index')->with('success','Calendar created successfully');
        }
        return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
    }

    public function edit($id)
    {
        $calendarModel = new Calendar();
        $calendar = $calendarModel->getCalendarUpdate('id',$id);
        return view('pages/backend/calendar/edit',compact('calendar'));
    }

    public function postRoule()
    {
        $data = [
            'title'        => 'required|min_length[5]|max_length[190]|',
            'description'       => 'required|min_length[5]',
            'start_date'       => 'required',
            'start_time'       => 'required',
            'end_date'       => 'required',
            'end_time'       => 'required',
            'status'       => 'required',
        ];
        return $data;
    }
    public function update($id)
    {
        $rules = $this->postRoule();
        if($this->validate($rules)){
            $calendarModal = new Calendar();
            $data = [
                'title'      => $this->request->getVar('title'),
                'start_date'      => $this->request->getVar('start_date'),
                'start_time'      => $this->request->getVar('start_time'),
                'end_date'      => $this->request->getVar('end_date'),
                'end_time'      => $this->request->getVar('end_time'),
                'description'    => $this->request->getVar('description'),
                'status'     => $this->request->getVar('status'),
            ];
            $calendarModal->update($id,$data);
            return redirect()->route('backend.calendar.index')->with('success','Calendar updated successfully');
        }
        return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
    }

    public function delete($id)
    {
        $calendarModel = new Calendar();
        $calendar = $calendarModel->where('id',$id)->delete();
        return redirect()->back()->with('success','Calendar deleted successfully');
    }

}
