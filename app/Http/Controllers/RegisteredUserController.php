<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_attributes = $request->validate([
            'name' => ['required', 'min:3', 'max:100'],
            'email' => ['required', 'email', 'max:254', 'unique:users,email'],
            'password' => ['required', Password::min(6), 'confirmed']
        ]);

        $employer_attributes = $request->validate([
            'employer' => ['required', 'min:3', 'max:100'],
            'logo' => ['required', File::types(['png', 'jpg', 'svg'])],
        ]);

        $user = User::create($user_attributes);

        $logo_path = $request->logo->store('logos');

        $user->employer()->create([
            'name' => $employer_attributes['employer'],
            'logo' => $logo_path,
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
