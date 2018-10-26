@extends('principal')
 @section('conteudo')
 <div class="">
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
 </div>
   <form action="/produto/adiciona" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}"/>
   <div class="form-control">
       <label>Nome</label>
       <input name="nome" class="form-control"/>
    </div>

    <div class="form-control">
       <label>Valor</label>
       <input name="valor" class="form-control"/>
    </div>

    <div class="form-control">
       <label>Quantidade</label>
       <input name="quantidade" class="form-control"/>
    </div>
    <div class="form-control">
       <label>Categorias</label>
       <select name="categoria_id" class="form-control">
           @foreach($categoria as $c)
           <option value="{{$c->id}}">{{$c->nome}}</option>
           @endforeach
       </select>
    </div>
    <div class="form-control">
       <label>Descrição</label>
       <textarea name="descricao" class="form-control"></textarea>
    </div>
    <br>
    <div>
        <button type="submit" class="btn btn-primary">Adiciona</button>
    </div>
    </form>
  @stop