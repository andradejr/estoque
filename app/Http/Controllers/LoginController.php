<?php namespace App\Http\Controllers; 
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProdutoRequest;
use Validator;
use Request;
use App\produto;
use Auth;
class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function logar(){
        $credenciais = Request::only('email','password');
        if(Auth::attempt($credenciais)){
            return 'O usuário está logado com';
        }
        return 'O usuário não existe';
    }
}
