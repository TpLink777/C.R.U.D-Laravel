<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterCategoriesRequest;
use App\Models\categories;
use Illuminate\Http\Request;

class AnalisisController extends Controller
{
    public function  index(){
        $categories =  categories::orderby('id', 'desc')->paginate(5);

        return view('pruebas.home', [
            'categories' => $categories
        ]);
    }

    public function visualizar($visualizar) {

        $visualizar = categories::find($visualizar);
        return view('pruebas.visualizar', [
            'visualizar' => $visualizar 
        ]);
    }

    public function create(){
        return view('pruebas.create');
    }

    public function ingresar(RegisterCategoriesRequest $req){

       /* $req->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'correo' => 'required|unique:categories|email'
       ]); */

        categories::create($req->all());

        return redirect()->route('pruebas.home');
    }

    public function edit($visualizar){

        $visualizar = categories::find($visualizar);
        return view('pruebas.edit', compact('visualizar'));

    }

    public function update(Request $req, categories $visualizar){

        $req->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'correo' => "required|unique:categories,correo,{$visualizar->id}|email"
       ]);

        $visualizar->update($req->all());

        return redirect()->route('pruebas.home');
    }

    public function destroy($visualizar){

        categories::find($visualizar)->delete();

        return redirect()->route('pruebas.home');
    }
    
}
