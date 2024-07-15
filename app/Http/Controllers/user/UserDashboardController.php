<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function dashboard(){
        $data['breadcrumb'] = ['Dashboard' => ''];
        $this->setThisPageTitle('Dashboard');
        return view('backend.user.include.dashboardbody',$data);
    }
}
