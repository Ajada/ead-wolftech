{{-- <div class="container-block"> --}}
    <a class="block" href="{{ isset($module_url) ? $module_url : '#' }}">
        <div class="img-block" style="background-image: url({{ isset($image_url) ? $image_url : '../images/example_1.jpg'}}); 
        background-position: center; background-repeat: no-repeat; background-size: cover;"> </div>

        <div class="content-block">
            <div class="content-block-title">
                <h1>{{ $title }}</h1>
            </div>
            <div class="content-block-access">
                <button> <i class="fa-solid fa-play"></i> Acessar Curso </button>
            </div>
        </div>
    </a>    

{{-- </div> --}}
