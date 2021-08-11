<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class StaffAuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        if (!Auth::guard('staff')->attempt($request->only('email', 'password'), $request->filled('remember'))) {

            throw ValidationException::withMessages([
                'email' => 'Invalid email or password',
            ]);
        }

        return redirect()->intended(route('staff.home'));
    }

    public function destroy(Request $request)
    {
        Auth::guard('staff')->logout();

        return redirect()->route('staff.login');
    }
}
