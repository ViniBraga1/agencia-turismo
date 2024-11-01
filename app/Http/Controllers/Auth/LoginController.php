<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
public function showLoginForm()
{
return view('auth.login');
}
public function login(Request $request)
{
$credentials = $request->only('email', 'password');
if (Auth::attempt($credentials)){
return redirect()->intended('home');
}
return back()->withErrors([
'email' => 'As credenciais informadas não correspondem aos nossos registros.',
]);
}
public function logout(Request $request)
{
Auth::logout();
return redirect('/login');
}
}