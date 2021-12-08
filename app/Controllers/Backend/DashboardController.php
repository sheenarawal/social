<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Users;
use Myth\Auth\Password;

class DashboardController extends BaseController
{


    public function dashboard()
    {
        return  view('pages/backend/dashboard');
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
