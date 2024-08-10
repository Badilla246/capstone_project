<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // dd($user);

        return view('profile.user-profile', compact('user'));
    }

    public function update(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contact' => 'nullable',
            'address' => 'nullable'
        ]);

        $user = User::find(Auth::user()->id);

        if ($request->hasFile('image')) {
            //timestamp
            $imageName = time() . '.' . $request->image->extension();
            //storing the data in the public name images
            $request->image->move(public_path('images'), $imageName);
            //store the image in the fields/database
            $fields['image'] = $imageName;
        }

        //update the profile
        $user->update($fields);

        return redirect('/profile')->with('success', 'Profile Updated Successfully');
    }
}
