
@extends("layouts.shop-dashboard-layout", ["title" => 'inscription'])

@section("links")
<link rel="stylesheet" href="{{ asset('assets/css/inscription.css')}}">
@stop

@section("content")


<div class="div00">
    <!--------- block d'entrees ------->
    <div class="div01">
        <p class="bvenu">Bienvenue sur le site de Tarafe</p>
        <form action="post" action="#">
            <input type="text" placeholder="nom">
            <input type="text" placeholder="prenom">
            <input type="email" placeholder="E-mail">
            <input type="tel" placeholder="Numéro de téléphone">
            <input type="password" placeholder="Mot de passe">
            <input type="password" placeholder="Confirmer votre mot de passe">
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