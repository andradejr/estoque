
@extends('principal')
 @section('conteudo')
    <h1>Listagem de Produtos</h1>
      @foreach($produtos as $p)
    <table class='table'>
           <tr class="{{$p->quantidade <=1 ? 'danger' : ''}}">
               <td>{{$p->nome}}</td>
               <td>{{$p->valor}}</td>
               <td>{{$p->descricao}}</td>
               <td>{{$p->quantidade}}</td>
               <td>{{$p->categoria_nome}}</td>
               <td>
                   <a href='/produto/mostra/{{$p->id}}'>Visualizar</a>
               </td>
                <td>
                    <a href='/produto/remove/{{$p->id}}'>Remover</a>
                </td>
           </tr>
    </table>
    @endforeach
</body>
@if(old('nome'))
 Produto {{old('nome')}} adicionado com sucesso!!
 @endif
@stop