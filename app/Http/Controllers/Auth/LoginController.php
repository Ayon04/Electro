<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\Admin\AdminSigninRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
   
    use AuthenticatesUsers;

    /**
     * Where to redirect users after log
     *
     * @var string
     */
    protected $redirectTo = '/admin-dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    } 

     
    public function login(AdminSigninRequest $adminSigninRequest)
    {
        try {
            $credentials = $adminSigninRequest->validated();


            if (Auth::attempt($credentials)) {
                // $adminSigninRequest->session()->regenerate();

                return redirect()->route('admin-dashboard');
            }


            return back()->withErrors([
                'email' => 'Invalid credentials, please try again.',
            ])->withInput();

        } catch (\Throwable $e) {

            return back()->withErrors([
                'general' => 'An unexpected error occurred. Please try again later.',
            ]);
        }


}

     
}
