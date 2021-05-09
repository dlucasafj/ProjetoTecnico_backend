@extends('layouts.main')

@section('title','Home')

@section('content')
<div class='container'>
    <div >
        <form action="/" method='GET' class='col-md-6'>
            <input type="text" id='search' name='search' class='form-control ' placeholder='Pesquisa'>
        </form>
    </div>

    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Empresa</th>
        <th scope="col">Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($federacao as $fed)
            <tr>
                <th>{{$fed->id}}</th>
                <td>{{$fed->nome}}</td>
                <td>{{$fed->estado}}</td>
            </tr>
        @endforeach
    </tbody>
    </table> 
</div>

@endsection