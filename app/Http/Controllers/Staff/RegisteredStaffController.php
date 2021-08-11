<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredStaffController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:staff',
            'nic' => 'required|string|max:12',
            'contact' => 'required|numeric',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::login($staff = Staff::create([
            'name' => $request->name,
            'email' => $request->email,
            'nic' => $request->nic,
            'contact' => $request->contact,
            'password' => Hash::make($request->password),
        ]));

        event(new Registered($staff));

        return redirect()->route('staff.home');
    }
}
