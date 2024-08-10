<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;

class User_Management extends Controller
{
    public function index(Request $request)
    {
        $user = User::orderBy('id');

        if ($request->has('filter')) {
            $user->where('name', 'like', '%' . $request->filter . '%');
        }

        $users = $user->paginate(10);

        // $filter = $request->input('filter');
        // $users = User::query()
        //     ->when($filter, function ($query, $filter) {
        //         return $query->where('name', 'like', '%' . $filter . '%')
        //             ->orWhere('email', 'like', '%' . $filter . '%');
        //     })
        //     ->paginate(10);

        return view('page.user.user_management', compact('users'));
    }

    public function store(Request $request)
    {
        abort_if(Gate::denies('create_user'), code: 403);

        $fields = $request->validate([
            'name' => 'required',
            'email' => 'required|email||unique:users',
            'password' => 'required|min:6',
            'role' => 'required|string|exists:roles,name'
        ]);

        $user = User::create($fields);

        $role = Role::findByName($fields['role']);
        $user->assignRole($role);

        return redirect('/user_management')->with('success', 'User created successfully');
    }

    public function edit(User $user)
    {

        $user = User::find($user);

        // dd($user);

        return view('page.user.user_management', compact('user'));
    }
}
