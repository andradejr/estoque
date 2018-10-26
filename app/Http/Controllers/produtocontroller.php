<?php namespace App\Http\Controllers; 

use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProdutoRequest;
use App\Categoria;
use Validator;
use Request;
use App\produto;
use Auth;

class ProdutoController extends Controller{
   //  public function __construct(){
        // $this->middleware('autorizador');
   //  }
     public function lista(){
         //if(Auth::guest()){
         //    return redirect('/login');
         //}
         $produtos = produto::all();
         return view('listagem')->with('produtos',$produtos);
     }
     public function mostra($id){
         $produto = produto::find($id);
         return view('detalhes')->with('p',$produto);
     }
     public function remove($id){
         $produto = produto::find($id);
         $produto->delete();
         return redirect('/produto');
     }
     public function novo(){
         return view('novo')->with('categoria',Categoria::all());
     }
     public function adicionar(ProdutoRequest $request){
         $produto = produto::create($request->all());
         return redirect('/produto')->withinput();
     }
 }
?>