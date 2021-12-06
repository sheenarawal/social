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
            return view('pages/backend/member/edit', compact('user'));
        }
        return redirect()->route('login')->with('error','Login first');
    }
}
