<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\User;

class UserController extends Controller
{
    public function show($id)
    {
        $usuario = User::findOrFail($id);

        return view("/user/perfil", ['usuario' => $usuario]);
    }

    public function edit($id)
    {
        $usuario = User::findOrFail($id);

        return view("/user/edit", ['usuario' => $usuario]);
    }

    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->cpf_cnpj = $request->input('cpf_cnpj');
        $usuario->telefone = $request->input('telefone');
        $usuario->data_nascimento = $request->input('data_nascimento');
        if ($request->hasFile('user_img') && $request->file('user_img')->isValid()) {
            if ($usuario->profile_photo_path) {
                $imgAntiga = public_path('img/user-img/' . $usuario->profile_photo_path);
                if(File::exists($imgAntiga)){
                    File::delete($imgAntiga);
                }
                
            }

            $imagem = $request->file('user_img');
            $nomeImagem = uniqid() . '.' . $imagem->extension();
            $imagem->move(public_path('img/user-img'), $nomeImagem);
            $usuario->profile_photo_path = $nomeImagem;
        }
        $usuario->save();

        return redirect("/user/perfil/{$usuario->id}");
    }
}