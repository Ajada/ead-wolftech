@extends('layouts.header.main')

@section('header')    
    <div class="container-content">
        <div class="header-content">
            <div class="ico-home header-home">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="header-home">
                <h1>
                    Olá,<span id="user">{{session('session_name')}}</span>
                </h1>
                <p>Você está matriculado em {{ '1' }} curso(s) </p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
@endsection

@section('content')

    <div class="module">        
        <div class="module-menu">     {{-- link das aulas --}}
            
            <div class="module-class-title">
                <h1> 
                    <i class="fa-solid fa-film"></i> 
                    {{ $course->course_name }}
                </h1>
            </div>            
            
            @foreach ($class as $key)
                <div class="module-class">
                    <a title="{{ isset($key->link_description) ? $key->link_description : $key->class_name }}" href="/module/{{ $course->id }}/{{ $key->class_link }}">
                        <i class="fa-solid fa-video"></i> <span> {{ $key->class_name }} </span>    
                    </a>                
                </div>
            @endforeach

        </div>

        <div class="module-menu-ico"> {{-- barras de menu --}}
            <i class="fa-solid fa-bars"></i>          
        </div>  
        
        <div class="class-content">  {{-- video da aula atual --}}
            <div class="class-content-title">
                <h1>{{-- $key->class_name --}}</h1>
            </div>

            <div class="class-content-movie">
                <div id="player" data-vide-id="{{ $class_link }}"></div>
            </div>            
        </div>

        @component('components.modals.question', [ 'question' => $key->question, 'response_1' => $key->response_1, 'response_2' => $key->response_2, 'response_3' => $key->response_3, 'response_4' => $key->response_4 ])
                        
        @endcomponent

    </div>

@endsection