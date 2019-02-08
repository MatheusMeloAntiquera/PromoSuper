@extends('templates.page');

@section('title')
    Home
@endsection


@section('content')
<div class="container-fluid">
   
    <div class='row'>
        <div class="card-group">
        @foreach ($produtos as $p)
                <div class="col-4" style="margin-top: 20px; margin-bottom: 10px">
                    <div class="card h-70">
                    <img class="card-img-top" src="{{ asset($p['imagem'])}}" alt="Card image cap">
                        <div class="card-body">
                        <h4 class="card-title">{{ $p['nome']}} - {{ $p['supermercado']}} </h4>
                        <p class="card-text">R$ {{ number_format($p['preco'], 2, ',', '.')}} 
                        </p>
                        </div>
                    </div>
                </div>
         @endforeach
        </div>
</div>
@endsection