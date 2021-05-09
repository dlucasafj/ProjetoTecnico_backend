@extends('layouts.main')

@section('title','Cadastro Empresa Jr')

@section('content')
<div class="container">
    <div id='background'>
        <h1>Cadastro Empresa Júnior</h1>
        <form class='row g-3' action='/empresas' method='POST'>
            @csrf
            <div class='form-group col-md-6'>
                <label class='form-label'>Nome da Empresa</label>
                <input type="text" class='form-control' id='nome' name='nome'>
            </div>
            <div class='col-md-6'>
                <label class='form-label'>Federação</label>
                <input type="text" class='form-control' id='federacao' name='federacao'>
            </div>
            <input type="submit" class='btn btn-primary btn-sm' value='Cadastro'>
        </form>
        <button type="button" class="btn btn-danger btn-sm cadastrobtn">Cancelar</button>
    </div>
</div>

@endsection