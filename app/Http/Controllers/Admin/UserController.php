<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Repositories\Admin\Interfaces\UserRepositoryInterface;

class UserController extends Controller
{
    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }
    public function index()
    {
        return $this->user->viewuser();   
    }

    
    public function create()
    {
       return $this->user->createuser();
    }

    
    public function store(Request $request)
    {
        return $this->user->storeuser($request);
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
