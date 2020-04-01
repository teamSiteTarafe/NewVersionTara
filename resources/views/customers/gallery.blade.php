@extends("layouts.master", ["title" => 'galerie'])

@section("links")
<link rel="stylesheet" href="assets/css/galerie.css">
@stop

@section("content")

<div class="gal_cont000">
        <div class="gal_img001">
            <img src="assets/img1.png" class="galerie" alt="">
        </div>
        <div class="gal_img_container">
            <!--------  premiere ligne ----------->
            <div><img src="assets/img/img1.jpg" class="divimg" alt=""></div>
            <div><img src="assets/img/img2.jpg" class="divimg" alt=""></div>
            <div><img src="assets/img/img4.jpg" class="divimg" alt=""></div>
            <div><img src="assets/img/img3.jpg" class="divimg" alt=""></div>
            <!--------  deuxieme ligne --->
            <div><img src="assets/img/img2.jpg" class="divimg" alt=""></div>
            <div><img src="assets/img/img1.jpg" class="divimg" alt=""></div>
            <div><img src="assets/img/img3.jpg" class="divimg" alt=""></div>
            <div><img src="assets/img/img4.jpg" class="divimg" alt=""></div>
            <!--------  troisieme ligne --->
            <div><img src="assets/img/img1.jpg" class="divimg" alt=""></div>
            <div><img src="assets/img/img3.jpg" class="divimg" alt=""></div>
            <div><img src="assets/img/img2.jpg" class="divimg" alt=""></div>
            <div><img src="assets/img/img4.jpg" class="divimg" alt=""></div>
        </div>
    </div>


@stop
@section("scripts")


@stop
