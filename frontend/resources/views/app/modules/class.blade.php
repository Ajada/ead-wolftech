@extends('layouts.header.main')

@section('header')    
    <div class="container-content">
        <div class="header-content">
            <div class="ico-home header-home">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="header-home">
                <h1>
                    Olá<span id="user">{{session('session_name')}}</span>
                </h1>
                <p>Você está matriculado em {{ session('quantity_courses') }} curso(s) </p>
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
                    <span>{{ $course->course_name }}</span>
                </h1>
            </div>            
            
            @foreach ($class as $key)
                <div class="module-class ">
                    <a class="pressed-class " title="{{ isset($key->link_description) ? $key->link_description : $key->class_name }}" href="/module/{{ $course->id }}/{{ $key->class_link }}">
                        <i class="fa-solid fa-video"></i> <span> {{ $key->class_name }} </span>    
                    </a>                
                </div>
            @endforeach
                @if ($assessment == false)
                    <div class="module-class">
                        <a title="Avaliação Final - {{ $course->course_name }}" href="/assessment/{{ $course->course_token }}">
                            <i class="fa-solid fa-table-list"></i> <span> AVALIAÇÃO FINAL </span>
                        </a>                
                    </div>
                @endif
        </div>
        
        <div class="class-content">  {{-- nome da aula atual --}}
            <div class="class-content-title">
                {{-- <h1> {{ $key->class_name }}</h1> --}}
                <h1></h1>
            </div>

            @if (isset($first))
                <div class="class-content-movie">
                    <div id="player" data-vide-id="{{ $first->{'class_link'} }}"></div>
                </div>
            @else
                <div class="class-content-movie">
                    <div id="player" data-vide-id="{{ $class_link }}"></div>
                </div>
            @endif


        </div>

        @php $arr = []; @endphp
        @foreach ($question as $item => $value)
            @php
                $item == 0 ? $arr[0] = $value->{$item} : ''; $item == 1 ? $arr[1] = $value->{$item} : ''; $item == 2 ? $arr[2] = $value->{$item} : ''; $item == 3 ? $arr[3] = $value->{$item} : '';  
            @endphp
        @endforeach
        
        @component('components.modals.question', [ 'question' => $query ] )
            <button id="btn0">
                <span class="form-btn" id="choice0">A - {{ $arr[0] }}</span>
            </button>
            
            <button id="btn0">
                <span class="form-btn" id="choice0">B - {{ $arr[1] }}</span>
            </button>

            <button id="btn0">
                <span class="form-btn" id="choice0">C - {{ $arr[2] }}</span>
            </button>

            <button id="btn0">
                <span class="form-btn" id="choice0">D - {{ $arr[3] }}</span>
            </button>
        @endcomponent

    </div>

@endsection