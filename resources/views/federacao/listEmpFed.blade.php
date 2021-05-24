@extends('layouts.main')

@section('title','Empresas Por Federacao')

@section('content')
<div class='container'>
    <div class='corpo1'>
    
        <div class='col'>
                <div >
                        <form action="listEmpFed" method='GET' class='col-md-6'>
                            <label id="ef">Pesquise as empresas de cada Federação</label>
                            <input type="text" id='search' name='search' class='form-control ' placeholder='Pesquisa Empresas de cada Federação'>
                        </form>
                </div>
                <div id='title'>
                    @if($search)
                     <h3>Empresas da {{$search}}</h3>
                    @endif
                </div>
                <table class="table table-striped" id="empFed">
                    <thead>
                        <tr>
                        <th scope="col">Codigo ID</th>
                        <th scope="col">
                            @if($search)
                                Empresas
                            @else
                                Federação
                            @endif
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($empresas as $emp)
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