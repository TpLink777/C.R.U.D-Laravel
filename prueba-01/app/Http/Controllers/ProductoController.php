<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:255',
            'cantidad' => 'required|integer',
            'categoria' => 'required|string|max:255',
            'precio' => 'required|numeric'
        ]);

        Producto::create($request->all());
       

        return redirect()->route('productos.index')->with('success', 'Producto registrado exitosamente.');
    }

    public function edit($id){
        $producto = Producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'nombre' => 'required|string|max:255',
            'cantidad' => 'required|integer',
            'categoria' => 'required|string|max:255',
            'precio' => 'required|numeric'
        ]);
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        return redirect()->route('productos.index')->with(
            'success',
            'Producto actualizado exitosamente.'
        );
    }

    
    public function delete($id){
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('productos.index')->with(
            'success',
            'Producto eliminado exitosamente.'
        );
    }
}

