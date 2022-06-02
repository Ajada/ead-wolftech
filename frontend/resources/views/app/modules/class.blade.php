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
        <div class="module-menu">
            <div class="module-class-title">
                <h1> 
                    <i class="fa-solid fa-film"></i> 
                    <span>{{ $course_name }}</span>
                </h1>
            </div>

                <h2 style="font-weight: 700">AULAS CONCLUIDAS</h2>
                @if ($memory !== null)   
                    @foreach ($memory as $item)
                        <div class="module-class ">
                            <a class="pressed-class " title="{{ $item['desc'] }}" href="/module/{{ $id }}/{{ $item['link'] }}">
                                <i class="fa-solid fa-check"></i> <span> {{ $item['name'] }} </span>
                            </a>                
                        </div> 
                    @endforeach

                    <hr>
                @endif

                @if ($before !== null)   
                    <div class="module-class ">
                        <a class="pressed-class " title="{{ $before['desc'] }}" href="/module/{{ $id }}/{{ $before['link'] }}">
                            <i class="fa-solid fa-video"></i> <span> {{ $before['name'] }} </span>
                        </a>                
                    </div>
                @endif

                <div class="module-class ">
                    <a style="color: brown; font-weight: 700" class="pressed-class " title="{{ $current['desc'] }}" href="/module/{{ $id }}/{{ $link }}">
                        <i class="fa-solid fa-eye"></i> <span> {{ $current['name'] }} </span>
                    </a>                
                </div>

                @if ($after !== null)   
                    <div class="module-class toogle">
                        <a class="pressed-class " title="{{ $after['desc'] }}" href="/module/{{ $id }}/{{ $after['link'] }}">
                            <i class="fa-solid fa-video"></i> <span> {{ $after['name'] }} </span>
                        </a>                
                    </div> 
                @else
                    <div class="module-class final_assessment" style="display: none">
                        <a title="Avaliação Final - {{ $course_name }}" href="/assessment/{{ $course_token }}">
                            <i class="fa-solid fa-table-list"></i> <span> AVALIAÇÃO FINAL </span>
                        </a>                
                    </div>
                @endif    


        </div>
        
        <div class="class-content">
            <div class="class-content-title">
                <h1> {{ $current['name'] }}</h1>
            </div>

            <div class="class-content-movie">
                <div id="player" data-vide-id="{{ $link }}"></div>
            </div>
        </div>

        @php $arr = []; @endphp
        @foreach ($question as $item => $value)
            @php
                $item == 0 ? $arr[0] = $value->{$item} : ''; $item == 1 ? $arr[1] = $value->{$item} : ''; $item == 2 ? $arr[2] = $value->{$item} : ''; $item == 3 ? $arr[3] = $value->{$item} : '';  
            @endphp
        @endforeach
        
        @component('components.modals.question', [ 'question' => $query ] )
            <button class="btn0">
                <span class="form-btn">A - {{ $arr[0] }}</span>
            </button>
            
            <button class="btn0">
                <span class="form-btn">B - {{ $arr[1] }}</span>
            </button>

            <button class="btn0">
                <span class="form-btn">C - {{ $arr[2] }}</span>
            </button>

            <button class="btn0">
                <span class="form-btn">D - {{ $arr[3] }}</span>
            </button>
            <input type="hidden" id="question" value="{{$question_id}}">
        @endcomponent
    </div>
@endsection