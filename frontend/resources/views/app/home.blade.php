@extends('layouts.header.main')

@section('header')    
    <div class="container-content">
        <div class="header-content">
            <div class="ico-home header-home">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="header-home">
                <h1>
                    Olá, {{ session('session_name') }}    
                </h1>
                <p>Você está matriculado em {{ '3' }} curso(s) </p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
@endsection

@section('content')
    <div class="central-container">
        <div class="title">
            <h1><i class="fa-solid fa-graduation-cap"></i> Seus Cursos</h1>
        </div>
            @foreach ($course as $key => $value)
                @component('components.blocks', ['module_url' => 'module/'.$value['id'] , 'image_url' => '../images/example_1.jpg', 'title' => $value['course_name'] ])
                    
                @endcomponent    
            @endforeach
        <div class="clear"></div>
    </div>
@endsection
