@extends('layout.main')
@section('title', 'Inicio')

@section('content')

<div id="search-countainer" class="col-md-12">
    <h1>Busque um produto</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar" autocomplete="off">
        
    </form>
</div>

@endsection