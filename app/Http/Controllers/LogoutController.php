<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function destroy(Request $request)
    {
        /*
         * Déconnexion de l'utilisateur
         */
        Auth::logout();

        /*
         * Nettoyage de la session après déconnexion
         */
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
