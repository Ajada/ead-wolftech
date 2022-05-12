@extends('layouts.header.main')

@section('header')    
    <div class="container-content">
        <div class="header-content">
            <div class="ico-home header-home">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="header-home">
                <h1>
                    Olá {{ session('session_name')}}    
                </h1>
                <p>Você está matriculado em {{ session('quantity_courses') }} curso(s) </p> 
            </div>
            <div class="clear"></div>
        </div>
    </div>
@endsection

@section('content')

    <div class="central-container">
        <div style="text-align: center" class="title">
            <h1><i class="fa-solid fa-table-list"></i> AVALIAÇÃO FINAL</h1>
        </div>
    
        <div style="text-align: center" class="info">
            <p>Tentativas permitidas: 2</p>
            <p>Metodo de avaliação: Nota mais alta</p>
            <p>Nota para aprovação: 8,00 de 10,00</p>
        
            <div class="assessment">
                <a href="/assessment/module/{{ $quiz->id }}">Iniciar Avaliação</a>
            </div>
        </div>
    </div>
@endsection