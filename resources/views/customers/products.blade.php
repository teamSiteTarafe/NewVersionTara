@extends("layouts.master", ["title" => 'produits'])

@section("links")
<link rel="stylesheet" href="assets/css/produits.css">
@stop

@section("content")

 <!----------    div_nouveaute       ----------->
 <div class="div_nouveaute">
    <p class="p1" >Nos produits</p>
    <div class="underline"></div>
</div>

<!-----------   categories -------------->
<div class="div_categorie01">
    <div class="div_categorie02">
        <div class="trois">
            <div class="un"></div>
            <div class="1"></div>
            <div class="1"></div>
        </div>
        <div class="categorie">
            Catégories
        </div>
    </div>
    <div class="div_categorie03">
        <div class="div_s_menu">
            <div class="vet">Vêtements</div>
            <div class="chau">Accessoires</div>
            <div class="acc">Chaussures</div>
            <div class="tex">Textile</div>
        </div>
        <div class="div_s_menu02">
            <div class="s_menu02 s01">
                <div class="">
                    <div class="titre">enfants 1</div>
                    <div class="s-titre">
                        <p><a class="aa" href="#">T-shirts</a></p>
                        <p><a class="aa" href="#">T-shirts</a></p>
                        <p><a class="aa" href="#">T-shirts</a></p>
                        <p><a class="aa" href="#">T-shirts</a></p>
                        <p><a class="aa" href="#">T-shirts</a></p>
                        <p><a class="aa" href="#">T-shirts</a></p>
                    </div>
                </div>
                <div class="">
                    <div class="titre">Tous 1</div>
                    <div class="s-titre">
                        <p>T-shirts</p>
                        <p>Polos</p>
                        <p>Vestes et Bumbers</p>
                        <p>T-shirts</p>
                        <p>Polos</p>
                        <p>Vestes et Bumbers</p>
                    </div>
                </div>
                <div class="">
                    <div class="titre">Homme 1</div>
                    <div class="s-titre">
                        <p>T-shirts</p>
                        <p>Polos</p>
                        <p>Vestes et Bumbers</p>
                        <p>T-shirts</p>
                        <p>Polos</p>
                        <p>Vestes et Bumbers</p>
                    </div>
                </div>
                <div class="">
                    <div class="titre">Femme 1</div>
                    <div class="s-titre">
                        <p>T-shirts</p>
                        <p>Polos</p>
                        <p>Vestes et Bumbers</p>
                        <p>T-shirts</p>
                        <p>Polos</p>
                        <p>Vestes et Bumbers</p>
                    </div>
                </div>
            </div>
            <div class="s_menu02 s02">
                <div class="">
                    <div class="titre">enfants 1</div>
                    <div class="s-titre">
                        <p>T-shirts</p>
                        <p>Polos</p>
                        <p>Vestes et Bumbers</p>
                        <p>T-shirts</p>
                        <p>Polos</p>
                        <p>Vestes et Bumbers</p>
                    </div>
                </div>
            </div>
            <div class="s_menu02 s03">
                <div class="">
                    <div class="titre">enfants 1</div>
                    <div class="s-titre">
                        <p>T-shirts</p>
                        <p>Polos</p>
                        <p>Vestes et Bumbers</p>
                        <p>T-shirts</p>
                        <p>Polos</p>
                        <p>Vestes et Bumbers</p>
                    </div>
                </div>
            </div>
            <div class="s_menu02 s04">
                <div class="">
                    <div class="titre">enfants 1</div>
                    <div class="s-titre">
                        <p>T-shirts</p>
                        <p>Polos</p>
                        <p>Vestes et Bumbers</p>
                        <p>T-shirts</p>
                        <p>Polos</p>
                        <p>Vestes et Bumbers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!----------    Produits nouveaute       ----------->
<div class="brd">
    <div class="div_nouveaute_produit">
            @foreach ($products as $product)
            <div class="nouveaute01">
                <a class="class_link btn" href="{{ route('product-detail')}}">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="images/products/{{ $product->image}}" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">{{ $product->name}}</p>
                        <p class="marque_prod">{{ $product->shop_id}}</p>
                        <p class="prix_prod"><span class="prix_prod">{{ $product->price}}</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
            @endforeach
    </div>
</div>
@stop
@section("scripts")
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/produit.js"></script>
@stop
