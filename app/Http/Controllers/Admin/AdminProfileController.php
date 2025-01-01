<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminProfileUpdateRequest;
use App\Models\Admin;
use App\Services\Models\AdminService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function ViewProfile(Admin $admin)//$id
    {
        
        try{

            $admin = auth()->user();
            return view('backend.dashboard.profile', compact('admin'));
        }
        catch(\Throwable $e){
            
            return redirect()->back()->with('',"Error");
        }
    }


    public function update(
       AdminProfileUpdateRequest $updateRequest,
        AdminService  $adminService
    ){
        try{
            $id = Auth::user()->id;

            // $id =Admin::Find(Auth::user()->id);

            $admin = $adminService->update($id,$updateRequest->validated());

            return redirect()->back()->with('updated',"Profile Updated");
          
        }
        catch(\Throwable $e){
            dd($e->getMessage());
            return redirect()->back()->with('update_fail',"Failed to  Updated ");
        }

    }
}




