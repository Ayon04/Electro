<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminProfileUpdateRequest;
use App\Http\Requests\ProfilePictureUploadRequest;
use App\Models\User;
use App\Services\Models\AdminService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function ViewProfile(User $admin)//$id
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

            return redirect()->back();
          
        }
        catch(\Throwable $e){
            // dd($e->getMessage());
            return redirect()->back();
        }

    }
    public function ProfilePictureUpload(ProfilePictureUploadRequest $reqImg, AdminService $adminService)
    {
        try {
            $userImg = $reqImg->validated();
            $id = Auth::user()->id;
                if ($reqImg->hasFile('image')) {
                $file = $reqImg->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('uploads', $filename, 'public');
                $userImg['image'] = $path;
            }
            $admin = $adminService->update($id, $userImg);
            return redirect()->back()->with('success', "Image Uploaded");
    
        } catch (\Throwable $e) {
            return redirect()->back()->with('failed', "Failed to upload image");
        }
    }
    
    
    

}
