<div class="container-modal">
    <div class="container-question">
        <div class="question">
            <h1> {{ isset($question) ? $question : '' }} </h1>
        </div>
        <div class="response">
            <form>
                {{-- @csrf --}}
                <div class="button-grp">
                    {{-- <button  id="btn0">
                        <span class="form-btn" id="choice0">A - {{ isset($response_1) ? $response_1 : 'Outro' }}</span>
                    </button>
                    
                    <button id="btn1">
                        <span class="form-btn" id="choice1">B - {{ isset($response_2) ? $response_2 : 'Outro' }}</span>
                    </button>
                    
                    <button id="btn2">
                        <span class="form-btn" id="choice2">C - {{ isset($response_3) ? $response_3 : 'Outro' }}</span>
                    </button>
                    
                    <button id="btn3">
                        <span class="form-btn" id="choice3">D - {{ isset($response_4) ? $response_4 : 'Outro' }}</span>
                    </button> --}}
                    {{ $slot }}
                </div>
            </form>
        </div>
    </div>
</div>