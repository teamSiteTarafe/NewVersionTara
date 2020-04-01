
@extends("layouts.master", ["title" => 'boutique'])

@section("links")
<link rel="stylesheet" href="assets/css/boutique.css">
@stop

@section("content")
<div class="boutique_container">

<!--------      premiere image ----->
    <div class="bout_img1">
        <img src="assets/img/1.png" alt="">
    </div>
    <!--------      petite image carree ----->
    <div class="img_boss">
        <img src="assets/img/img4.jpg" alt="">
    </div>
    <div class="div_nouveaute">
        <p class="p1" >Description</p>
        <div class="underline"></div>
    </div>
    <div class="desc00">
        <p>
            Le Lorem Ipsum est simplement du faux texte employé dans la composition 
            et la mise en page  avant impression. Le Lorem Ipsum est le faux texte 
            standard de l'imprimerie depuis les années  1500, quand un imprimeur anonyme 
            assembla ensemble des morceaux de texte pour réaliser  un livre spécimen 
            de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est 
            aussi  adapté à la bureautique informatique, sans que son contenu n'en soit
            modifié. Il a été popularisé  dans les années 1960 grâce à la vente de feuilles 
            Letraset contenant des passages du Lorem Ipsum,  et, plus récemment, par son 
            inclusion dans des applications de mise en page de texte, comme Aldus  PageMaker.

        </p>
    </div>
    <!----------        images produits ------->
    <div class="img_div">
        <img src="assets/img/back.JPG" alt="">
    </div>
</div>
<!---------------           Affichage des produits ------>
<div class="boutique_produit">
    <div class="boutique_prod">
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

@stop