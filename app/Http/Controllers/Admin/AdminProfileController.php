<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function ViewProfile(Admin $admin)//$id
    {
        
        //$admin = Admin::find($id);

          

        return view('backend.dashboard.profile');
    }
}




