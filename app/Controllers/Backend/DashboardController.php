<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Calendar;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Posts;
use App\Models\Users;
use Myth\Auth\Password;

class DashboardController extends BaseController
{


    public function dashboard()
    {
        $postModel = new Posts();
        $posts= $postModel->get()->getResultArray();
        $eventModel = new Event();
        $events = $eventModel->get()->getResultArray();
        $faqModel = new Faq();
        $faqs = $faqModel->get()->getResultArray();
        $userModel = new Users();
        $users = $userModel->get()->getResultArray();
        $view = [];
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
        return  view('pages/backend/dashboard',compact('posts','events','faqs','users','calendar_view'));
    }
    public function profile()
    {
        if (session('logged_in')){
            $id = session('logged_in')['auth']['id'];
            $postModel = new Users();
            $user = $postModel->where('id', $id)->first();
            $description = '';
            if ($user['description'] && $this->isJson($user['description'])){
                $description = implode(' \n ',json_decode($user['description'],true));
            }
            return view('pages/backend/member/edit', compact('user','description'));
        }
        return redirect()->route('login')->with('error','Login first');
    }
    function isJson($string)
    {
        json_decode($string);
        return json_last_error() === JSON_ERROR_NONE;
    }
}
