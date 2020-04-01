@extends("layouts.shop-dashboard-layout", ["title" => 'Connexion'])

@section("links")
<link rel="stylesheet" href="{{asset('assets/css/connexion.css')}}">
@stop

@section("content")
<div class="container00">
    <p class="connect">Connectez-vous</p>
    <form action="{{ route('loginAdmin') }}" method="POST">
    
        @if(Session::has('succes'))
            <div class="alert alert-success" align="center">{{ Session::get('succes') }}</div>
        @endif

        @if(Session::has('error'))
            <div class="alert alert-danger" align="center">{{ Session::get('error') }}</div>
        @endif

        <input type="email" placeholder="E-mail ou numéro de téléphone" name="email">
        <input type="password" placeholder="Mot de passe" name="password">
        <label for="rappeler">
            <input type="checkbox" name="rappeler" id="rappeler">
            Se rappeler de moi
        </label>

        <a href="#" class="oublier">Mot de passe oublié ?</a>

        @csrf

        <input type="submit" value="Se connecter">

    </form>
    <p class="creer">
        Vous n'avez pas encore de compte? <br>
        <a href="#">Créez en un ici</a>
    </p>
</div>

@stop
@section("scripts")


@stop
