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

}
