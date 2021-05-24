@extends('layouts.main')

@section('title','Home')

@section('content')

<div class='container'>

    <div class='row align-items-start'>
        <div class='container corpo1 col'>
    
            <div class='pesquisa'>
                <form action="/" method='GET' class='col-md-6'>
                   <label>Pesquisar Empresa</label>
                    <input type="text" id='search' name='search' class='form-control ' placeholder='Pesquisa'>
                </form>
            </div>
            <table class="table table-striped" id='homeTable'>
            <thead>
                <tr>
                <th scope="col">Codigo ID</th>
                <th scope="col">EmpresaJr</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empresa as $emp)
                    <tr>
                        <th>{{$emp->id}}</th>
                        <td>{{$emp->nome}}</td>
                    </tr>
                @endforeach
                
            </tbody>
            </table>
        </div>
    </div>
</div>

@endsection


