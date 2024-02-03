<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            // Obtém o usuário autenticado
            $user = Auth::user();

            // Agora você pode acessar as informações do usuário
            $userId = $user->id;
            $userName = $user->name;
            $userEmail = $user->email;

            return $user;

            return 'yes';
        } else {
            return 'no';
        }
    }
}
