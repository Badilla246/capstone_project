<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{
    public function index()
    {
        // if (!empty(Auth::check())) {
        //     return redirect('/dashboard');
        // }
        // if (!auth()->check()) {
        //     return to_route('/');
        // }

        // $user = User::selectRaw('count(id) as count, DATE_FORMAT(created_at, "%Y-%m") as month')
        //     ->groupBy('month')
        //     ->orderBy('month', 'asc')
        //     ->get()
        // ;

        // $month = $user->pluck('month');
        // $count = $user->pluck('count');

        return view('auth.login');
    }

    // public function login(Request $request)
    // {
    //     $fields = $request->validate([]);

    //     $user = User::create($fields);

    //     $role = Role::findByName($fields['role']);
    //     $user->assignRole($role);
    // }

    public function login(Request $request)
    {

        //validate
        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // dd($request);

        //session
        //redirect
        if (Auth::attempt($fields, $request->remember)) {
            return redirect('/dashboard');
        } else {
            throw ValidationException::withMessages([
                'email' => 'Invalid Credentials please try again'
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
