<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $data['breadcrumb'] = ['Dashboard' => ''];
        $this->setThisPageTitle('Dashboard');
        return view('backend.admin.include.dashboardbody',$data);
    }
}
