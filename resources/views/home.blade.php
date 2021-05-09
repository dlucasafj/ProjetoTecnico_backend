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
        <th scope="col">EmpresaJr</th>
        <th scope="col">Federacao</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empresa as $emp)
            <tr>
                <th>{{$emp->id}}</th>
                <td>{{$emp->nome}}</td>
                <td>{{$emp->federacao_id}}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection