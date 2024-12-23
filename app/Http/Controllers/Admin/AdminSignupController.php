<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminSignupRequest;
use App\Services\Models\AdminService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminSignupController extends Controller
{

    public function signup(

        AdminSignupRequest $adminStoreRequest,
        AdminService $adminService
    )
    {

        try {
            //dd();c
            $userData = $adminStoreRequest->validated();
           
            $user = $adminService->signup($userData);
            return redirect()->back()->with('added', "Admin Signup Succeed");
        } catch (\Throwable $e) {

            return redirect()->back()->with('message_fail', "Failed Operation");
        }
    }

}
