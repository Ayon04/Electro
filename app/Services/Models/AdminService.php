<?php
namespace App\Services\Models;
use App\Http\Requests\AdminProfileUpdateRequest;
use App\Http\Requests\AdminSigninRequest;
use App\Http\Requests\AdminStoreRequest;
use App\Http\Requests\AdminViewProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminService{

public function create(array $payloads)
{
    return User::query()->create($payloads);
}

public function update($id, array $payloads)
{   
    $id = Auth::user()->id;

    $admin = User::findOrFail($id);
    $admin->update($payloads);
    return $admin;
}

public function updatePassword($id, $password)
{   
    $id = Auth::user()->id;

    $admin = User::findOrFail($id);
    $admin->update($password);
    return $admin->password;
}


// public function updatePassword($id, $newPassword)
// {
//     $admin = Admin::findOrFail($id);

//     $admin->password = $newPassword; 

//     $admin->update($password);

//     return $admin;
}

// public function getAdminProfile()
// {

//      $students = Admin::all();
// }

// }

?>
