@extends('principal')
 @section('conteudo')
 </div>
   <form action="/login" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}"/>
   <div class="form-control">
       <label>Email</label>
       <input name="email" class="form-control"/>
    </div>
    <br>
    <div class="form-control">
       <label>Senha</label>
       <input name="password"type="password" class="form-control"/>
    </div>
    <br>
    <div>
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
    </form>
  @stop