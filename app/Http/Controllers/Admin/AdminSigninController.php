<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\Admin\AdminSigninController;
use App\Http\Requests\Admin\AdminSigninRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminSigninController extends Controller
{
    public function signin(AdminSigninRequest $adminSigninRequest)
    {
        try {
            $credentials = $adminSigninRequest->validated();


            if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
                $adminSigninRequest->session()->regenerate();

                return redirect()->route('admin-dashboard');

            }


            return back()->withErrors([
                'email' => 'Invalid credentials, please try again.',
            ])->withInput();

        } catch (\Throwable $e) {

            dd($e->getMessage());
            return back()->withErrors([
                'general' => 'An unexpected error occurred. Please try again later.',
            ]);
        }


}

}


