<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        Producto::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'stock' => $request->stock,
            'categoria' => $request->categoria
        ]);

        return redirect('/productos');
    }
}
