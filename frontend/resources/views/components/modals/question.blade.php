<div class="container-modal">
    <div class="container-question">
        <div class="question">
            <h1> {{ isset($question) ? $question : '' }} </h1>
        </div>
        <div class="response">
            <form>
                {{-- @csrf --}}
                <div class="button-grp">
                    {{ $slot }}
                </div>
            </form>
        </div>
    </div>
</div>