<?php
namespace App\Repositories\Admin\Repository;
use App\Repositories\Admin\Interfaces\UserRepositoryInterface;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;




class UserRepository implements UserRepositoryInterface
{
    public function viewuser()
    {
        $users = User::all(); 
        return view('admin.user.viewuser',compact('users'));
    }
    public function createuser()
    {
        $role = Role::all();
        return view('admin.user.adduser',compact('role'));
    }
    public function storeuser(Request $request)
    {
        $user=new User();
        $user->email=$request->input('email');
        $user->name=$request->input('username');
        $user->password=Hash::make($request->input('password'));
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $role = $request->input('roles');
        $user->assignRole($role);
        $user->save();
        return redirect('admin/user');
    }
}