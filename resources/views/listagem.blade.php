@extends('principal')

@section('conteudo')
		<h1>Lista de produtos com Laravel</h1>
		<table class="table table-striped table-bordered">		 		
			@foreach($produtos as $p)
			 <tr class="{{ $p->$quantidade <= 1 ? 'danger' : '' }}">
			 	<td>{{$p->nome}}</td>
			 	<td>{{$p->valor}}</td>
			 	<td>{{$p->descricao}}</td>
			 	<td>{{$p->quantidade}}</td>
			 	<td>
			 		<a href="/produtos/mostra?id={{$p->ID}}">
			 			<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			 		</a>
			 	</td>
			 	<td>
			 		<a href="/produtos/mostra">
			 			<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
			 		</a>
			 	</td>			 	
			 </tr>
			@endforeach		
		</table>
@stop