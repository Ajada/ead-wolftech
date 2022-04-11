@extends('layouts.header.main')

@section('header')    
    <div class="container-content">
        <div class="header-content">
            <div class="ico-home header-home">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="header-home">
                <h1>
                    Olá, {{ 'Nome do aluno' }}    
                </h1>
                <p>Você está matriculado em 1 curso(s) </p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
@endsection

@section('content')
    <div class="title">
        <h1><i class="fa-solid fa-graduation-cap"></i> Seus Cursos</h1>
    </div>
        @component('components.blocks')
            
        @endcomponent

        @component('components.blocks')
            
        @endcomponent

        @component('components.blocks')
            
        @endcomponent

        @component('components.blocks')
            
        @endcomponent

        @component('components.blocks')
            
        @endcomponent
    <div class="clear"></div>
@endsection
