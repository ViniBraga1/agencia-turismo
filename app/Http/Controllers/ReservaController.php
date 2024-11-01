<?php

namespace App\Http\Controllers;
use App\Models\Reserva;
use Illuminate\Http\Request;
class ReservaController extends Controller
{
public function index()
{
return view('home');// Crie uma view para a página inicial da área restrita
}
public function minhasReservas()
{
$reservas = Reserva::where('usuario_id', auth()->id())->get();
return view('reservas.minhas-reservas', compact('reservas'));
}
public function criarReserva(Request $request)
{
//Lógica para criar uma nova reserva
}
public function editarReserva(Request $request, $id)
{
//Lógica para editar uma reserva existente
}
public function excluirReserva($id)
{
//Lógica para excluir uma reserva
}
}
