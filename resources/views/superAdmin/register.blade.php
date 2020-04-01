
@extends("layouts.shop-dashboard-layout", ["title" => 'inscription  admin'])

@section("links")
<link rel="stylesheet" href="{{ asset('assets/css/inscription.css')}}">
@stop

@section("content")


<div class="div00">
    <!--------- block d'entrees ------->
    <div class="div01">
        <p class="bvenu">Bienvenue sur le site de Tarafe</p>
        <form method="POST" action="{{ route('registerAdmin') }}">
            @csrf
            <input type="text" placeholder="nom" name="firstname">
            <input type="text" placeholder="prenom" name="lastname">
            <input type="tel" placeholder="Numéro de téléphone" name="phone">
            <input type="email" placeholder="E-mail" name="email">
            <input type="password" placeholder="Mot de passe" name="password">
            <input type="password" placeholder="Confirmer votre mot de passe" name="password_confirm">
            <input type="submit" value="S'inscrire">
        </form>
    </div>


    <!--------- block d'image ------->
    <div class="div02">
        images
    </div>
</div>
@stop
@section("scripts")


@stop