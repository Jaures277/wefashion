<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login()
    {
        return view('back.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        //dd('ss00');
        /** @var User $model */
        $model = User::query()
            ->where('email', $request->email)
            ->first();

        if(!$model){
            return Redirect::back()->withErrors("Votre email est incorrect.");
        }

        if (!Hash::check($request->get('password'), $model->password)) {
            return Redirect::back()->withErrors("Votre mot de passe est incorrect.");
        }

        // Auth::guard('admin')->login($model);
        auth()->login($model);
        $request->session()->regenerate();

        return response()
            ->redirectToRoute('products.index')
            ->with('success', 'Welcome ' . $model->name . '!');
    }
}
