@extends("layouts.master", ["title" => 'blog'])

@section("links")
<link rel="stylesheet" href="assets/css/blog.css">
@stop

@section("content")
<div class="blog_cont00">
        <div class="blog">
            <img src="img/1.png" alt="">
        </div>
        <!-------- la richesse de nos textiles      --------->
        <div class="div_nouveaute">
            <p class="p1" >La richesse de nos textiles</p>
            <div class="underline"></div>
        </div>
        <!----------- bouton ------------>
        <div class="bouton_div">
            <button><a href="#">Batique</a></button>
            <button><a href="#">Bogolan</a></button>
            <button><a href="#">Tissage</a></button>
        </div>
        <!----------------      Article         ----------->
        <div class="div_blog_article">
            <!-------- premier article ------->
            <div class="div_article">
                <div class="article_img">
                    <img src="img/img4.jpg" alt="">
                </div>
                <div class="article">
                    <p class="art_titre">Le pagne traditionnel</p>
                    <p class="p_article">
                        On sait depuis longtemps que travailler avec du texte
                        lisible et contenant du sens est source de distractions,  
                        et empêche de se concentrer sur la mise en page elle-même.  
                        L'avantage du Lorem Ipsum sur un texte générique comme  'Du texte. 
                        Du texte. Du texte
                    </p>
                    <div class="div_date">
                        <p>Publié le ....</p>
                        <p><a href="#">Voir plus</a></p>
                    </div>

                </div>
            </div>
            <!-------- deuxieme article ------->
            <div class="div_article">
                <div class="article_img">
                    <img src="img/img4.jpg" alt="">
                </div>
                <div class="article">
                    <p class="art_titre">Le pagne traditionnel</p>
                    <p class="p_article">
                        On sait depuis longtemps que travailler avec du texte
                        lisible et contenant du sens est source de distractions,  
                        et empêche de se concentrer sur la mise en page elle-même.  
                        L'avantage du Lorem Ipsum sur un texte générique comme  'Du texte. 
                        Du texte. Du texte
                    </p>
                    <div class="div_date">
                        <p>Publié le ....</p>
                        <p><a href="#">Voir plus</a></p>
                    </div>

                </div>
            </div>
        </div>
        <div class="div_pagination">
            <button><a href="#">< Precedant</a></button>
            <button><a href="#">1</a></button>
            <button><a href="#">2</a></button>
            <button><a href="#">3</a></button>
            <button><a href="#">4</a></button>
            <button><a href="#">Suivant ></a></button>
        </div>
    </div>

@stop