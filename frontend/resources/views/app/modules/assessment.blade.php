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
    <div class="central-container">
        <div style="text-align: center; font-size: 18px;" class="title">
            <h1 id="course_name">{{ $assessment[0]['assessment_name'] }}  </h1>
        </div>
    </div>
    @foreach ($questions as $item => $value)
        <div class="central-container">
            <div style="" class="title">
                <h1 class="course_question" style="text-align: center">Pergunta <i style="font-size: 18px" class="fa-solid fa-{{$item == 0 ? '1' : 1 + $item}}"></i>{{ $item == 9 ? '10' : '' }} - {{ $value->{'question'} }}  </h1>
            </div>

            <div class="cont-option">
                <div class="ul">
                    <div class="li">
                        <input type="checkbox" class="checkbox" id="A_{{ $item }}" name="selector">
                        <label for="A_{{ $item }}">{{ $value->{'0'} }}</label>
                        
                        <div class="check"></div>
                    </div>
                    
                    <div class="li">
                        <input type="checkbox" class="checkbox" id="B_{{ $item }}" name="selector">
                        <label for="B_{{ $item }}">{{ $value->{'1'} }}</label>
                        
                        <div class="check"><div class="inside"></div></div>
                    </div>
                    
                    @if ($value->{'2'} != "")
                        <div class="li">
                            <input type="checkbox" class="checkbox" id="C_{{ $item }}" name="selector">
                            <label for="C_{{ $item }}">{{ $value->{'2'} }}</label>
                            
                            <div class="check"> <div class="inside"></div> </div>
                        </div>    
                    @endif

                    @if ($value->{'3'} != "")
                        <div class="li">
                            <input type="checkbox" class="checkbox" id="D_{{ $item }}" name="selector">
                            <label for="D_{{ $item }}">{{ $value->{'3'} }}</label>
                            
                            <div class="check"> <div class="inside"></div> </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endforeach

    <div class="central-container">
        <button class="btn-assessment">
            <span class="assessment-btn" id="choice0">Finalizar tentativa</span>
        </button>
    </div>
    
    @component('components.modals.info')
        
    @endcomponent

@endsection