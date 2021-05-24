@extends('layouts.main')

@section('title','EcompJr')

@section('content')

<div class='container'>
    <div id='geral'>
        <section class='diretrizes'>
            <div id='missao'>
                <h4>Missão</h4>
                <p>Através da vivência empresarial e trabalho em equipe, formar profissionais inovadores, comprometidos e capazes de vencer desafios futuros</p>
            </div>
            <div id='visao'>
            
                <h4>Visão</h4>
                <p>Ser uma empresa que realiza projetos de impacto, mais conectada ao movimento empresa júnior e com grande reconhecimento dentro e fora da universidade</p>
            </div>
            <div id='valores'>
                <h4>Valores</h4>
                <p>Os valores de uma empresa guiam a conduta da mesma, portanto a EcompJr baseia-se nos seguintes valores: Protagonismo, Cooperatividade, Assiduidade, Resiliência, Constância em resultados, Evolução com os erros, Conexão com o Movimento, Foco na Qualidade, Ética e Empatia</p>
            </div>
        </section>

        <section class='produtos'>
            <h3>Nossos Serviços</h3>  

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sites</h5>
                        <p class="card-text">Desenvolvimento de sites de forma criativa, funcional e responsiva, oferecendo a melhor solução para você ou sua empresa</p>
                    
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sistemas Locais</h5>
                            <p class="card-text">Impulsione o seu desempenho profissional reduzindo seus gastos. Possibilitamos a você os melhores sistemas Locais que premitem automatizar com facilidade suas tarefas ou serviços</p>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Aplicativos Mobile</h5>
                        <p class="card-text">Já pensou em ter a sua empresa, serviços e ideias na palma de sua mão? Nós possibilitamos isso desenvolvendo soluções mobile sob medida para você</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sistemas Web</h5>
                            <p class="card-text">Reduza seus gastos impulsionando o seu desempenho profissional. Possibilitamos a você os melhores Sistemas Web que permitem automatizar com facilidade suas tarefas ou serviços</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">e-Commerce</h5>
                        <p class="card-text">Tenha sua loja Virtual e faça seus produtos atingirem uma clientela ainda maior.</p>
                    </div>
                    </div>
                </div>
            </div>
                 
        </section>
    </div>
</div>





@endsection