@extends('layouts.header.login')

@section('content')

    <div class="container">
        <div class="form-login">
            <div class="image-login">
                <img src="{{ asset('images/login/logo.png') }}" alt="">
            </div>
            <form method="post">
                <div class="container-input">
                    <input class="container__input input-login" type="text" placeholder="Usuario" required>
                    <label class="container__label">Usuario: </label>
                </div>
                <div class="container-input">
                    <input class="container__input input-login" type="password" placeholder="Senha" required>
                    <label class="container__label">Senha: </label>
                </div>
                <button class="btn-login">Entrar</button>
            </form>
        </div>
    </div>
    
@endsection