<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($id)
    {
        $usuario = User::findOrFail($id);
        
        return view('user.perfil', ['usuario' => $usuario]);
    }
}
