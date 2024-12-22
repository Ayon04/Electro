<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminStoreRequest;
use App\Services\Models\AdminService;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function store(

        AdminStoreRequest $adminStoreRequest,
        AdminService $adminService
    )
    {

        try {
            //dd();
            $userData = $adminStoreRequest->validated();
            $user = $adminService->store($userData);
            return redirect()->back()->with('added', "Admin Signup Succeed");
        } catch (\Throwable $e) {

            return redirect()->back()->with('message_fail', "Failed Operation");
        }
    }

}
