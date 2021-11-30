<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="paho pankoue">
    <title>projet o'tablier</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./images/5.jpg" width:32px,height:32px>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="./form.js" async></script> -->

</head>

<body>

    <!--  *****************ENTETE************** -->
    <header class="row">
        <h1 class="col animated-text">Déposez votre recette de cuisine</h1>
    </header>
    <section>
        <!-- ************CONTAINER********** -->
        <div class="container row m-auto">
            <form action="formulaire.php" method="POST" class="formul col-lg-8" id="myform" name="formulaire" novalidate enctype="multipart/form-data">
                <!-- etape nom de la recette -->
                <article>
                    <legend>TITRE DE LA RECETTE *:</legend>
                    <div class=" mb-3">
                        <label for="users"><span class="obligatoire"></span>&nbsp;&nbsp;&nbsp</label>
                        <!-- minlength="2"maxlength="25" -->
                        <input type="text" id="users" name="NomRecette">
                    </div>
                    <span id="error"></span>
                </article>
                <hr>
                <article>
                    <!-- **************required=champs obligatoir************ -->
                    <!-- etape nom de la biographie -->
                    <legend>BIOGRAPHIE :</legend>
                    <div class="row mb-3">
                        <textarea id="text" class="col" name="biographie" cols="115" placeholder="bio" rows="10"></textarea>
                    </div>
                    <span id="error1"></span>
                </article>
                <hr>
                <article>
                    <!--******************** etape Téléhargement image  *******************-->
                    <legend>IMAGE:</legend>
                    <div class="mb-3">
                        <div class="row image_recette">
                            <h2> <em>Ajout image</em></h2>
                            <label for="Photo">Ajouter une photo: </label>
                            <br><br>
                            <input type="file" name="photo" class="col-lg-4" id="fichier" multiple value="photo">
                        </div>
                    </div>
                    <span id="error2"></span>
                    <br>
                </article>
                <hr>
                <article>
                    <!-- ********************ETAPE INFO ********************* -->
                    <legend>INFOS CLÉS</legend>
                    <div class="mb-3">
                        <div class="dificul" style="text-align:left"><em>Difficulté</em></div>
                        <input name="difficulte" type="radio">Tres facile<br>
                        <input name="difficulte" type="radio">Facile<br>
                        <input name="difficulte" type="radio">moyenne<br>
                        <input name="difficulte" type="radio">difficile<br>
                        <input name="difficulte" type="radio">tres difficile<br>
                    </div>
                </article>
                <hr>
                <!-- *******************cout************* -->
                <article>
                    <div class="mb-3">
                        <div class="cou" style="text-align:left"><em>Cout</em></div>
                        <input name="cout" type="radio">Bon marché<br>
                        <input name="cout" type="radio">Budget moyen<br>
                        <input name="cout" type="radio">Assez cher<br>
                    </div>
                    <hr>
                    <!-- **********************pays d'origine*********** -->
                    <div class="mb-3">
                        <label for="pays"><em>Pays d'origine : </em></label>
                        <select id="Pays" name="pays">
                            <!-- <label for="title">Pays d'origine</label> -->
                            <option selected>-----</option>
                            <option value="Europe">Europe</option>
                            <option value="Afrique">Afrique</option>
                            <option value="canada">Amerique</option>
                            <option value="asie">asie</option>
                            <option value="oceanie">oceanie</option>
                        </select>
                    </div>
                    <span id="error3"></span>
                    <br>
                </article>
                <hr>
                <article>
                    <!-- ********************ETAPE PREPARATION********************* -->
                    <legend>TEMPS DE PREPARATION</legend>
                    <div class="mb-3">
                        <option selected>temps de preparation.</option>
                        <br>
                        <label for="temps"><em>Heure et Minuite :</em> </label>
                        <input type="time" id="temps" name="temps" min="0" max="24">
                    </div>
                </article>
                <hr>
                <article>
                    <div class="mb-3">
                        <option selected>Temps de cuisson</option>
                        <br>
                        <label for="temps"><em>Heure et Minuite :</em></label>
                        <input type="time" id="temps" name="temps1" min="0" max="24">
                    </div>
                </article>
                <hr>
                <article>
                    <!-- <div class="champ"> -->
                    <div class="mb-3">
                        <option selected>temps d'attente</option>
                        <br>
                        <label for="temps"><em>Heure et Minuite :</em> </label>
                        <input type="time" id="temps" name="temps2" min="0" max="24">
                    </div>
                </article>
                <hr>
                <article>
                    <!-- **************ETAPE INGREDIENTS************** -->
                    <legend>PERSONNE</legend>
                    <h2><em>Nombre de personnes ou portions </em></h2>
                    <div class="perso">
                        <div class="lapin">
                            <label for="number"></label>
                            <input type="number" id="num" name="NBPersonne" min="0" max="24">
                            <select class="personne" name="NBPersonne">
                                <option>---</option>
                                <!-- <option selected>Personne</option> -->
                                <option value="Piece">Piece</option>
                                <option value="Portion">Portion</option>
                                <option value="Biscuit">Biscuit</option>
                            </select>
                        </div>
                    </div>
                </article>
                <hr>
                <article>
                    <div class="mb-3">
                        <div class=etapes>
                            <!-- ****************ETAPE CUISSON***************** -->
                            <legend>Étapes Prèparation</legend>
                            <h2><em>Si votre recette nécessite une cuisson au four,
                                    veuillez indiquer la température de cuisson.</em></h2>
                        </div>
                        <br>
                        <div class="row etap" name="etapePre">
                            <textarea name="etapePre" type="text" class="col-sm-12" id="texte" rows="10"></textarea>
                            <figure class="row col-sm-12">
                                <img name="image" class="col" id="img" src="../formulaireOtablier2/images/12.jpg">
                                <figcaption>Image repas du jour</figcaption>
                            </figure>
                        </div>
                        <!-- ***********etape creation des etapes**************** -->
                        <div class="row bout">
                            <br><em> Les etapes de cuisson :</em>
                            <input id="Bouton" class="col-sm-3" name='etape' placeholder="Press me !">
                        </div>
                    </div>
                </article>
                <hr>
                <!-- **********************ETAPE CONSEILS ET MESSAGE**************** -->
                <article>
                    <legend>CONSEIL</legend>
                    <div class="row mb-3">
                        <!-- <h2>Conseils</h2> -->
                        <textarea name="conseil" id="conseil" class="col" cols="115" placeholder="Conseil" rows="10"></textarea>
                    </div>
                    <hr>
                </article>
                <article>
                    <legend>MESSAGE</legend>
                    <div class="row mb-3">
                        <!-- <h2>Message pour le modérateur</h2> -->
                        <textarea name="message" id="message" class="col" cols="115" placeholder="Message" rows="10"></textarea>
                    </div>
                    <div class="col-12">
                        <button id="btn" type="submit" value="ajouter" name="submit">Déposer une recette</button>
                    </div>
                </article>
                <!-- </div> -->
            </form>
        </div>

    </section>
    <script src="./form.js" async></script>
    <script>
        let numeroEtape = 1;
        let btn = document.getElementById("Bouton");
        btn.addEventListener('click', Boite);

        function Boite() {

            let div1 = document.createElement('input');
            div1.type = "textarea";
            div1.style.width = '700px';
            div1.style.height = '100px';
            div1.style.background = '#c0a1a1';
            div1.style.border = "2px solid black";
            let bout = document.querySelector(".bout");
            // for (i = 1; i <= 8; i++) {
            div1.placeholder = "etape" + numeroEtape;
            numeroEtape++;

            // div1.placeholder = "etape" + i;
            // }
            bout.appendChild(div1);

        }
    </script>

</body>

</html>