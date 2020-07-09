@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Lista Prodotti</h1>
                @foreach ($lista_prodotti as $prodotto)
                    <p> {{$prodotto->name}}</p>
                    <p> {{$prodotto->description}}</p>
                    <p> {{$prodotto->price}}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('titolo', 'lista prodotti')
