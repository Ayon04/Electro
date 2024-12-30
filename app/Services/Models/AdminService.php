<?php
namespace App\Services\Models;
use App\Http\Requests\AdminProfileUpdateRequest;
use App\Http\Requests\AdminSigninRequest;
use App\Http\Requests\AdminStoreRequest;
use App\Http\Requests\AdminViewProfileRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminService{

public function create(array $payloads)
{
    return Admin::query()->create($payloads);
}

public function update($id, array $payloads)
{
    $admin = Admin::findOrFail($id);
    $admin->update($payloads);
    return $admin;
}

public function getAdminProfile()
{

     $students = Admin::all();
}

}

?>
