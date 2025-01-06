<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
// use App\Models\Admin;
use App\Models\User;

use App\Services\Models\AdminService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{  
    public function editPassword(){

        try{

            // $admin = Auth:: auth()->user();
            return view('backend.dashboard.changePassword');
        }
        catch(\Throwable $e){
            
            return redirect()->back()->with('',"Error");
        }
    }

    // public function ChangePassword( 
        
    //     ChangePasswordRequest $req,
    //     AdminService $ser
    // ){

    //     try{

    //         // $admin = Auth:: auth()->user();
    //         // return view('backend.dashboard.changePassword');

    //        $isMatched = Hash::check($req->current_password, auth()->user()->password);

    //        if($isMatched){

    //          $id = Auth::user()->id;

    //         // $id =Admin::Find(Auth::user()->id);

    //         $admin = $ser->updatePassword($id,$req->validated()); 
            
    //        }
    //     }
    //     catch(\Throwable $e){
            
    //         return redirect()->back()->with('',"Error");
    //     }
    // }

    // Controller Method
public function updatePassword(ChangePasswordRequest $req, AdminService $ser)
{
    //  dd($req->all());

    try {
        $isMatched = Hash::check($req->current_password, auth()->user()->password);

         
        if ($isMatched) {
           

            // dd($isMatched); 

            $id = Auth::user()->id;
            $admin = $ser->updatePassword($id, $req->validated()); 
            

            return redirect()->back()->with('success', 'Password updated successfully.');
        } else {
            return redirect()->back()->with('current_password_mismatch','Current password is incorrect.');
        }
    } catch (\Throwable $e) { 
        // dd($e->getMessage());

        return redirect()->back()->with('error', 'An error occurred while changing the password.');
    }
}


}
