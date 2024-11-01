<?php

namespace App\Http\Controllers;
use App\Models\Destino;
use Illuminate\Http\Request;
class DestinoController extends Controller
{
public function index()
{
$destinos = Destino::all();
return view('destinos.index', compact('destinos'));
}
public function criar()
{
return view('destinos.criar');
}
public function armazenar(Request $request)
{
$request->validate([
'nome' => 'required',
'descricao' => 'required',
'preco' => 'required|numeric',
]);
Destino::create($request->all());
return redirect()->route('destinos.index');
}
}

