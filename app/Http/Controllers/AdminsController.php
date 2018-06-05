<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;

class AdminsController extends Controller
{
    public function userIndex() {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function userEdit($id) {
        $user = User::whereId($id)->first();
        $roles = Role::all();
        $selectedRoles = $user->roles()->pluck('name')->toArray();
        return view('admin.userEdit', compact('user', 'roles', 'selectedRoles'));
    }

    public function userUpdate(Request $request, $id) {
        $user = User::whereId($id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $user->syncRoles($request->role);
        return back();
    }

}
