@extends("layouts.master", ["title" => 'detail produit'])

@section("links")
<link rel="stylesheet" href="{{ asset('assets/css/detail.css')}}">
<link rel="stylesheet" href="{{ asset('assets/carou/carou.css')}}">
<link rel="stylesheet" href="{{ asset('assets/carou/carou2.css')}}">
@stop

@section("content")
<!-------------      conteneur principale        --------->
<div class="detail00">
        <!-------- premiere partie ---------->
        <div class="detail_block01">
            <div class="nom_produit sm">Nom {{ $product->name}}</div>

            <div class="block01">
                <div class="img2">
                    <div><img src="images/products/{{$product->image}}" class="img22"></div>
                    <div><img src="assets/img/blacksunset.jpg" class="img22"></div>
                    <div><img src="assets/img/blacksunset.jpg" class="img22"></div>
                </div>
                <div class="img1">
                    <div><img src="assets/img/blacksunset.jpg" class="imgimg"></div>
                    <div><img src="assets/img/blacksunset.jpg" class="imgimg"></div>
                    <div><img src="assets/img/blacksunset.jpg" class="imgimg"></div>
                </div>
            </div>
            <div class="block02">
                <div class="nom_produit">Nom vetement tarafe</div>
                <div class="marque_produit">black sunset</div>
                <div class="prix_produit">15000 FCFA</div>
                <div class="description_detail">
                    <div class="desc_titre">Description</div>
                    <div class="desc_prod">
                        Le Lorem Ipsum est simplement du faux 
                        texte employé dans la composition et la 
                        mise en page avant impression. Le Lorem 
                        Ipsum est le faux texte standard de l'imprimerie 
                        depuis les années 1500, quand un imprimeur anonyme 
                    </div>
                </div>
                <form action="#">
                    <!--------------        taille          -------------------->
                    <div class="taille_detail">
                        <div class="taille_desc">Taille :</div>
                        <div class="taille_choix">
                            <label for="check11">
                                <input type="checkbox"  class="check0" id="check11" >
                                <span class="square">M</span>
                            </label>
                            <label for="check22">
                                <input type="checkbox"  class="check0" id="check22" >
                                <span class="square">L</span>
                            </label>
                            <label for="check33">
                                <input type="checkbox"  class="check0" id="check33" >
                                <span class="square">XL</span>
                            </label>
                            <label for="check44">
                                <input type="checkbox"  class="check0" id="check44" >
                                <span class="square">XXL</span>
                            </label>
                        </div>
                    </div>
                    <!----------            couleur     ------------>
                    <div class="couleur_detail">
                        <div class="couleur_titre">Couleur :</div>
                        <div class="couleur_choix">
                            <label for="check1">
                                <input type="checkbox"  class="check0" id="check1" >
                                <span class="round rnd1"></span>
                            </label>
                            <label for="check2">
                                <input type="checkbox"  class="check0" id="check2" >
                                <span class="round rnd2"></span>
                            </label>
                            <label for="check3">
                                <input type="checkbox"  class="check0" id="check3" >
                                <span class="round rnd3"></span>
                            </label>
                            <label for="check4">
                                <input type="checkbox"  class="check0" id="check4" >
                                <span class="round rnd4"></span>
                            </label>
                            <label for="check5">
                                <input type="checkbox"  class="check0" id="check5" >
                                <span class="round rnd5"></span>
                            </label>
                        </div>
                    </div>
                    <!---------------           ajouter au panier       ------------->
                    <div class="detail_submit">
                        <input type="submit" class="submit" value="Ajouter au panier">
                    </div>
                </form>
                
            </div>
        </div>


        <!----------------          Deuxieme partie             ------------>
        <div class="detail_block02">
            <div class="block_titre">
                <div class="detail act">Detail</div>
                <div class="livraison no_act">Livraison</div>
                <div class="avis no_act">Avis</div>
            </div>
            <div class="detail_text h_text voir">
                premier <br>
                Le Lorem Ipsum est simplement du faux texte 
                employé dans la composition et la mise en page 
                avant impression. Le Lorem Ipsum est le faux texte 
                standard de l'imprimerie depuis les années 1500, quand 
                un imprimeur anonyme assembla ensemble des morceaux de 
                texte pour réaliser un livre spécimen de polices de texte 
            </div>
            <div class="livraison_text h_text hide">
                deuxieme <br>
                Le Lorem Ipsum est simplement du faux texte 
                employé dans la composition et la mise en page 
                avant impression. Le Lorem Ipsum est le faux texte 
                standard de l'imprimerie depuis les années 1500, quand 
                un imprimeur anonyme assembla ensemble des morceaux de 
                texte pour réaliser un livre spécimen de polices de texte 
            </div>
            <div class="avis_text h_text hide">
                troisieme <br>
                Le Lorem Ipsum est simplement du faux texte 
                employé dans la composition et la mise en page 
                avant impression. Le Lorem Ipsum est le faux texte 
                standard de l'imprimerie depuis les années 1500, quand 
                un imprimeur anonyme assembla ensemble des morceaux de 
                texte pour réaliser un livre spécimen de polices de texte 
            </div>
        </div>


        <!----------------          troisieme partie        --------------->
        <div class="detail_block03">
            <div class="div_nouveaute">
                <p class="p1" >Produits similaires</p>
                <div class="underline"></div>
            </div>
            <div class="similaire">
                <div class="brd">
                    <div class="div_nouveaute_produit">
                        <div class="nouveaute01">
                            <a class="class_link btn" href="#">
                                <div class="div_img_nouveaaute">
                                    <img class="img_nouveaute" src="assets/img/toge.jpg" alt="">
                                </div>
                                <div class="info_prod">
                                    <p class="nom_prod">Toge UVCI</p>
                                    <p class="marque_prod">Soutra Fanny</p>
                                    <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                                </div>
                            </a>
                        </div>
                        <div class="nouveaute01">
                            <a class="class_link btn" href="#">
                                <div class="div_img_nouveaaute">
                                    <img class="img_nouveaute" src="assets/img/toge.jpg" alt="">
                                </div>
                                <div class="info_prod">
                                    <p class="nom_prod">Toge UVCI</p>
                                    <p class="marque_prod">Soutra Fanny</p>
                                    <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                                </div>
                            </a>
                        </div>
                        <div class="nouveaute01">
                            <a class="class_link btn" href="#">
                                <div class="div_img_nouveaaute">
                                    <img class="img_nouveaute" src="assets/img/toge.jpg" alt="">
                                </div>
                                <div class="info_prod">
                                    <p class="nom_prod">Toge UVCI</p>
                                    <p class="marque_prod">Soutra Fanny</p>
                                    <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>


@stop
@section("scripts")

<script src="{{ asset('assets/carou/jquery-1.min.js')}}"></script>
<script src="{{asset('assets/carou/carou.min.js')}}"></script>
<script src="{{ asset('assets/carou/jquery-migrate-1.min.js')}}"></script>
<script src="{{asset('assets/js/detail2.js')}}"></script>
<script src="{{asset('assets/js/detail.js')}}"></script>
@stop
