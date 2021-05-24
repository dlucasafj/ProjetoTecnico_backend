@extends('layouts.main')

@section('title','Lista Federação')

@section('content')
<div class='container'>
    <div class='row align-items-start corpo1'>
        <div class='col'>
            <h4>Federações Cadastradas</h4>

            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Codigo ID</th>
                <th scope="col">Federação</th>
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
        

    </div>

</div>

@endsection