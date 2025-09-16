<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarController extends Controller
{
    public function index () {
        $carrosDestaque = Carro::inRandomOrder()->take(3)->get();

        return view('carros.compras.compras', ['carrosDestaque' => $carrosDestaque]);
    }

    public function search(Request $request) {
        $carrosDestaque = Carro::inRandomOrder()->take(3)->get();
        $query = Carro::query();

        if ($request->filled('marca')) {
            $query->where('marca', 'like', "%{request->marca}%");
        }
        
        if ($request->filled('modelo')) {
            $query->where('modelo', 'like', "%{request->modelo}%");
        }

        if ($request->filled('ano_min')) {
            $query->where('ano', '>=', $request->ano_min);
        }

        if($request->filled('ano_max')) {
            $query->where('ano', '<=', $request->ano_max);
        }

        if ($request->filled('valor_min')) {
            $query->where('preco', '>=', $request->valor_min);
        }

        if($request->filled('valor_max')) {
            $query->where('preco', '<=', $request->valor_max);
        }

        if($request->filled('combustivel')) {
            $query->where('combustivel', $request->combustivel);
        }

        if($request->filled('transmissao')) {
            $query->where('transmissao', $request->transmissao);
        }

        $carros = $query->get();

        return view('carros.compras.compras', ['carrosDestaque' => $carrosDestaque]);
    }
}
