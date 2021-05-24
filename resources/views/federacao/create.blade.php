@extends('layouts.main')

@section('title','Cadastro Federação')

@section('content')
<div class="container">
    <div class='corpo1'>
        <h1>Cadastro Federação</h1>
        <form class='row g-3' action='/federacao' method='POST'>
            @csrf
            <div class='form-group col-md-6'>
                <label class='form-label'>Federação</label>
                <input type="text" class='form-control' id='nome' name='nome'>
            </div>
            <div class='col-md-6'>
                <label class='form-label'>Estado</label>
                <input type="text" class='form-control' id='estado' name='estado'>
            </div>
            <input type="submit" class='btn btn-primary btn-sm' value='Cadastro'>
        </form>
        <button type="button" class="btn btn-danger btn-sm cadastrobtn">Cancelar</button>
    </div>
</div>

@endsection